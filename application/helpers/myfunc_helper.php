<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by clack.
 * Filename: myfunc_helper.php
 * Date: 10/16/17
 * Time: 4:41 PM
 */
/*========================================*/
if(!function_exists('checkLogin')) {
    /**
     * @return bool
     */
    function checkLogin()
    {
        $CI =& get_instance();
        $CI->load->library('cdebug');
        $logged = false;
        $iUser = $CI->session->userdata('iUser');
        $CI->cdebug->dieDebug(json_decode($iUser,true));
        if (!empty($iUser)) {
            if ($iUser['status'] == 'online') {
                if (strtotime($iUser['time']) - time() <= 24) {
                    $logged = true;
                }
            }
        }
        if (empty($logged))
            $this->logout();
        else
            return true;
    }
}

if(!function_exists('logout')) {
    /**
     *
     */
    function ulogout()
    {
        $CI =& get_instance();
        $CI->session->sess_destroy();
        redirect('admin/login');
    }
}

if(!function_exists('showDebug')) {
    function showDebug()
    {
        if (func_num_args() > 0 AND !empty(DEBUG_MODE)) {
            echo '<pre>----------------- BEGIN DEBUG -------------------<br/>';
            echo '|<br/>';
            foreach (func_get_args() as $k => $v) {
                echo "| [$k] => ";
                print_r($v);
            }
            echo '<br/>|<br/>';
            echo '------------------ END DEBUG --------------------</pre>';
        }
    }
}

if(!function_exists('dieDebug')) {
    function dieDebug()
    {
        if (func_num_args() > 0 AND !empty(DEBUG_MODE)) {
            echo '<pre>----------------- BEGIN DEBUG -------------------<br/>';
            echo '|<br/>';
            foreach (func_get_args() as $k => $v) {
                echo "| [$k] => ";
                print_r($v);
            }
            echo '<br/>|<br/>';
            echo '------------------ END DEBUG --------------------</pre>';
        }
        die;
    }
}