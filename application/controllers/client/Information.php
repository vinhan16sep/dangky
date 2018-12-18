<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends Client_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('clients')) {
            //redirect them to the login page
            redirect('client/user/login', 'refresh');
        }

        $this->load->helper('url');
        $this->load->model('information_model');
        $this->load->model('status_model');
        $this->load->model('users_model');
        $this->load->library('session');

        $this->data['user'] = $this->ion_auth->user()->row();
        $this->data['reg_status'] = $this->status_model->fetch_by_client_id($this->data['user']->id);
        
    }

    public function index() {
        $this->data['submitted'] = $this->information_model->fetch_by_user_id('information', $this->data['user']->id);

        $this->render('client/information/detail_extra_view');
    }

    public function extra() {
        $this->data['submitted'] = $this->information_model->fetch_by_user_id('information', $this->data['user']->id);

        $this->render('client/information/detail_extra_view');
    }

    public function create_extra() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('website', 'Website', 'trim|required');
        $this->form_validation->set_rules('legal_representative', 'Tên người đại diện pháp luật', 'trim|required');
        $this->form_validation->set_rules('lp_position', 'Chức danh', 'trim|required');
        $this->form_validation->set_rules('lp_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('lp_phone', 'Di động', 'trim|required|numeric');
        $this->form_validation->set_rules('connector', 'Tên người liên hệ với BTC', 'trim|required');
        $this->form_validation->set_rules('c_position', 'Chức danh', 'trim|required');
        $this->form_validation->set_rules('c_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('c_phone', 'Di động', 'trim|required|numeric');
        $this->form_validation->set_rules('link', 'Link download PĐK của DN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            if($this->data['reg_status'] == 1){
                redirect('client/information', 'refresh');
            }
            $this->data['identity'] = $this->input->get('identity');
            $exist = $this->information_model->check_exist_information($this->input->get('identity'));
            if(!empty($exist)){
                $this->data['exist'] = $exist;
            }
            $this->render('client/information/create_extra_view');
        } else {
            if ($this->input->post()) {
                $data = array(
                    'client_id' => $this->data['user']->id,
                    'website' => $this->input->post('website'),
                    'legal_representative' => $this->input->post('legal_representative'),
                    'lp_position' => $this->input->post('lp_position'),
                    'lp_email' => $this->input->post('lp_email'),
                    'lp_phone' => $this->input->post('lp_phone'),
                    'connector' => $this->input->post('connector'),
                    'c_position' => $this->input->post('c_position'),
                    'c_email' => $this->input->post('c_email'),
                    'c_phone' => $this->input->post('c_phone'),
                    'link' => $this->input->post('link'),
                    'identity' => $this->input->post('identity'),
//                    'is_submit' => 1,
                    'created_at' => $this->author_info['created_at'],
                    'created_by' => $this->author_info['created_by'],
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );

                $exist = $this->information_model->check_exist_information($this->input->post('identity'));
                if(!empty($exist)){
                    unset($data['created_at']);
                    unset($data['created_by']);
                    $update = $this->information_model->update_by_identity('information', $this->input->post('identity'), $data);
                    $this->status_model->update('status', $this->data['user']->id, array('is_information' => 1));
                    $this->users_model->update('users', $this->data['user']->id, array('information_id' => $exist['id']));
                }else{
                    $insert = $this->information_model->insert('information', $data);
                    if (!$insert) {
                        $this->session->set_flashdata('message', 'There was an error inserting item');
                    }
                    $this->load->model('status_model');
                    $this->status_model->update('status', $this->data['user']->id, array('is_information' => 1));
                    $this->users_model->update('users', $this->data['user']->id, array('information_id' => $insert));
                    $this->session->set_flashdata('message', 'Item added successfully');
                }

                redirect('client/information', 'refresh');
            }
        }
    }

    public function edit_extra($request_id = NULL) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('website', 'Website', 'trim|required');
        $this->form_validation->set_rules('legal_representative', 'Tên người đại diện pháp luật', 'trim|required');
        $this->form_validation->set_rules('lp_position', 'Chức danh', 'trim|required');
        $this->form_validation->set_rules('lp_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('lp_phone', 'Di động', 'trim|required|numeric');
        $this->form_validation->set_rules('connector', 'Tên người liên hệ với BTC', 'trim|required');
        $this->form_validation->set_rules('c_position', 'Chức danh', 'trim|required');
        $this->form_validation->set_rules('c_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('c_phone', 'Di động', 'trim|required|numeric');
        $this->form_validation->set_rules('link', 'Link download PĐK của DN', 'trim|required');

        $id = isset($request_id) ? (int) $request_id : (int) $this->input->post('id');
        if ($this->form_validation->run() == FALSE) {
            $this->data['extra'] = $this->information_model->fetch_by_user_information_id('information', $this->data['user']->information_id);

            if (!$this->data['extra']) {
                redirect('client/information', 'refresh');
            }
            
            if($this->data['reg_status'] == 1){
                redirect('client/information', 'refresh');
            }

            $this->render('client/information/edit_extra_view');
        } else {
            if ($this->input->post()) {
                $data = array(
                    'website' => $this->input->post('website'),
                    'legal_representative' => $this->input->post('legal_representative'),
                    'lp_position' => $this->input->post('lp_position'),
                    'lp_email' => $this->input->post('lp_email'),
                    'lp_phone' => $this->input->post('lp_phone'),
                    'connector' => $this->input->post('connector'),
                    'c_position' => $this->input->post('c_position'),
                    'c_email' => $this->input->post('c_email'),
                    'c_phone' => $this->input->post('c_phone'),
                    'link' => $this->input->post('link'),
                    'identity' => $this->input->post('identity'),
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );

                try {
                    $this->information_model->update_by_identity('information', $this->input->post('identity'), $data);
                    $this->session->set_flashdata('message', 'Item updated successfully');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'There was an error updating the item: ' . $e->getMessage());
                }

                redirect('client/information', 'refresh');
            }
        }
    }

    public function company(){
        $this->data['submitted'] = $this->information_model->fetch_by_user_information_id_and_year('company', $this->data['user']->information_id, $this->input->get('year'));

        $this->render('client/information/detail_company_view');
    }

    public function create_company() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('equity', 'Vốn điều lệ', 'trim|required');
        $this->form_validation->set_rules('owner_equity', 'Vốn chủ sở hữu', 'trim|required|numeric');
        $this->form_validation->set_rules('total_income', 'Tổng doanh thu DN', 'trim|required|numeric');
        $this->form_validation->set_rules('software_income', 'Tổng DT lĩnh vực sx phần mềm', 'trim|required|numeric');
        $this->form_validation->set_rules('it_income', 'Tổng doanh thu dịch vụ CNTT', 'trim|required|numeric');
        $this->form_validation->set_rules('export_income', 'Tổng DT xuất khẩu', 'trim|required|numeric');
        $this->form_validation->set_rules('total_labor', 'Tổng số lao động của DN', 'trim|required|numeric');
        $this->form_validation->set_rules('total_ltv', 'Tổng số LTV', 'trim|required|numeric');
        // $this->form_validation->set_rules('main_service', 'Data', 'required');
        // $this->form_validation->set_rules('main_market', 'Data', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            if($this->data['reg_status'] == 1){
                redirect('client/information', 'refresh');
            }
            $this->data['year'] = $this->input->get('year');
            $exist = $this->information_model->check_exist_company_by_year($this->data['user_identity'], $this->input->get('year'));
            if(!empty($exist)){
                $this->data['exist'] = $exist;
            }
            $this->render('client/information/create_company_view');
        } else {
            if ($this->input->post()) {
                $main_service = json_encode($this->input->post('main_service'));
                $main_market = json_encode($this->input->post('main_market'));
                $data = array(
                    'client_id' => $this->data['user']->id,
                    'equity' => $this->input->post('equity'),
                    'owner_equity' => $this->input->post('owner_equity'),
                    'total_income' => $this->input->post('total_income'),
                    'software_income' => $this->input->post('software_income'),
                    'it_income' => $this->input->post('it_income'),
                    'export_income' => $this->input->post('export_income'),
                    'total_labor' => $this->input->post('total_labor'),
                    'total_ltv' => $this->input->post('total_ltv'),
                    'description' => $this->input->post('description'),
                    'information_id' => $this->input->post('information_id'),
                    'year' => $this->input->post('year'),
                    'main_service' => $main_service,
                    'main_market' => $main_market,
//                    'is_submit' => 1,
                    'created_at' => $this->author_info['created_at'],
                    'created_by' => $this->author_info['created_by'],
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );

                $exist = $this->information_model->check_exist_company_by_year($this->data['user_identity'], $this->input->post('year'));
                if(!empty($exist)) {
                    unset($data['created_at']);
                    unset($data['created_by']);
                    $this->information_model->update_by_information_and_year('company', $this->input->post('user_identity'), $this->input->post('year'), $data);
                }else{
                    $insert = $this->information_model->insert_company('company', $data);
                    if (!$insert) {
                        $this->session->set_flashdata('message', 'There was an error inserting item');
                    }
                    $this->load->model('status_model');
                    $this->status_model->update('status', $this->data['user']->id, array('is_company' => 1));
                    $this->session->set_flashdata('message', 'Item added successfully');
                }

                redirect('client/information/company?year=' . $this->input->post('year'), 'refresh');
            }
        }
    }

    public function edit_company($request_id = NULL) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('equity', 'Vốn điều lệ', 'trim|required');
        $this->form_validation->set_rules('owner_equity', 'Vốn chủ sở hữu', 'trim|required|numeric');
        $this->form_validation->set_rules('total_income', 'Tổng doanh thu DN', 'trim|required|numeric');
        $this->form_validation->set_rules('software_income', 'Tổng DT lĩnh vực sx phần mềm', 'trim|required|numeric');
        $this->form_validation->set_rules('it_income', 'Tổng doanh thu dịch vụ CNTT', 'trim|required|numeric');
        $this->form_validation->set_rules('export_income', 'Tổng DT xuất khẩu', 'trim|required|numeric');
        $this->form_validation->set_rules('total_labor', 'Tổng số lao động của DN', 'trim|required|numeric');
        $this->form_validation->set_rules('total_ltv', 'Tổng số LTV', 'trim|required|numeric');

        $id = isset($request_id) ? (int) $request_id : (int) $this->input->post('id');
        if ($this->form_validation->run() == FALSE) {
            $this->data['company'] = $this->information_model->fetch_by_user_information_id_and_year('company', $this->data['user']->information_id, $this->input->get('year'));
            if (!$this->data['company']) {
                redirect('client/information/company', 'refresh');
            }
            
            if($this->data['reg_status'] == 1){
                redirect('client/information', 'refresh');
            }

            if(date('Y') > $this->input->get('year')){
                redirect('client/dashboard', 'refresh');
            }

            $this->render('client/information/edit_company_view');
        } else {
            if ($this->input->post()) {
                $main_service = json_encode($this->input->post('main_service'));
                $main_market = json_encode($this->input->post('main_market'));

                $data = array(
                    'equity' => $this->input->post('equity'),
                    'owner_equity' => $this->input->post('owner_equity'),
                    'total_income' => $this->input->post('total_income'),
                    'software_income' => $this->input->post('software_income'),
                    'it_income' => $this->input->post('it_income'),
                    'export_income' => $this->input->post('export_income'),
                    'total_labor' => $this->input->post('total_labor'),
                    'total_ltv' => $this->input->post('total_ltv'),
                    'description' => $this->input->post('description'),
                    'main_service' => $main_service,
                    'main_market' => $main_market,
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );

                try {
                    $this->information_model->update_by_information_and_year('company', $this->data['user']->information_id, $this->input->post('year'), $data);
                    $this->session->set_flashdata('message', 'Item updated successfully');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'There was an error updating the item: ' . $e->getMessage());
                }

                redirect('client/information/company?year=' . $this->input->post('year'), 'refresh');
            }
        }
    }

    public function products(){
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url() . 'client/information/products';
        $total_rows = $this->information_model->count_product($this->data['user']->id);
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_con($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['products'] = $this->information_model->get_all_product($this->data['user']->id, $per_page, $this->data['page']);

        $this->render('client/information/list_product_view');
    }

    public function detail_product($id = NULL){
        $this->data['product'] = $this->information_model->fetch_product_by_user_and_id('product', $this->data['user']->id, $id);

        $this->render('client/information/detail_product_view');
    }

    public function create_product(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Data', 'trim|required');
        // $this->form_validation->set_rules('service', 'Data', 'trim|required');
        $this->form_validation->set_rules('functional', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('process', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('security', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('positive', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('compare', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('income_2016', 'Data', 'trim|required|numeric', array(
                'required' => '%s không được trống.',
                'numeric' => '%s phải là số.',
            ));
        $this->form_validation->set_rules('income_2017', 'Data', 'trim|required|numeric', array(
                'required' => '%s không được trống.',
                'numeric' => '%s phải là số.',
            ));
        $this->form_validation->set_rules('area', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('open_date', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('price', 'Data', 'trim|required|numeric', array(
                'required' => '%s không được trống.',
                'numeric' => '%s phải là số.',
            ));
        $this->form_validation->set_rules('customer', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('after_sale', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('team', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        $this->form_validation->set_rules('award', 'Data', 'trim|required', array(
                'required' => '%s không được trống.',
            ));
        // $this->form_validation->set_rules('certificate', 'Image', 'callback_check_file_selected');

        if ($this->form_validation->run() == FALSE) {
            if($this->data['reg_status'] == 1){
                redirect('client/information', 'refresh');
            }
            $this->render('client/information/create_product_view');
        } else {
            if ($this->input->post()) {
                $service = json_encode($this->input->post('service'));
                // $image = $this->upload_image('certificate', $_FILES['certificate']['name'], 'assets/upload/product', 'assets/upload/product/thumbs');
                $data = array(
                    'client_id' => $this->data['user']->id,
                    'name' => $this->input->post('name'),
                    'service' => $service,
                    'functional' => $this->input->post('functional'),
                    'process' => $this->input->post('process'),
                    'security' => $this->input->post('security'),
                    'positive' => $this->input->post('positive'),
                    'compare' => $this->input->post('compare'),
                    'income_2016' => $this->input->post('income_2016'),
                    'income_2017' => $this->input->post('income_2017'),
                    'area' => $this->input->post('area'),
                    'open_date' => $this->input->post('open_date'),
                    'price' => $this->input->post('price'),
                    'customer' => $this->input->post('customer'),
                    'after_sale' => $this->input->post('after_sale'),
                    'team' => $this->input->post('team'),
                    'award' => $this->input->post('award'),
                    'certificate' => $this->input->post('certificate'),
                    'information_id' => $this->data['user']->information_id,
                    // 'certificate' => $image,
                    // 'is_submit' => 1,
                    'created_at' => $this->author_info['created_at'],
                    'created_by' => $this->author_info['created_by'],
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );

                $insert = $this->information_model->insert_product('product', $data);
                if (!$insert) {
                    $this->session->set_flashdata('message', 'There was an error inserting item');
                }
                $this->load->model('status_model');
                $this->status_model->update('status', $this->data['user']->id, array('is_product' => 1));
                $this->session->set_flashdata('message', 'Item added successfully');

                redirect('client/information/products', 'refresh');
            }
        }
    }
    
    public function edit_product($request_id = NULL) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Data', 'trim|required');
        // $this->form_validation->set_rules('service', 'Data', 'trim|required');
        $this->form_validation->set_rules('functional', 'Data', 'trim|required');
        $this->form_validation->set_rules('process', 'Data', 'trim|required');
        $this->form_validation->set_rules('security', 'Data', 'trim|required');
        $this->form_validation->set_rules('positive', 'Data', 'trim|required');
        $this->form_validation->set_rules('compare', 'Data', 'trim|required');
        $this->form_validation->set_rules('income_2016', 'Data', 'trim|required|numeric');
        $this->form_validation->set_rules('income_2017', 'Data', 'trim|required|numeric');
        $this->form_validation->set_rules('area', 'Data', 'trim|required');
        $this->form_validation->set_rules('open_date', 'Data', 'trim|required');
        $this->form_validation->set_rules('price', 'Data', 'trim|required|numeric');
        $this->form_validation->set_rules('customer', 'Data', 'trim|required');
        $this->form_validation->set_rules('after_sale', 'Data', 'trim|required');
        $this->form_validation->set_rules('team', 'Data', 'trim|required');
        $this->form_validation->set_rules('award', 'Data', 'trim|required');
        $id = isset($request_id) ? (int) $request_id : (int) $this->input->post('id');
        if ($this->form_validation->run() == FALSE) {
            $this->data['product'] = $this->information_model->fetch_product_by_user_id('product', $this->data['user']->id, $id);
            if (!$this->data['product']) {
                redirect('client/information/product', 'refresh');
            }
            $this->render('client/information/edit_product_view');
        } else {
            if ($this->input->post()) {
                $service = json_encode($this->input->post('service'));
                $data = array(
                    'name' => $this->input->post('name'),
                    'service' => $service,
                    'functional' => $this->input->post('functional'),
                    'process' => $this->input->post('process'),
                    'security' => $this->input->post('security'),
                    'positive' => $this->input->post('positive'),
                    'compare' => $this->input->post('compare'),
                    'income_2016' => $this->input->post('income_2016'),
                    'income_2017' => $this->input->post('income_2017'),
                    'area' => $this->input->post('area'),
                    'open_date' => $this->input->post('open_date'),
                    'price' => $this->input->post('price'),
                    'customer' => $this->input->post('customer'),
                    'after_sale' => $this->input->post('after_sale'),
                    'team' => $this->input->post('team'),
                    'award' => $this->input->post('award'),
                    'certificate' => $this->input->post('certificate'),
                    'is_submit' => 1,
                    'modified_at' => $this->author_info['modified_at'],
                    'modified_by' => $this->author_info['modified_by']
                );
                try {
                    $this->information_model->update_product('product', $this->data['user']->id, $id, $data);
                    $this->session->set_flashdata('message', 'Item updated successfully');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'There was an error updating the item: ' . $e->getMessage());
                }
                redirect('client/information/products', 'refresh');
            }
        }
    }
//
//    public function edit($request_id = NULL) {
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('title', 'Title', 'trim|required');
//        $this->form_validation->set_rules('image', 'Image', 'callback_check_file_selected');
//
//        $id = isset($request_id) ? (int) $request_id : (int) $this->input->post('id');
//        if ($this->form_validation->run() == FALSE) {
//            $this->data['information'] = $this->information_model->fetch_by_id('information', $id);
//
//            if (!$this->data['information']) {
//                redirect('admin/information', 'refresh');
//            }
//
//            $this->render('admin/information/edit_information_view');
//        } else {
//            if ($this->input->post()) {
//                $image = $this->upload_image('image', $_FILES['image']['name'], 'assets/upload/information', 'assets/upload/information/thumbs');
//
//                $data = array(
//                    'type' => $this->input->post('type'),
//                    'title' => $this->input->post('title'),
//                    'image' => $image,
//                    'description' => $this->input->post('description'),
//                    'content' => $this->input->post('content'),
//                    'modified_at' => $this->author_info['modified_at'],
//                    'modified_by' => $this->author_info['modified_by']
//                );
//                if ($image == '') {
//                    unset($data['image']);
//                }
//
//                try {
//                    $this->information_model->update('information', $id, $data);
//                    $this->session->set_flashdata('message', 'Item updated successfully');
//                } catch (Exception $e) {
//                    $this->session->set_flashdata('message', 'There was an error updating the item: ' . $e->getMessage());
//                }
//
//                redirect('admin/information', 'refresh');
//            }
//        }
//    }
//
//    public function remove($id = NULL){
//        if(!isset($id)){
//            redirect('admin/information', 'refresh');
//        }
//
//        $trademark = $this->information_model->fetch_by_id('information', $id);
//        if(!$trademark){
//            redirect('admin/information', 'refresh');
//        }
//
//        $result = $this->information_model->delete('information', $id);
//        if (!$result) {
//            $this->session->set_flashdata('message', 'There was an error when delete item');
//        }
//        $this->session->set_flashdata('message', 'Item deleted successfully');
//
//        redirect('admin/information', 'refresh');
//    }
//
//    public function category(){
//        $this->data['categories'] = $this->information_model->fetch_all('information_category');
//
//        $this->render('admin/information/list_category_view');
//    }
//
//    public function create_category(){
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('title', 'Title', 'trim|required');
//
//        if($this->form_validation->run() == FALSE) {
//            $this->render('admin/information/create_category_view');
//        }else{
//            if($this->input->post()){
//                $data = array(
//                    'title' => $this->input->post('title'),
//                    'description' => $this->input->post('description'),
//                    'created_at' => $this->author_info['created_at'],
//                    'created_by' => $this->author_info['created_by'],
//                    'modified_at' => $this->author_info['modified_at'],
//                    'modified_by' => $this->author_info['modified_by']
//                );
//
//                $result = $this->information_model->insert('information_category', $data);
//                if (!$result) {
//                    $this->session->set_flashdata('message', 'There was an error inserting item');
//                }
//                $this->session->set_flashdata('message', 'Item added successfully');
//
//                redirect('admin/information/category', 'refresh');
//            }
//        }
//    }
//
//    public function edit_category($id){
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('title', 'Title', 'trim|required');
//
//        if(!isset($id)){
//            redirect('admin/information/category', 'refresh');
//        }
//
//        if($this->form_validation->run() == FALSE) {
//            $trademark = $this->information_model->fetch_by_id('information_category', $id);
//            if(!$trademark){
//                redirect('admin/information/category', 'refresh');
//            }
//
//            $this->data['category'] = $trademark;
//            $this->render('admin/information/edit_category_view');
//        }else{
//            if($this->input->post()){
//                $data = array(
//                    'title' => $this->input->post('title'),
//                    'description' => $this->input->post('description'),
//                    'modified_at' => $this->author_info['modified_at'],
//                    'modified_by' => $this->author_info['modified_by']
//                );
//
//                $result = $this->information_model->update('information_category', $id, $data);
//                if (!$result) {
//                    $this->session->set_flashdata('message', 'There was an error when update item');
//                }
//                $this->session->set_flashdata('message', 'Item updated successfully');
//
//                redirect('admin/information/category', 'refresh');
//            }
//        }
//    }
//
//    public function remove_category($id){
//        if(!isset($id)){
//            redirect('admin/information/category', 'refresh');
//        }
//
//        $trademark = $this->information_model->fetch_by_id('information_category', $id);
//        if(!$trademark){
//            redirect('admin/information/category', 'refresh');
//        }
//
//        $result = $this->information_model->delete('information_category', $id);
//        if (!$result) {
//            $this->session->set_flashdata('message', 'There was an error when delete item');
//        }
//        $this->session->set_flashdata('message', 'Item deleted successfully');
//
//        redirect('admin/information/category', 'refresh');
//    }
//
//
//
//    public function dropdown_category(){
//        $categories = $this->information_model->fetch_all('information_category');
//        $titles = array(
//            '' => 'Select'
//        );
//        if($categories){
//            foreach($categories as $key => $value){
//                $titles[$value['id']] = $value['title'];
//            }
//        }
//        return $titles;
//    }
//
    function check_file_selected(){

        $this->form_validation->set_message('check_file_selected', 'Please select file.');
        if (empty($_FILES['certificate']['name'])) {
            return false;
        }else{
            return true;
        }
    }
    
    public function set_final(){
        $this->status_model->update('status', $this->data['user']->id, array('is_final' => 1));
        redirect('client/dashboard', 'refresh');
    }

}
