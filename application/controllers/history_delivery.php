<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History_delivery extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('history_delivery_model');
    }

    public function index() {
        $this->load->view('history_delivery');
    }

    public function get_history() {
        $customer_list = $this->history_delivery_model->customer_list();

        $date = date('Y-m-d', strtotime($this->input->get('history_date')));

        $data = array();
        
        foreach ($customer_list as $customer) {

            $customer_delivery_details = $customer;

            $customer_delivery_details_result = $this->history_delivery_model->get_delivery_history($customer->id_customer, $date);

            $customer_delivery_details->id_delivery = ($customer_delivery_details_result) ? $customer_delivery_details_result->id_delivery : 0;
            $customer_delivery_details->bottel_present = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_present : 0;
            $customer_delivery_details->bottel_absent = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_absent : 0;
            $customer_delivery_details->bottel_repeat = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_repeat : 0;
            $customer_delivery_details->bottel_empty_return = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_empty_return : 0;

            $data[] = array('Name' => $customer_delivery_details->first_name . " " . $customer_delivery_details->last_name, 'Address' => $customer_delivery_details->address, 'Date' => date('d-F-Y', strtotime($date)), 'Present(P)' => $customer_delivery_details->bottel_present, 'Absent(A)' => $customer_delivery_details->bottel_absent, 'Repeat(R)' => $customer_delivery_details->bottel_repeat, 'Return(L)' => $customer_delivery_details->bottel_empty_return);
        }

        $results = array(
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );

        echo json_encode($results);
    }

}
