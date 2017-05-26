<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function resolve_user_login($username, $password) {
        $where_array = array(
            'username' => $username,
            'password' => md5($password)
        );

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($where_array);
        $user = $this->db->get();

        if ($user->num_rows()) {
            return $user->row();
        } else {
            return FALSE;
        }
    }

}
