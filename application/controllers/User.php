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

}
