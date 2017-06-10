<?php

class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function register($enc_password)
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'zipcode' => $this->input->post('zipcode')
        );

        return $this->db->insert('users', $data);
    }

    public function check_username_exists($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));
        return empty($query->row_array());
    }

    public function check_email_exists($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        return empty($query->row_array());
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        return $query->row(0)->id;
    }
}