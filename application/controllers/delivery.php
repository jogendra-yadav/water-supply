<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('delivery_model');
    }

    public function index() {
        $customer_list = $this->delivery_model->customer_list();

        $data['customer_list'] = array();
        
        foreach ($customer_list as $customer) {
            
            $customer_delivery_details = $customer;
            
            $customer_delivery_details_result = $this->delivery_model->get_current_date_data($customer->id_customer, date('Y-m-d'));
//            print_r($customer_delivery_details_result->bottel_present);die();
            $customer_delivery_details->id_delivery = ($customer_delivery_details_result) ? $customer_delivery_details_result->id_delivery : 0;
            $customer_delivery_details->bottel_present = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_present : 0;
            $customer_delivery_details->bottel_absent = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_absent : 0;
            $customer_delivery_details->bottel_repeat = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_repeat : 0;
            $customer_delivery_details->bottel_empty_return = ($customer_delivery_details_result) ? $customer_delivery_details_result->bottel_empty_return : 0;
            $data['customer_list'][] = $customer_delivery_details;
        }
        
        $this->load->view('delivery', $data);
    }

    public function reset_count_delivery() {
        $id_customer = $this->input->post('id_customer');
        $action_for = $this->input->post('action_for');

        if (!empty($id_customer) && !empty($action_for)) {
            $date = date("Y-m-d");

            $current_date_data = $this->delivery_model->get_current_date_data($id_customer, $date);

            if (!empty($current_date_data)) {
                $present = $current_date_data->bottel_present;
                $absent = $current_date_data->bottel_absent;
                $repeat = $current_date_data->bottel_repeat;
                $return_empty = $current_date_data->bottel_empty_return;
            } else {
                $present = 0;
                $absent = 0;
                $repeat = 0;
                $return_empty = 0;
            }

            switch ($action_for) {
                case 'present':
                    $present = 0;
                    break;
                case 'absent':
                    $absent = 0;
                    break;
                case 'repeat':
                    $repeat = 0;
                    break;
                case 'return_empty':
                    $return_empty = 0;
                    break;
            }

            if (!empty($current_date_data)) {
                $where_conditions = array('date' => $date, 'id_customer' => $id_customer);
                $update_data = array(
                    'bottel_present' => $present,
                    'bottel_absent' => $absent,
                    'bottel_repeat' => $repeat,
                    'bottel_empty_return' => $return_empty
                );
                $this->delivery_model->update_delivery($where_conditions, $update_data);
            } else {
                $insert_data = array(
                    'id_customer' => $id_customer,
                    'date' => $date,
                    'bottel_present' => $present,
                    'bottel_absent' => $absent,
                    'bottel_repeat' => $repeat,
                    'bottel_empty_return' => $return_empty
                );
                $this->delivery_model->insert_delivery($insert_data);
            }

            switch ($action_for) {
                case 'present':
                    echo $present;
                    break;
                case 'absent':
                    echo $absent;
                    break;
                case 'repeat':
                    echo $repeat;
                    break;
                case 'return_empty':
                    echo $return_empty;
                    break;
            }
        }
    }

    public function increase_count_delivery() {
        $id_customer = $this->input->post('id_customer');
        $action_for = $this->input->post('action_for');

        if (!empty($id_customer) && !empty($action_for)) {
            $date = date("Y-m-d");

            $current_date_data = $this->delivery_model->get_current_date_data($id_customer, $date);

            if (!empty($current_date_data)) {
                $present = $current_date_data->bottel_present;
                $absent = $current_date_data->bottel_absent;
                $repeat = $current_date_data->bottel_repeat;
                $return_empty = $current_date_data->bottel_empty_return;
            } else {
                $present = 0;
                $absent = 0;
                $repeat = 0;
                $return_empty = 0;
            }

            switch ($action_for) {
                case 'present':
                    $present++;
                    break;
                case 'absent':
                    $absent++;
                    break;
                case 'repeat':
                    $repeat++;
                    break;
                case 'return_empty':
                    $return_empty++;
                    break;
            }

            if (!empty($current_date_data)) {
                $where_conditions = array('date' => $date, 'id_customer' => $id_customer);
                $update_data = array(
                    'bottel_present' => $present,
                    'bottel_absent' => $absent,
                    'bottel_repeat' => $repeat,
                    'bottel_empty_return' => $return_empty
                );
                $this->delivery_model->update_delivery($where_conditions, $update_data);
            } else {
                $insert_data = array(
                    'id_customer' => $id_customer,
                    'date' => $date,
                    'bottel_present' => $present,
                    'bottel_absent' => $absent,
                    'bottel_repeat' => $repeat,
                    'bottel_empty_return' => $return_empty
                );
                $this->delivery_model->insert_delivery($insert_data);
            }

            switch ($action_for) {
                case 'present':
                    echo $present;
                    break;
                case 'absent':
                    echo $absent;
                    break;
                case 'repeat':
                    echo $repeat;
                    break;
                case 'return_empty':
                    echo $return_empty;
                    break;
            }
        }
    }

}

?>