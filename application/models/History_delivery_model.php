<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History_delivery_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }
    
    
    public function customer_list() {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('is_delete', '0');
        return $this->db->get()->result();
    }
    
    public function get_delivery_history($id_customer, $date) {
        $this->db->select('*');
        $this->db->from('delivery');
        $this->db->where('date', $date);
        $this->db->where('id_customer', $id_customer);
        return $this->db->get()->row();
    }

}

?>
