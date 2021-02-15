<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'user') {
            redirect(base_url() . "login");
        } else if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'admin') {
            redirect(base_url() . "login");
        }

        if($this->session->userdata('status') == 'Login' && $this->session->userdata('role') == 'user') {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['title'] = "Admin Page";
        $data['completeBio'] = $this->Admin_model->getAllData();
        $data['registUser'] = $this->Admin_model->getRegistUser();
        $data['allRegistUser'] = $this->Admin_model->getAllRegistUser();
        $data['getAllCompleteData'] = $this->Admin_model->getAllCompleteData();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function details($id)
    {
        $data['details'] = $this->Admin_model->getDetails($id);
        $data['title'] = "Detail Complete User Page";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/details', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->Admin_model->getDetailRegist($id);
        $data['title'] = "Detail Register User";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('admin/footer');
    }

    public function complete()
    {
        $data['title'] = "Complete Biodata";
        $data['completeBio'] = $this->Admin_model->getAllData();
        $data['getAllCompleteData'] = $this->Admin_model->getAllCompleteData();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/complete', $data);
        $this->load->view('templates/footer');
    }

    public function regist()
    {
        $data['title'] = "User Register Page";
        $data['allRegistUser'] = $this->Admin_model->getAllRegistUser();
        $data['registUser'] = $this->Admin_model->getRegistUser();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/regUser', $data);
        $this->load->view('templates/footer');
    }

    public function job()
    {
        $data['title'] = "Entry job vacancy";

        $this->form_validation->set_rules('job', 'JOB', 'required');
        $this->form_validation->set_rules('qualification', 'qualification', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/job');
            $this->load->view('admin/footer');
        } else {
            if($this->Admin_model->addJob() > 0) {
                $this->session->set_flashdata('success', 'Success');
                redirect(base_url() . "admin/job");
            }
        }

    }

    public function passes()
    {
        $data['title'] = "Entry Prospective employee passes";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/pass');
        $this->load->view('admin/footer');
    }

    public function delete($id)
    {
        if($this->Admin_model->deleteRegistUser($id) > 0) {
            $this->session->set_flashdata('flash', 'Delete');
            redirect(base_url() . "admin/regist");
        }
    }

    public function deleteCompleteData($id)
    {
        if($this->Admin_model->deleteCompleteUser($id) > 0) {
            $this->session->set_flashdata('flash', 'Delete');
            redirect(base_url() . "admin/complete");

        } else {
            echo '<div class="alert alert-danger mb-0" role="alert">
                        Failed Delete Data Complete User!
                </div>';
        }
    }

    public function report()
    {
        $data['title'] = "Report Page";

        $this->form_validation->set_rules('from', 'FOR', 'required');
        $this->form_validation->set_rules('to', 'to', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/report');
            $this->load->view('admin/footer');
        } else {
            if($this->Admin_model->report()->num_rows() > 0) {
                $data['report'] = $this->Admin_model->report()->result_array();
                
                $this->load->view('admin/header', $data);
                $this->load->view('admin/report', $data);
                $this->load->view('admin/footer');
            } else {
                $data['report'] = [];
                $this->load->view('admin/header', $data);
                $this->load->view('admin/report', $data);
                $this->load->view('admin/footer');

                echo '<div class="alert alert-warning mb-0" role="alert">
                        Data not found!
                    </div>';
            }
        }

    }

    public function reportComplete()
    {
        $data['title'] = "Report Complete User Page";
        $this->form_validation->set_rules('fromComplete', 'FROM', 'required');
        $this->form_validation->set_rules('toComplete', 'FROM', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/reportComplete');
            $this->load->view('admin/footer');
        } else {
            if($this->Admin_model->reportCompleteBio()->num_rows() > 0) {
                $data['report'] = $this->Admin_model->reportCompleteBio()->result_array();

                $this->load->view('admin/header', $data);
                $this->load->view('admin/reportComplete', $data);
                $this->load->view('admin/footer');
            } else {
                $data['report'] = [];
                $this->load->view('admin/header', $data);
                $this->load->view('admin/reportComplete', $data);
                $this->load->view('admin/footer');

                echo '<div class="alert alert-warning mb-0" role="alert">
                        Data not found!
                    </div>';
            }
        }
    }

    public function logout()
    {
        $this->session->userdata('status') == "";
        $this->session->sess_destroy();
        redirect("login/index");
    }
}