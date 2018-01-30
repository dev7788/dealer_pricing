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
    }

    public function index() {
        $this->load->view('index');
    }
}