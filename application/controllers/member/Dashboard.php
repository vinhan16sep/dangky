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
        }
        $this->data['team'] = $team;

    	if($user->member_role == 'member' || $user->member_role == 'leader'){
            $this->data['team'] = $this->get_personal_products($user->id);
        }
    	$this->data['user_id'] = $user->id;

        $this->render('member/dashboard_view');
    }

    public function get_personal_products($user_id){
        $list_team = $this->team_model->get_current_user_team($user_id);
        if ( !empty($list_team) ) {
            foreach($list_team as $key => $value){
                $product_ids = explode(',', $value['product_id']);
                if ( is_array($product_ids) && !empty($product_ids) ) {
                    foreach($product_ids as $k => $val){
                        if(empty($val)){
                            unset($product_ids[$k]);
                        }
                    }
                    if($product_ids){
                        $products = $this->information_model->get_personal_products($product_ids);
                        $list_team[$key]['product_list'] = $products;
                    }

                }
            }
        }
        return $list_team;
    }
}