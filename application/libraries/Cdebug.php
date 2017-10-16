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

    function showDebug()
    {
        if (func_num_args() > 0 AND !empty(DEBUG_MODE)) {
            echo '<pre>----------------- BEGIN DEBUG -------------------<br/>';
            echo '|<br/>';
            foreach (func_get_args() as $k => $v) {
                echo "| [$k] => "; print_r($v);
            }
            echo '<br/>|<br/>';
            echo '------------------ END DEBUG --------------------</pre>';
        }
    }

    function dieDebug()
    {
        if (func_num_args() > 0 AND !empty(DEBUG_MODE)) {
            echo '<pre>----------------- BEGIN DEBUG -------------------<br/>';
            echo '|<br/>';
            foreach (func_get_args() as $k => $v) {
                echo "| [$k] => "; print_r($v);
            }
            echo '<br/>|<br/>';
            echo '------------------ END DEBUG --------------------</pre>';
        }
        die;
    }
}