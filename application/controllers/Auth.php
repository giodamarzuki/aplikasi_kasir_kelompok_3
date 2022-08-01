<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login');
    }
    public function index()
    {
        $this->load->view('template/login');
    }
}