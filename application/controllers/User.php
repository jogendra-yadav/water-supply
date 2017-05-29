<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $data['users'] = $this->user_model->get_all_user_list();
        $this->load->view('user', $data);
    }

    public function add_user() {
        $this->load->view('add_user');
    }

    public function save_user() {
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_unique[user.mobile]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('user_type', 'User type', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('add_error', validation_errors());
            redirect('add_user.html');
        } else {
            $insert_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'is_admin' => $this->input->post('user_type'),
                'password' => md5($this->input->post('password')),
                'address' => $this->input->post('address'),
            );
            $this->user_model->save_user($insert_data);
            redirect('user.html');
        }
    }

}
