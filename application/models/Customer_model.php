<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function customer_list() {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('is_delete', '0');
        return $this->db->get()->result();
    }

    public function get_customer_by_id($id_customer) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('id_customer', $id_customer);
        return $this->db->get()->row();
    }

    public function delete_customer($id_customer) {
        $this->db->where('id_customer', $id_customer);
        return $this->db->update('customer', array('is_delete' => 1));
    }

    public function update_customer_response($update_data, $id_customer) {
        $this->db->where('id_customer', $id_customer);
        return $this->db->update('customer', $update_data);
    }

    public function save_customer($insert_data) {
        return $this->db->insert('customer', $insert_data);
    }

}
