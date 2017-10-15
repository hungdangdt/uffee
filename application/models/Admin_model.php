<?php
/**
 * Created by clack.
 * Filename: Admin_model.php
 * Date: 10/15/17
 * Time: 1:34 PM
 */
/*========================================*/

class Admin_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    function getUser($userEmail,$userPass){
        $array_where = array(
            'email' => $userEmail,
            'password' => $userPass
        );
        $this->db->where($array_where);
        $query = $this->db->get("ec_user");
        if($query->num_rows() >= 1){
            return $query->row_array();
        }else{
            return false;
        }
    }
}