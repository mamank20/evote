<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = array('title' => "Admin Dashboard");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function count_new()
    {
        $data = array('title' => "Live Count");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/count_new');
        $this->load->view('admin/footer');
    }

    public function users()
    {
        $data = array('title' => "Data User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/users');
        $this->load->view('admin/footer');
    }

    public function kandidat()
    {
        $data = array('title' => "Data Kandidat");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/kandidat');
        $this->load->view('admin/footer');
    }

    public function log_pesan()
    {
        $data = array('title' => "Data Log Pesan");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/log_pesan');
        $this->load->view('admin/footer');
    }

    public function tambah_user()
    {
        $data = array('title' => "Tambah Data User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_user');
        $this->load->view('admin/footer');
    }

    public function edit_user()
    {
        $data = array('title' => "Edit Data User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_users');
        $this->load->view('admin/footer');
    }

    public function hapus_users()
    {
        $data = array('title' => "Hapus Data User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/hapus_users');
        $this->load->view('admin/footer');
    }

    public function export_user()
    {
        $data = array('title' => "Export Data User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/export_user');
        $this->load->view('admin/footer');
    }

    public function reset_status()
    {
        $data = array('title' => "Reset Status User");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/reset_status');
        $this->load->view('admin/footer');
    }

    public function tambah_kandidat()
    {
        $data = array('title' => "Tambah Data Kandidat");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_kandidat');
        $this->load->view('admin/footer');
    }

    public function hapus_kandidat()
    {
        $data = array('title' => "Hapus Data Kandidat");
        $this->load->view('admin/header', $data);
        $this->load->view('admin/hapus_kandidat');
        $this->load->view('admin/footer');
    }
}
