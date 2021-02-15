<?php

class Admin_model extends CI_Model {
    public function __construct()
    {
        // load database
        $this->load->database();
    }

    public function getAllCompleteData()
    {
        /**
         * get data from database table and return the data as an associative array
        **/
        return $this->db->query('SELECT DISTINCT p.id_person, p.id_regist, p.fullName, p.email, p.phone, w.id_work, w.companyName, w.position, t.id_training, t.agencyName, t.descTraining FROM tb_personal_bio p, tb_training_experience t, tb_work_experience w WHERE p.id_person=t.id_training AND p.id_person=w.id_work')->result_array();
    }

    public function getAllData()
    {
        /**
         * get data from database table and return the data as an associative array
        **/
        return $this->db->query('SELECT COUNT(p.email) as count FROM tb_user u, tb_personal_bio p WHERE u.email=p.email')->result_array();
    }

    public function getRegistUser()
    {
        /**
         * get count data from table user (tb_user)
        **/
        return $this->db->query("SELECT COUNT(email) as registUser FROM tb_user WHERE role = 'user'")->result_array();
    }

    public function getAllRegistUser()
    {
        /**
         * get data from database table and return the data as an associative array where role = 'user'
        **/
        return $this->db->query("SELECT id, username, email, time FROM tb_user WHERE role = 'user'")->result_array();
    }

    public function getDetails($id)
    {
        /**
         * retrieve detailed data complete biodata user according to the selected ID 
         * and returns the associative array
        **/
        $query = "SELECT * FROM tb_personal_bio p, tb_education e, tb_training_experience t, tb_work_experience w WHERE '$id'=p.id_person AND '$id'=e.id_edu AND '$id'=t.id_training AND '$id'=w.id_work GROUP BY '$id'";
        return $this->db->query($query)->result_array();
    }

    public function getDetailRegist($id)
    {
        /**
         * retrieve detailed data Register user according to the selected ID 
         * and returns the associative array
        **/
        return $this->db->query("SELECT id, username, email, time FROM tb_user WHERE role = 'user' AND id = '$id'")->result_array();
    }

    public function addJob()
    {
        $data = array(
            "job" => $this->input->post('job', TRUE),
            "qualification" => $this->input->post('qualification', TRUE)
        );

        $this->db->insert('tb_job', $data);
        return $this->db->affected_rows();
    }

    public function deleteRegistUser($id)
    {   
        /**
         * set the $where variable to tell which row to delete
         * and delete data in table (tb_user)
         * and returns the number of rows affected
        **/
        $where = $this->db->where('id', $id);
        $this->db->delete('tb_user');
        return $this->db->affected_rows();
    }

    public function deleteCompleteUser($id)
    {
        /**
         * set up the $tabel variable to hold the multiple table
         * and delete data in table
         * and returns the number of rows affected
        **/
        $tables = array('tb_personal_bio', 'tb_education', 'tb_work_experience', 'tb_training_experience');
        $this->db->where('id_regist', $id);
        $this->db->delete($tables);
        return $this->db->affected_rows();
    }

    public function report()
    {
        /**
         * create variables $from and $to to accommodate incoming input
         * set up query variables to store sql queries
         * and returns the query result data
        **/
        $from = $this->input->post('from', TRUE);
        $to = $this->input->post('to', TRUE);

        $query = "SELECT id, username, email, role, time FROM tb_user WHERE time BETWEEN '$from' AND '$to' AND role = 'user'";
        return $this->db->query($query);
    }

    public function reportCompleteBio()
    {
        /**
         * create variables $from and $to to accommodate incoming input
         * set up query variables to store sql queries
         * and returns the query result data
        **/
        $from = $this->input->post('fromComplete', TRUE);
        $to = $this->input->post('toComplete', TRUE);

        $query = "SELECT DISTINCT p.id_person, p.fullName, p.email, p.phone, w.id_work, w.companyName, w.position, t.id_training, t.agencyName, t.descTraining FROM tb_personal_bio p, tb_training_experience t, tb_work_experience w WHERE p.id_person=t.id_training AND p.id_person=w.id_work AND p.timeAdd BETWEEN '$from' AND '$to'";

        return $this->db->query($query);
    }
}