<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php";

class Team extends Admin_Controller{

    private $excel = null;
	
	function __construct(){
		parent::__construct();
		$this->load->model('information_model');
        $this->load->model('users_model');
        $this->load->model('team_model');

        $this->excel = new PHPExcel();
	}

	public function index(){
	    $teams = $this->team_model->fetch_all_team();

	    $this->data['leaders'] = $this->users_model->fetch_all_leaders();
	    $this->data['members'] = $this->users_model->fetch_all_members();
        $this->data['teams'] = $teams;
        $this->render('admin/team/list_team_view');
	}

	public function create(){
	    $name = $this->input->get('name');

        $insert = $this->team_model->insert('team', array('name' => $name));
        if($insert){
            return $this->output->set_status_header(200)
                ->set_output(json_encode(array('name' => $name)));
        }
        return $this->output->set_status_header(200)
            ->set_output(json_encode(array('message' => 'Có lỗi khi tạo nhóm hội đồng')));
    }

    public function add_team_leader(){
        $team_id = $this->input->get('team_id');
        $leader_id = $this->input->get('leader_id');

        $team = $this->team_model->fetch_by_id('team', $team_id);
        $update = $this->team_model->update('team', $team_id, array('leader_id' => $leader_id));
        if($update){
            return $this->output->set_status_header(200)
                ->set_output(json_encode(array('name' => $team['name'])));
        }
        return $this->output->set_status_header(200)
            ->set_output(json_encode(array('message' => 'Có lỗi khi chọn trưởng nhóm hội đồng')));
    }

    public function add_team_member(){
        $team_id = $this->input->get('team_id');
        $member_id = $this->input->get('member_id');

        $team = $this->team_model->fetch_by_id('team', $team_id);
        $string_team_members = $team['member_id'];
        $team_members = explode(',', $team['member_id']);

        if($team['member_id'] == ''){
            $update = $this->team_model->update('team', $team_id, array('member_id' => $member_id));
        }else{
            if(in_array($member_id, $team_members)){
                $update = false;
            }else{
                $string_team_members .= ',' . $member_id;
                $update = $this->team_model->update('team', $team_id, array('member_id' => $string_team_members));
            }
        }
        if($update){
            return $this->output->set_status_header(200)
                ->set_output(json_encode(array('name' => $team['name'])));
        }
        return $this->output->set_status_header(200)
            ->set_output(json_encode(array('message' => 'Có lỗi khi chọn thành viên hội đồng hoặc thành viên đã tồn tại trong nhóm')));
    }

    public function remove_team_member(){
        $team_id = $this->input->get('team_id');
        $member_id = $this->input->get('member_id');

        $team = $this->team_model->fetch_by_id('team', $team_id);
        $team_members = explode(',', $team['member_id']);

        if (($key = array_search($member_id, $team_members)) !== false) {
            unset($team_members[$key]);
            $update = $this->team_model->update('team', $team_id, array('member_id' => implode(',', $team_members)));
        }
        if($update){
            return $this->output->set_status_header(200)
                ->set_output(json_encode(array('name' => $team['name'])));
        }
        return $this->output->set_status_header(200)
            ->set_output(json_encode(array('message' => 'Có lỗi khi xoá thành viên hội đồng')));
    }
}