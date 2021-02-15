<?php

class Karyawan_model extends CI_Model {
    public function __construct()
    {   // load database
        $this->load->database();
    }

    public function getDataKaryawan()
    {
        /**
         * first create a variable to hold the data user from session
         * then create a query to retrieve data from the database
         * return and execute query form $query
        **/
        $id = $this->session->userdata('id');
        $query = "SELECT * FROM tb_user u, tb_personal_bio p, tb_education e, tb_training_experience t, tb_work_experience w WHERE '$id'=p.id_regist AND '$id'=e.id_regist AND '$id'=t.id_regist AND '$id'=w.id_regist GROUP BY '$id'";
        return $this->db->query($query)->result_array();
    }

    public function getJob()
    {
        return $this->db->get('tb_job')->result_array();
    }

    public function createBio()
    {
        /**
         * first create a variable to hold the data user from session
         * then create a query to retrieve data from the database
         * then create variable $check for hold number of rows
         * then if > 0 then the data is already in the database
         * and returns false, but if < 0 then the data does not
         *  exist and enter the data into the database table
        **/

        $id = $this->session->userdata('id');
        // var_dump($id);
        $query = "SELECT DISTINCT u.id, p.id_regist, e.id_regist, w.id_regist, t.id_regist FROM tb_user u, tb_personal_bio p, tb_education e, tb_work_experience w, tb_training_experience t WHERE u.id='$id' AND p.id_regist='$id' AND e.id_regist='$id' AND w.id_regist='$id' AND t.id_regist='$id' GROUP BY u.id='$id'";
        $check = $this->db->query($query)->num_rows();

        if($check > 0) {
            return false;
        } else {
            $dataPerson = array(
                "fullName" => $this->input->post('fullName', TRUE),
                "selfDesc" => $this->input->post('selfDesc', TRUE),
                "gender" => $this->input->post('gender', TRUE),
                "dateOfBirth" => $this->input->post('date', TRUE),
                "email" => $this->input->post('email', TRUE),
                "phone" => $this->input->post('phone', TRUE),
                "skills" => $this->input->post('skills', TRUE),
                // "personalFoto" => $this->input->post('foto', TRUE),
                "id_regist" => $this->session->userdata('id'), 
                "timeAdd" => date('Y-m-d'),
                "appOptions" => $this->input->post('job', TRUE)
            );

            $dataEdu = array(
                "nameUniv" => $this->input->post('nUniversity', TRUE),
                "degree" => $this->input->post('bDegree', TRUE),
                "yearEdu" => $this->input->post('yEdu', TRUE),
                "highSchool" => $this->input->post('hSchool', TRUE),
                "yearsEduHigh" => $this->input->post('yEduSMA', TRUE),
                "id_regist" => $this->session->userdata('id'), 
                "timeAdd" => date('Y-m-d')
            );

            $dataCompany = array(
                "companyName" => $this->input->post('cName', TRUE),
                "position" => $this->input->post('position', TRUE),
                "yearsWork" => $this->input->post('yWork', TRUE),
                "descWork" => $this->input->post('dWork', TRUE),
                "companyName2" => $this->input->post('cName2', TRUE),
                "position2" => $this->input->post('position2', TRUE),
                "yearsWork2" => $this->input->post('yWork2', TRUE),
                "descWork2" => $this->input->post('dWork2', TRUE),
                "id_regist" => $this->session->userdata('id'), 
                "timeAdd" => date('Y-m-d')
            );

            $dataTrainig = array(
                "agencyName" => $this->input->post('aName', TRUE),
                "yearsTraining" => $this->input->post('yTraining', TRUE),
                "descTraining" => $this->input->post('descTraining', TRUE),
                "certificate" => $this->input->post('sertif', TRUE),
                "agencyName2" => $this->input->post('an2', TRUE),
                "yearsTraining2" => $this->input->post('yt2', TRUE),
                "descTraining2" => $this->input->post('dt2', TRUE),
                "certificate2" => $this->input->post('sertif2', TRUE),
                "id_regist" => $this->session->userdata('id'), 
                "timeAdd" => date('Y-m-d')
            );
            
            $this->db->insert('tb_personal_bio', $dataPerson);
            $this->db->insert('tb_education', $dataEdu);
            $this->db->insert('tb_training_experience', $dataTrainig);
            $this->db->insert('tb_work_experience', $dataCompany);
            
            return true;
        }
    }

    public function addImage($name)
    {
        $id = $this->session->userdata('id');
        $this->db->set('personalFoto', $name);
        $this->db->where('id_regist', $id);
        $this->db->update('tb_personal_bio');
    }

    public function addSertif1($name)
    {
        $id = $this->session->userdata('id');
        $this->db->set('certificate', $name);
        $this->db->where('id_regist', $id);
        $this->db->update('tb_training_experience');
    }

    public function addSertif2($name)
    {
        $id = $this->session->userdata('id');
        $this->db->set('certificate2', $name);
        $this->db->where('id_regist', $id);
        $this->db->update('tb_training_experience');
    }
}