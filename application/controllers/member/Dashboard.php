<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Member_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('information_model');
        $this->load->model('team_model');
    }

    public function index(){
    	$this->load->model('users_model');
    	$user = $this->ion_auth->user()->row();
        $team = $this->team_model->get_by_user_id('team', $user->user_id);
        $product_ids = array();
        foreach ($team as $key => $value) {
            if ( !empty($value['product_id']) ) {
                $product_ids[] = explode(',', $value['product_id']);
                
            }
            // $products = $this->information_model->fetch_product_by_ids('product');
        }
        // echo '<pre>';
        //         print_r($product_ids);die;
        $this->data['team'] = $team;

    	if($user->member_role == 'member'){
            $this->data['team'] = $this->get_personal_products($user->id);
        }


    	/* Total companys */
    	// $total_companys = $this->information_model->count_company_by_member_id($user->id);
        $total_companys = 0;
        if(!empty($user->company_id)){
            $total_companys = count(json_decode($user->company_id));
        }

    	/* total clients */
    	$total_users = $this->users_model->count_all_users_groups();
    	
    	/* total products */
    	$total_products = $this->information_model->count_all_product();

    	$this->data['total_companys'] = $total_companys;
    	$this->data['total_users'] = $total_users;
    	$this->data['total_products'] = $total_products;
    	$this->data['user_id'] = $user->id;

        $this->render('member/dashboard_view');
    }

    public function get_personal_products($user_id){
        $list_team = $this->team_model->get_current_user_team($user_id);
        $product_string = '';
        if ( !empty($list_team) ) {
            foreach($list_team as $key => $value){
                $product_string .= $value['product_id'];
            }
            if ( $product_string != '' ) {
                $product_ids = explode(',', $product_string);
                if ( is_array($product_ids) && !empty($product_ids) ) {
                    foreach($product_ids as $k => $val){
                        if(empty($val)){
                            unset($product_ids[$k]);
                        }
                    }
                    $products = $this->information_model->get_personal_products($product_ids);
                    $list_team[$key]['product_list'] = $products;
                }
            }
        }
        return $list_team;
    }
}