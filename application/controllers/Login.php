<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        if (isset($_SESSION['logged_in'])) {

            $redirect_url = ($_SESSION['is_admin']) ? "home.html" : "delivery.html";

            redirect($redirect_url);
        } else {
            $this->load->view('login');
        }
    }

    public function process_login_action() {
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_check_response = $this->login_model->resolve_user_login($username, $password);

            if ($user_check_response) {
                // set session user datas
                $_SESSION['id_user'] = $user_check_response->id_user;
                $_SESSION['name'] = $user_check_response->first_name . " " . $user_check_response->last_name;
                $_SESSION['logged_in'] = true;
                $_SESSION['is_admin'] = $user_check_response->is_admin;

                $redirect_url = ($user_check_response->is_admin) ? "home.html" : "delivery.html";

                redirect($redirect_url);
            } else {
                $this->session->set_flashdata('login_error', 'Username or password invalid');
                $this->index();
            }
        }
    }

    public function logout() {
        unset(
                $_SESSION['id_user'], $_SESSION['name'], $_SESSION['logged_in'], $_SESSION['is_admin']
        );
        redirect('/');
    }

}
