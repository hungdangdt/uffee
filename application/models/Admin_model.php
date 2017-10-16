<?php
/**
 * Created by clack.
 * Filename: Admin_model.php
 * Date: 10/15/17
 * Time: 1:34 PM
 */
/*========================================*/

/**
 * Class Admin_model
 * @property Admin_model admin_model
 */
class Admin_model extends CI_Model{

    /**
     * Admin_model constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    /**
     * @param $userEmail
     * @param $userPass
     * @return array|bool
     */
    function getUser($userEmail, $userPass){
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