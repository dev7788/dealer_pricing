<?php
/**
 * Created by PhpStorm.
 * User: minimac
 * Date: 1/31/18
 * Time: 12:51 AM
 */

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        //Checking user is login or not
        is_login();
        $this->user_id =isset($this->session->get_userdata()['user_details'][0]->users_id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
        $this->load->model('Invoice_model');
    }

    public function index() {
        $this->load->view('index');
    }

    public function generateInvoice() {
        $inputData = $this->input->post();
        $dt = [];
        foreach ($inputData as $key => $value ) {
            $k = str_replace('-', '_', $key);
            $v = 0;
            if ($value != "") {
                $v = str_replace('$', '', $value);
            }
            $dt[$k] = $v;
        }

        $dt['user_id'] = $this->user_id;
        try {
            $insert_id = $this->Invoice_model->insertRow('invoices', $dt);
            if ($insert_id) {
                $resp = array('status' => 'success');
            } else {
                $resp = array('status' => 'failed');
            }
        } catch (Exception $e) {
            $resp = array('status' => 'failed');
        }

        echo json_encode($resp);

    }
}