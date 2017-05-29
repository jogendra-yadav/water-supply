<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function get_all_user_list() {
        return $this->db->select('*')
                        ->from('user')
                        ->get()
                        ->result();
    }

    public function save_user($insert_data) {
        return $this->db->insert('user', $insert_data);
    }

}
