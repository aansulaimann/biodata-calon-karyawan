<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'user') {
            redirect(base_url() . "login");
        } else if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'admin') {
            redirect(base_url() . "login");
        }
        
        if($this->session->userdata('status') == 'Login' && $this->session->userdata('role') == 'admin') {
            redirect(base_url() . "admin");
        }
        // var_dump($this->session->userdata('status'), $this->session->userdata('role'), $this->session->userdata('id'));
    }

    public function index()
    {
        $data['title'] = 'home page';
        // $data['logout'] = $this->logout();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function logout() 
    {
        $this->session->userdata('status') == "";
        $this->session->sess_destroy();
        redirect("login/index");
    }
}