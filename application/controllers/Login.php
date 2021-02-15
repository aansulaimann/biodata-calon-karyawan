<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        $this->load->model('Login_model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') == 'Login') {
            redirect(base_url());
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Pass', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('login/index');
        } else {
            $check = $this->Login_model->actLogin();
            if($check > 0) {
                $data = $this->Login_model->actLogin()->result_array();
                $dataSession = array(
                    'status' => 'Login',
                    'role' => $data[0]['role'],
                    'id' => $data[0]['id']
                );

                $this->session->set_userdata($dataSession);

                if($this->session->userdata('status') == 'Login' && $this->session->userdata('role') == 'user' && $this->session->userdata('role') != 'admin') {
                    redirect(base_url());
                }
                
                if($this->session->userdata('status') == 'Login' && $this->session->userdata('role') == 'admin' && $this->session->userdata('role') != 'user') {
                    redirect(base_url() . "admin");
                }
            } else {
                $this->load->view('login/index');
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Invalid!</strong> You should check your email and password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
    }

    public function signUp()
    {
        // var_dump($_POST); die;
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'ConfirmPassword', 'required');

        if($this->form_validation->run() == FALSE) {
            // $this->load->view('login/index');
            $this->session->set_flashdata('failed', 'Failed Sign up!');
            redirect(base_url() . "login/index");
        } else {
            if($this->Login_model->signUp()) {
                $this->session->set_flashdata('success', 'Success Sign up!');
                redirect(base_url() . "login/index");
            } else {
                $this->session->set_flashdata('failed', 'Failed Sign up!');
                redirect(base_url() . "login/index");
            }
        }
    }
}