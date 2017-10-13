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
            'styles' => array(
                "<link type='text/css' rel='stylesheet' href='{APPPATH}/views/Admin/assets/vendors/chartist/css/chartist.min.css'/>",
                "<link type='text/css' rel='stylesheet' href='{APPPATH}/views/Admin/assets/vendors/circliful/css/jquery.circliful.css'>",
                "<link type='text/css' rel='stylesheet' href='{APPPATH}/views/Admin/assets/css/pages/index.css'>",
                "<link type='text/css' rel='stylesheet' href='{APPPATH}/views/Admin/assets/#' id='skin_change'/>",
            ),
            'script' => array(
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/countUp.js/js/countUp.min.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/flip/js/jquery.flip.min.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/js/pluginjs/jquery.sparkline.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/chartist/js/chartist.min.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/js/pluginjs/chartist-tooltip.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/swiper/js/swiper.min.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/circliful/js/jquery.circliful.min.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/flotchart/js/jquery.flot.js' ></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/vendors/flotchart/js/jquery.flot.resize.js'></script>",
                "<script type='text/javascript' src='{APPPATH}/views/Admin/assets/js/pages/index.js'></script>",    
            ),
        );
        $this->load->view('Admin/index',$data);
    }
}