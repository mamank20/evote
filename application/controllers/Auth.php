<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Login E-Vote';
    $this->load->view('auth/login_header', $data);
    $this->load->view('auth/login');
    $this->load->view('auth/login_footer');
  }

  public function _login()
  {
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('#');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! Your have been Logged out </div>');
    redirect('login');
  }
}
