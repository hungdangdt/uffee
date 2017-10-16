<?php
/**
 * Created by clack.
 * Filename: Login.php
 * Date: 10/16/17
 * Time: 12:47 PM
 */

/*========================================*/

class Login
{
    private $CI;

    function __construct()
    {
        $this->CI =& get_instance();
    }

    function checkLogin()
    {
        $logged = false;
        if (!empty($iUser = $this->CI->session->userdata('iUser'))) {
            if ($iUser['status'] == 'online') {
                if (strtotime($iUser['time']) - time() <= 24) {
                    $logged = true;
                }
            }
        }
        if(empty($logged))
            $this->logout();
        else
            return true;
    }

    function logout(){
        $this->CI->session->sess_destroy();
        redirect('admin/login');
    }
}