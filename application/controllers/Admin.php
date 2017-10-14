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
        $data = array(
            'style' => array(
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/chartist/css/chartist.min.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/circliful/css/jquery.circliful.css'>",
                "<link type='text/css' rel='stylesheet' href='public/admin/css/pages/index.css'>",
                "<link type='text/css' rel='stylesheet' href='public/admin/#' id='skin_change'/>",
            ),
            'script' => array(
                "<script type='text/javascript' src='public/admin/vendors/countUp.js/js/countUp.min.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/flip/js/jquery.flip.min.js'></script>",
                "<script type='text/javascript' src='public/admin/js/pluginjs/jquery.sparkline.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/chartist/js/chartist.min.js'></script>",
                "<script type='text/javascript' src='public/admin/js/pluginjs/chartist-tooltip.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/swiper/js/swiper.min.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/circliful/js/jquery.circliful.min.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/flotchart/js/jquery.flot.js' ></script>",
                "<script type='text/javascript' src='public/admin/vendors/flotchart/js/jquery.flot.resize.js'></script>",
                "<script type='text/javascript' src='public/admin/js/pages/index.js'></script>",    
            ),
        );
        $this->load->view('Admin/index',$data);
    }
}