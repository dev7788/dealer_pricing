<?php
class Invoice_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertRow($table, $data){
        $this->db->insert($table, $data);
        return  $this->db->insert_id();
    }


}