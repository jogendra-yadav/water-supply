<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!isset($_SESSION['logged_in'])) {
            redirect('/');
        } else {
            if ($_SESSION['is_admin'] == 0 && $this->router->fetch_class() != 'delivery') {
                redirect('delivery.html');
            }
        }
    }

}
