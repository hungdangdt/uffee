<?php
/**
 * Created by clack.
 * Filename: Admin.php
 * Date: 10/13/17
 * Time: 10:39 AM
 */
/*========================================*/

/**
 * Class Admin
 * @property Admin admin_control
 * @property Admin_model admin_model
 */
class Admin extends CI_Controller{
    /**
     * Admin constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('cdebug');
        $this->load->model('admin_model');
        $this->load->helper('cookie');
    }

    /**
     *
     */
    public function index(){
        $data = array(
            'style' => array(
                "<link type='text/css' rel='stylesheet' href='public/admin/css/components.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/css/custom.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/chartist/css/chartist.min.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/circliful/css/jquery.circliful.css'>",
                "<link type='text/css' rel='stylesheet' href='public/admin/css/pages/index.css'>",
                "<link type='text/css' rel='stylesheet' href='public/admin/#' id='skin_change'/>",
            ),
            'script' => array(
                "<script type='text/javascript' src='public/admin/js/components.js'></script>",
                "<script type='text/javascript' src='public/admin/js/custom.js'></script>",
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

    /**
     *
     */
    public function login(){
        $errors = array();
        /**
         * Check Login Submit
        */
        if(!empty($_POST)){
            $p_email = !empty($_POST['email'])?$_POST['email']:null;
            $p_password = !empty($_POST['password'])?$_POST['password']:null;
            $p_slogin = !empty($_POST['slogin'])?$_POST['slogin']:null;

            //Check email and password
            if(!empty($p_email) AND !empty($p_password)){
                //check user exist and right password
                $iUser = $this->admin_model->getUser($p_email,md5($p_password));
                if(!empty($iUser)){
                    $this->input->set_cookie('userInfo',json_encode($iUser,JSON_UNESCAPED_UNICODE));
                }else{
                    $errors[] = 'Email và mật khẩu không đúng. Vui lòng kiểm tra và thử lại';
                }
            }
        }

        /**
         * Load index
        */
        $data = array(
            'style' => array(
                "<link type='text/css' rel='stylesheet' href='public/admin/css/components.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/css/custom.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css'/>",
                "<link type='text/css' rel='stylesheet' href='public/admin/vendors/wow/css/animate.css'>",
                "<link type='text/css' rel='stylesheet' href='public/admin/css/pages/login1.css'>",
            ),
            'script' => array(
                "<script type='text/javascript' src='public/admin/js/jquery.min.js'></script>",
                "<script type='text/javascript' src='public/admin/js/tether.min.js'></script>",
                "<script type='text/javascript' src='public/admin/js/bootstrap.min.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js'></script>",
                "<script type='text/javascript' src='public/admin/vendors/wow/js/wow.min.js'></script>",
                "<script type='text/javascript' src='public/admin/js/pages/login1.js'></script>",
            ),
        );
        //set error to display
        $data['errors'] = $errors;
        $this->load->view('Admin/login',$data);
    }
}