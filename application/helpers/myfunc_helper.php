<?php if ( ! defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}
/**
 * Created by clack.
 * Filename: myfunc_helper.php
 * Date: 10/16/17
 * Time: 4:41 PM
 */
/*========================================*/
if ( ! function_exists( 'checkLogin' ) ) {
	/**
	 * @return bool
	 */
	function checkLogin() {
		$CI     =& get_instance();
		$logged = false;
		$iUser  = json_decode($CI->session->userdata( 'iUser' ),true);
		if ( ! empty( $iUser ) ) {
			if ( $iUser['status'] == 'online' ) {
				if ( ($iUser['time'] - time())/60 <= 24 ) {
					$logged = true;
				}
			}
		}
		if ( empty( $logged ) ) {
			ulogout();
		} else {
			return true;
		}
	}
}

if ( ! function_exists( 'ulogout' ) ) {
	/**
	 *
	 */
	function ulogout() {
		$CI =& get_instance();
		$CI->session->sess_destroy();
		redirect( 'admin/login' );
	}
}

if ( ! function_exists( 'showDebug' ) ) {
	function showDebug() {
		if ( func_num_args() >= 1 AND ! empty( DEBUG_MODE ) ) {

			foreach ( func_get_args() as $k => $v ) {
				if (func_num_args() ==1 AND empty($v))
					break;
				if ( ! empty( $v ) ) {
					if ( $k == 0 ) {
						echo '<pre>----------------- BEGIN SHOW DEBUG -------------------<br/>';
						echo '|<br/>';
					}
					/**
					 * Content show
					*/
					echo "| [$k] => ";
					print_r( $v );
					if($k == count(func_get_args())-1){
						echo '<br/>|<br/>';
						echo '------------------ END DEBUG --------------------</pre>';
					}
				}
			}
		}
	}
}

if ( ! function_exists( 'dieDebug' ) ) {
	function dieDebug() {
		if ( func_num_args() >= 1 AND ! empty( DEBUG_MODE ) ) {

			foreach ( func_get_args() as $k => $v ) {
				if ( ! empty( $v ) ) {
					if ( $k == 0 ) {
						echo '<pre>----------------- BEGIN DIE DEBUG -------------------<br/>';
						echo '|<br/>';
					}
					/**
					 * Content show
					 */
					echo "| [$k] => ";
					print_r( $v );
					if($k == count(func_get_args())-1){
						echo '<br/>|<br/>';
						echo '------------------ END DEBUG --------------------</pre>';
					}
				}
			}
		}
		die;
	}
}