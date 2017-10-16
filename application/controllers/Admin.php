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
 * @property CI_Session session
 */
class Admin extends CI_Controller{
    /**
     * Admin constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    /**
     *
     */
    function index(){
        checkLogin();
        $data = array(
            'style' => array(
                "vendors/chartist/css/chartist.min.css",
                "vendors/circliful/css/jquery.circliful.css",
                "css/pages/index.css",
            ),
            'script' => array(
               "vendors/countUp.js/js/countUp.min.js",
                "vendors/flip/js/jquery.flip.min.js",
                "js/pluginjs/jquery.sparkline.js",
                "vendors/chartist/js/chartist.min.js",
                "js/pluginjs/chartist-tooltip.js",
                "vendors/swiper/js/swiper.min.js",
                "vendors/circliful/js/jquery.circliful.min.js",
                "vendors/flotchart/js/jquery.flot.js",
                "vendors/flotchart/js/jquery.flot.resize.js",
                "js/pages/index.js",
            ),
        );
        $this->load->view('Admin/index',$data);
    }

    /**
     *
     */
    function login(){
        $errors = array();
        /**
         * Check Login Submit
        */
        if(!empty($_POST)){
            $p_email = !empty($_POST['email'])?$_POST['email']:null;
            $p_password = !empty($_POST['password'])?$_POST['password']:null;
            $p_slogin = !empty($_POST['slogin'])?$_POST['slogin']:null;
            showDebug(md5($p_password));
            //Check email and password
            if(!empty($p_email) AND !empty($p_password)){
                //check user exist and right password
                $iUser = $this->admin_model->getUser($p_email,md5($p_password));
                if(!empty($iUser)){
                    $sUser = array(
                        'id' => $iUser['id'],
                        'email' => $iUser['email'],
                        'name' => $iUser['name'],
                        'level' => $iUser['level'],
                        'status' => 'online',
                        'time' => time(),
                    );
                    $this->session->set_userdata('iUser',json_encode($sUser));
                    redirect('/admin');
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
                "css/components.css",
                "css/custom.css",
                "vendors/bootstrapvalidator/css/bootstrapValidator.min.css",
                "vendors/wow/css/animate.css",
                "css/pages/login1.css",
            ),
            'script' => array(
                "js/jquery.min.js",
                "js/tether.min.js",
                "js/bootstrap.min.js",
                "vendors/bootstrapvalidator/js/bootstrapValidator.min.js",
                "vendors/wow/js/wow.min.js",
                "js/pages/login1.js",
            ),
        );
        //set error to display
        $data['errors'] = $errors;
        $this->load->view('Admin/login',$data);
    }

    function logout(){
        ulogout();
    }

    function users(){
	    $data = array(
		    'style' => array(
			    "vendors/select2/css/select2.min.css",
			    "vendors/datatables/css/scroller.bootstrap.min.css",
			    "vendors/datatables/css/colReorder.bootstrap.min.css",
			    "vendors/datatables/css/dataTables.bootstrap.min.css",
			    "css/pages/dataTables.bootstrap.css",
			    "css/plugincss/responsive.dataTables.min.css",
			    "css/pages/tables.css",
		    ),
		    'script' => array(
			    "vendors/select2/js/select2.js",
			    "vendors/datatables/js/jquery.dataTables.min.js",
			    "js/pluginjs/dataTables.tableTools.js",
			    "vendors/datatables/js/dataTables.colReorder.min.js",
			    "vendors/datatables/js/dataTables.bootstrap.min.js",
			    "vendors/datatables/js/dataTables.buttons.min.js",
			    "js/pluginjs/jquery.dataTables.min.js",
			    "vendors/datatables/js/dataTables.responsive.min.js",
			    "vendors/datatables/js/dataTables.rowReorder.min.js",
			    "vendors/datatables/js/buttons.colVis.min.js",
			    "vendors/datatables/js/buttons.html5.min.js",
			    "vendors/datatables/js/buttons.bootstrap.min.js",
			    "vendors/datatables/js/buttons.print.min.js",
			    "vendors/datatables/js/dataTables.scroller.min.js",
			    "js/pages/datatable.js",
		    ),
	    );
	    $this->load->view('Admin/users',$data);
    }

}