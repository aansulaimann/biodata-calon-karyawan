<?php

class Login_model extends CI_Model {
    public function __construct()
    {
        // load database
        $this->load->database();
    }

    public function actLogin()
    {
        /**
         * first create a variable to hold the data from form
         * then check email from input and check in database
         * if email exist then fetch data from $check then
         * verify the password from the input with a 
         * hashed password in database if exist
         * return data from row in tb_user
         * if doesn't exist return false
        **/
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $check = $this->db->query("SELECT password, email FROM tb_user WHERE email = '$email'");

        if($check->num_rows() > 0) {
            $pwdHash = $check->result_array();
            
            if(password_verify($password, $pwdHash[0]['password'])) {
                return $query = $this->db->get_where('tb_user', array('email' => $email, "password" => $pwdHash[0]['password']));
            } else {
                return 0;
            }
        }

        return 0;
    }

    public function signUp()
    {
        /**
         * first create a variable to hold the data from form
         * then check whether the password is the same or not
         * if not match return false, if match hash password
         * then enter the data into the database
         * then return true
        **/
        $password = $this->input->post('password', TRUE);
        $confirmPassword = $this->input->post('confirmPassword', TRUE);

        if($password != $confirmPassword) {
            echo "
                <script>alert('password tidak sama');</script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            "username" => $this->input->post('username', TRUE),
            "email" => $this->input->post('email', TRUE),
            "password" => $password,
            "role" => 'user',
            "time" => date('Y-m-d')
        );

        $this->db->insert('tb_user', $data);
        return true;
    }
}