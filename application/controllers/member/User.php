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

    public function login() {if ($this->ion_auth->logged_in()){
            if($this->ion_auth->in_group('members')){
                redirect('member/dashboard', 'refresh');
            }else{
                $this->ion_auth->logout();
                redirect('member/user/login', 'refresh');
            }
        }
        $this->data['page_title'] = 'Login';
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');
            if ($this->form_validation->run() === TRUE) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    redirect('member', 'refresh');
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('member/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');

        $this->render('member/login_view', 'member_master');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('member/user/login', 'refresh');
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

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('members'))
        {
            redirect('member/user/login', 'refresh');
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
            $this->render('member/change_password_view', 'member_master');
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
                redirect('member/user/change_password', 'refresh');
            }
        }
    }

//    public function register(){
//        $this->data['page_title'] = 'Register';
//        $this->load->library('form_validation');
//        $this->load->helper('form');
//        $this->form_validation->set_rules('first_name', 'Frist Name', 'required');
//        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
//        $this->form_validation->set_rules('companyname', 'Company Name', 'required');
//        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_user');
//        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
//        $this->form_validation->set_rules('phone', 'Phone', 'required');
//        $this->form_validation->set_rules('password', 'Password', 'required');
//        $this->form_validation->set_rules('cf_password', 'Confirm Password', 'required|matches[password]');
//        if($this->input->post()){
//            if($this->form_validation->run() === TRUE){
//                $data = array(
//                    'username' => $this->input->post('username'),
//                    'password' => $this->input->post('password'),
//                    'email' => $this->input->post('email'),
//                    'first_name' => $this->input->post('first_name'),
//                    'last_name' => $this->input->post('last_name'),
//                    'company' => $this->input->post('companyname'),
//                    'phone' => $this->input->post('phone')
//                );
//                $this->ion_auth_model->insert($data);
//            }
//        }
//
//        $this->render('admin/register_view', 'admin_master');
//    }
//    public function check_email(){
//        $email = $this->input->post('email');
//        $where = array('email' => $email);
//        $result = $this->ion_auth_model->check_where($where);
//        if($result >=1){
//            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
//            return FALSE;
//        }
//        return true;
//    }
//
//    public function check_user(){
//        $username = $this->input->post('username');
//        $where = array('username' => $username);
//        $result = $this->ion_auth_model->check_where($where);
//        if($result >=1 ){
//            $this->form_validation->set_message(__FUNCTION__, 'Username đã tồn tại');
//            return FALSE;
//        }
//        return true;
//    }
}
