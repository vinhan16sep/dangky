<?php defined('BASEPATH') OR exit('No direct script access allowed');

class List_user extends Member_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('information_model');
        $this->load->model('team_model');
        $this->load->model('new_rating_model');
    }

    public function index($team_id='', $product_id=''){
    	if ($this->ion_auth->user()->row()->member_role != 'leader') {
    		redirect('member/','refresh')
    	}
    	$team = $this->team_model->fetch_by_id('team', $team_id);
    	$list_team = array();
    	if ($team && $team['member_id']) {
    		$member_ids = explode(',', $team['member_id']);
            if ( is_array($member_ids) && !empty($member_ids) ) {
                foreach($member_ids as $k => $val){
                    if(empty($val)){
                        unset($member_ids[$k]);
                    }
                }
                $member_ids[] = $team['leader_id'];
                if($member_ids){
                    $members = $this->information_model->get_personal_members($member_ids);
                    if ($members) {
                    	foreach ($members as $key => $value) {
                    		$is_rating = $this->new_rating_model->check_rating_exist('new_rating', $product_id, $value['id']);
                    		if ( $is_rating) {
                    			$members[$key]['is_rating'] = 1;
                    		}else{
                    			$members[$key]['is_rating'] = 0;
                    		}
                    	}
                    	$list_team = $members;
                    }
                }

            }
    	}
    	$product = $this->information_model->fetch_by_id('product', $product_id);
    	// echo '<pre>';
    	// print_r($member_ids);die;
    	$this->data['team'] = $list_team;
    	$this->data['product_id'] = $product_id;
    	$this->data['main_service'] = $product ? $product['main_service'] : '';
    	$this->render('member/list_team/index');
    }

}