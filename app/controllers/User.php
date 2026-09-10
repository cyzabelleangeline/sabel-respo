<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('User_model');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->call->view('user_list', $data);
    }
}