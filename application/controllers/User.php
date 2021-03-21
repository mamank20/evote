<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = array('title' => "E-Vote");
        $this->load->view('user/header', $data);
        $this->load->view('user/index');
        $this->load->view('user/footer');
    }

    public function visimisi()
    {
    }

    public function count()
    {
        $data = array('title' => "E-Vote");
        $this->load->view('user/header', $data);
        $this->load->view('user/count_new');
        $this->load->view('user/footer');
    }
}
