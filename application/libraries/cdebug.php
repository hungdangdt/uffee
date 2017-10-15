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
    protected $CI = '';

    function __construct()
    {
        $this->CI =& get_instance();
    }

    function showDebug(){
        if(func_num_args() > 0 AND DEBUG_MODE){
            foreach(func_get_args() as $k=>$v){
                echo '<pre>';
                echo "$k =>";
                echo print_r($v);
                echo '</pre>';
            }
        }
    }

    function dieDebug(){
        if(func_num_args() > 0 AND DEBUG_MODE){
            foreach(func_get_args() as $k=>$v){
                echo '<pre>';
                echo "$k =>";
                echo print_r($v);
                echo '</pre>';
            }
        }
        die;
    }
}