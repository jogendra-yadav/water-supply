<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('customer_model');
    }

    public function index() {
        $data['customer_list'] = $this->customer_model->customer_list();
        $this->load->view('customer', $data);
    }

    public function add_customer() {
        $this->load->view('add_customer');
    }

    public function load_edit_customer_view($id_customer) {
        $data['customer'] = $this->customer_model->get_customer_by_id($id_customer);
        $this->load->view('edit_customer', $data);
    }

    public function delete_customer($id_customer) {
        $delete_response = $this->customer_model->delete_customer($id_customer);
        echo $delete_response;
    }

    public function update_customer_details($id_customer) {
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('edit_error', validation_errors());
            redirect('edit_customer_' . $id_customer . '.html');
        } else {
            $update_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address'),
            );
            $update_customer_response = $this->customer_model->update_customer_response($update_data, $id_customer);
            redirect('edit_customer_' . $id_customer . '.html');
        }
    }

    public function save_customer() {
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('add_error', validation_errors());
            redirect('add_customer.html');
        } else {
            $insert_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address'),
            );
            $this->customer_model->save_customer($insert_data);
            redirect('customer.html');
        }
    }

}
