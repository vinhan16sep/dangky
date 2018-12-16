<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('ion_auth_model');
    }

    public function index() {
        
    }

    public function login() {
//        if ($this->ion_auth->logged_in() || $this->ion_auth->in_group('clients'))
//        {
//            redirect('client/dashboard', 'refresh');
//        }
        $this->data['page_title'] = 'Login';
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');
            if ($this->form_validation->run() === TRUE) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    redirect('client', 'refresh');
                } else {
                    $this->session->set_flashdata('login_message', $this->ion_auth->errors());
                    redirect('client/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');

        $this->render('client/login_view', 'client_master');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('client/user/login', 'refresh');
    }

    public function register(){
        $this->data['page_title'] = 'Tạo mới user';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim');
        $this->form_validation->set_rules('last_name','Last name','trim');
        $this->form_validation->set_rules('position','Position','trim');
        $this->form_validation->set_rules('companyname','Company','trim');
        $this->form_validation->set_rules('phone','Phone','trim');
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('register_password','Password','required');
        $this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[register_password]');

        if($this->form_validation->run()===FALSE) {
            $this->load->helper('form');
            $this->render('client/login_view', 'client_master');
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('register_password');
            $group_ids = array(3);

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'position' => $this->input->post('position'),
                'company' => $this->input->post('companyname'),
                'phone' => $this->input->post('phone')
            );
            $result = $this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);
            if($result){
                $this->load->model('status_model');
                $status = array(
                    'client_id' => $result,
                    'is_information' => 0,
                    'is_company' => 0,
                    'is_product' => 0,
                    'is_final' => 0
                );
                $this->status_model->insert('status', $status);
            }

            if($result){
                $this->session->set_flashdata('register_success', 'Tài khoản được tạo thành công, vui lòng đăng nhập và điền đầy đủ thông tin.');
                redirect('client/user/login', 'refresh');
                $this->ion_auth->login($username, $password, false);
                redirect('client', 'refresh');
            }
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('client/dashboard', 'refresh');
        }
    }

    // change password
    public function change_password()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
        $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
        $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('clients'))
        {
            redirect('client/user/login', 'refresh');
        }

        $user = $this->ion_auth->user()->row();

        if ($this->form_validation->run() == false)
        {
            // display the form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
            $this->data['old_password'] = array(
                'name' => 'old',
                'id'   => 'old',
                'type' => 'password',
                'class' => 'form-control'
            );
            $this->data['new_password'] = array(
                'name'    => 'new',
                'id'      => 'new',
                'type'    => 'password',
                'class' => 'form-control',
                'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
            );
            $this->data['new_password_confirm'] = array(
                'name'    => 'new_confirm',
                'id'      => 'new_confirm',
                'type'    => 'password',
                'class' => 'form-control',
                'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
            );
            $this->data['user_id'] = array(
                'name'  => 'user_id',
                'id'    => 'user_id',
                'type'  => 'hidden',
                'value' => $user->id,
            );

            // render
            $this->render('client/change_password_view', 'client_master');
        }
        else
        {
            $identity = $this->session->userdata('identity');

            $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

            if ($change)
            {
                //if the password was successfully changed
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->logout();
            }
            else
            {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('client/user/change_password', 'refresh');
            }
        }
    }

    public function check_email(){
        $email = $this->input->post('email');
        $where = array('email' => $email);
        $result = $this->ion_auth_model->check_where($where);
        if($result >=1){
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return FALSE;
        }
        return true;
    }

    public function check_user(){
        $username = $this->input->post('username');
        $where = array('username' => $username);
        $result = $this->ion_auth_model->check_where($where);
        if($result >=1 ){
            $this->form_validation->set_message(__FUNCTION__, 'Username đã tồn tại');
            return FALSE;
        }
        return true;
    }
}
