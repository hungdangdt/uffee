<?php
/**
 * Created by clack.
 * Filename: Admin.php
 * Date: 10/13/17
 * Time: 10:39 AM
 */
/*========================================*/

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('Admin/index');
        $this->load->view('Admin/index');
    }
}