<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php";

class New_rating extends Member_Controller{

    protected $options_1 = array(
        'Chính phủ điện tử' => 'Chính phủ điện tử',
        'Quản lý doanh nghiệp' => 'Quản lý doanh nghiệp',
        'Kế toán, tài chính, ngân hàng' => 'Kế toán, tài chính, ngân hàng',
        'Quản lý bán hàng, phân phối, bán lẻ và chuỗi cung ứng' => 'Quản lý bán hàng, phân phối, bán lẻ và chuỗi cung ứng',
        'Bất động sản' => 'Bất động sản',
        'Quảng cáo, tiếp thị và truyền thông số' => 'Quảng cáo, tiếp thị và truyền thông số',
        'Y tế, chăm sóc sức khỏe và làm đẹp' => 'Y tế, chăm sóc sức khỏe và làm đẹp',
        'Giáo dục, đào tạo' => 'Giáo dục, đào tạo',
        'Giao thông vận tải' => 'Giao thông vận tải',
        'Công nghiệp và sản xuất' => 'Công nghiệp và sản xuất',
        'Nông nghiệp và chế biến thực phẩm' => 'Nông nghiệp và chế biến thực phẩm',
        'Du lịch, quản lý nhà hàng/khách sạn' => 'Du lịch, quản lý nhà hàng/khách sạn',
        'Công tác nhân sự, văn phòng' => 'Công tác nhân sự, văn phòng',
        'Viễn thông' => 'Viễn thông',
        'Tài nguyên, Năng lượng và Tiện ích' => 'Tài nguyên, Năng lượng và Tiện ích',
        'Cơ khí và xây dựng' => 'Cơ khí và xây dựng',
        'Nền tảng và Công cụ ứng dụng' => 'Nền tảng và Công cụ ứng dụng',
        'Thanh toán điện tử' => 'Thanh toán điện tử ',
        'Thương mại điện tử' => 'Thương mại điện tử',
        'Truyền thông và Giải trí điện tử' => 'Truyền thông và Giải trí điện tử',
        'Bảo mật và an toàn thông tin' => 'Bảo mật và an toàn thông tin',
        'Bảo vệ môi trường và phát triển bền vững' => 'Bảo vệ môi trường và phát triển bền vững',
        'Nghiên cứu và phát triển' => 'Nghiên cứu và phát triển',
        'Các lĩnh vực khác' => 'Các lĩnh vực khác'
    );
    protected $options_4 = array(
        'Gia công xuất khẩu phần mềm' => 'Gia công xuất khẩu phần mềm',
        'BPO' => 'BPO',
        'Data Center' => 'Data Center',
        'Đào tạo CNTT' => 'Đào tạo CNTT',
        'Nội dung số' => 'Nội dung số',
        'Điện toán đám mây và Big Data' => 'Điện toán đám mây và Big Data',
        'An toàn thông tin' => 'An toàn thông tin',
        'Các lĩnh vực khác' => 'Các lĩnh vực khác'
    );

	function __construct(){
		parent::__construct();
		$this->load->helper('form');

		$this->load->model('information_model');
		$this->load->model('new_rating_model');
	}

    public function index($product_id=''){
        $id = $this->input->get('id');
        $main_service = $this->input->get('main_service');
        if(empty($main_service)){
            $this->session->set_flashdata('main_service_message', 'Sản phẩm bạn vừa chọn chưa được đặt lĩnh vực chính');
            redirect('member/');
        }
        $detail = $this->information_model->fetch_by_id('product', $id);
        $company = $this->information_model->fetch_by_id('users', $detail['client_id']);
        $this->data['detail'] = $detail;
        $this->data['company'] = $company;
        $this->data['main_service'] = $main_service;
        $this->data['rating'] = $this->new_rating_model->check_rating_exist('new_rating', $detail['id'], $this->ion_auth->user()->row()->id);

        $this->render('member/rating_view_' . $main_service);
    }

    public function rating(){
	    $post = $this->input->post();
	    $rating = '';
	    for($i = 1;$i <= (count($post) - 2); $i++){
	        if($i == 1){
                $rating .= $post[$i];
            }else{
                $rating .= ',' . $post[$i];
            }
        }

	    $data = array(
	        'member_id' => $post['member_id'],
	        'product_id' => $post['product_id'],
            'rating' => $rating
        );

	    $insert = $this->new_rating_model->insert('new_rating', $data);
        if($insert){
            return $this->output->set_status_header(200)
                ->set_output(json_encode(array('name' => $insert)));
        }
        return $this->output->set_status_header(200)
            ->set_output(json_encode(array('message' => 'Có lỗi khi lưu điểm')));
    }
}