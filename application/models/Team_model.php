<?php

class Team_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function fetch_all_team(){
        $this->db->select('*')
            ->from('team');

        return $this->db->get()->result_array();
    }

    public function insert($table, $data){
        $this->db->set($data)
            ->insert($table);

        if($this->db->affected_rows() == 1){
            return $this->db->insert_id();
        }

        return false;
    }
    
    public function update($table, $id, $information){
        $this->db->set($information)
            ->where('id', $id)
            ->update($table);

        if($this->db->affected_rows() == 1){
            return true;
        }

        return false;
    }
    
    public function fetch_by_id($table, $id = null){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        return $result = $this->db->get()->row_array();
    }

    public function check_exist_product_id($table, $product_id=''){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('product_id', ',' . $product_id . ',');
        return $result = $this->db->get()->num_rows();
    }

    public function get_by_user_id($table, $member_id=''){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('member_id', ',' . $member_id . ',');
        return $result = $this->db->get()->result_array();
    }
}