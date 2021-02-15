<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'user') {
            redirect(base_url() . "login");
        } else if($this->session->userdata('status') != "Login" && $this->session->userdata('role') != 'admin') {
            redirect(base_url() . "login");
        }

        if($this->session->userdata('status') == 'Login' && $this->session->userdata('role') == 'admin') {
            redirect(base_url() . "admin");
        }
    }

    public function index() 
    {
        $data['title'] = "Add new Biodata";
        $data['job'] = $this->Karyawan_model->getJob();
        // if(isset($_POST['sPersonal'])) {
        //     var_dump($_POST);  "<br>";
        //     var_dump($_FILES); die;
        // }

        $this->form_validation->set_rules('fullName', 'FullName', 'required');
        $this->form_validation->set_rules('selfDesc', 'selfDesc', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('skills', 'Skills', 'required');
        // $this->form_validation->set_rules('foto', 'Foto', 'required');
        $this->form_validation->set_rules('nUniversity', 'nUnivesity', 'required');
        $this->form_validation->set_rules('bDegree', 'bDegree', 'required');
        $this->form_validation->set_rules('yEdu', 'yEdu', 'required');
        $this->form_validation->set_rules('hSchool', 'hSchool', 'required');
        $this->form_validation->set_rules('yEduSMA', 'yEduSMA', 'required');
        $this->form_validation->set_rules('cName', 'cName', 'required');
        $this->form_validation->set_rules('position', 'position', 'required');
        $this->form_validation->set_rules('yWork', 'yWork', 'required');
        $this->form_validation->set_rules('dWork', 'dWork', 'required');
        $this->form_validation->set_rules('yTraining', 'yTraining', 'required');
        $this->form_validation->set_rules('descTraining', 'descTraining', 'required');
        // $this->form_validation->set_rules('sertif', 'sertif', 'required');
        $this->form_validation->set_rules('job', 'job', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('karyawan/index', $data);
            $this->load->view('templates/footer');
        } else {
            if($this->Karyawan_model->createBio()) {
                $this->session->set_flashdata('flash', 'Success');
                redirect('karyawan/account');
            } else {
                $this->session->set_flashdata('flash', 'Data');
                redirect('karyawan/index');
            }
        }
    }

    public function do_upload()
    {
        $new_name = time() ."_". $_FILES['foto']['name'];
        $config['upload_path']          = './assets/img/uploads/profile/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3072;
        $config['file_name']            = $new_name;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('foto')) {
            echo 'ggl';
        }
        else {
            if($data = array('upload_data' => $this->upload->data())) {
                $this->Karyawan_model->addImage($new_name);
                $this->session->set_flashdata('flash', 'Success');
                redirect(base_url() . "karyawan/account");
            }
        }
    }

    public function upload_sertif()
    {
        $new_name = time() ."_". $_FILES['sertif1']['name'];
        $config['upload_path']          = './assets/img/uploads/sertif1/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3072;
        $config['file_name']            = $new_name;

        if(explode(' ', $new_name)) {
            $new_name = implode('_', explode(' ', $new_name));
        }

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('sertif1')) {
            $this->session->set_flashdata('failed', 'Failed');
            redirect(base_url() . "karyawan/account");
        }
        else {
            if($data = array('upload_data' => $this->upload->data())) {
                $this->Karyawan_model->addSertif1($new_name);
                $this->session->set_flashdata('flash', 'Success');
                redirect(base_url() . "karyawan/account");
            }
        }
    }

    public function upload_sertif2()
    {
        $new_name = time() ."_". $_FILES['sertif2']['name'];
        $config['upload_path']          = './assets/img/uploads/sertif2/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3072;
        $config['file_name']            = $new_name;

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('sertif2')) {
            $this->session->set_flashdata('failed', 'Failed');
            redirect(base_url() . "karyawan/account");
        }
        else {
            if($data = array('upload_data' => $this->upload->data())) {
                $this->Karyawan_model->addSertif2($new_name);
                $this->session->set_flashdata('flash', 'Success');
                redirect(base_url() . "karyawan/account");
            }
        }
    }

    public function account()
    {
        $data['title'] = "My Account";
        $data['data'] = '';
        
        if(empty($this->Karyawan_model->getDataKaryawan())) {
            // echo 'kosong'; die;
            $this->load->view('templates/header', $data);
            $this->load->view('karyawan/empty');
            $this->load->view('templates/footer');
        } else {
            $data['data'] = $this->Karyawan_model->getDataKaryawan();
            $this->load->view('templates/header', $data);
            $this->load->view('karyawan/account', $data);
            $this->load->view('templates/footer');
        }
    }
}