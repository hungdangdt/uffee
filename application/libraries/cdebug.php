<?php
/**
 * Created by clack.
 * Filename: cdebug.php
 * Date: 10/14/17
 * Time: 6:21 PM
 */

/*========================================*/

class Cdebug
{
    var $CI = '';

    function __construct()
    {
        $this->CI =& get_instance();
    }

    function showDebug(){
        if(func_num_args() > 0){
            foreach(func_get_args() as $k=>$v){
                echo '<pre>';
                echo print_r($v);
                echo '</pre>';
            }
        }
    }
}