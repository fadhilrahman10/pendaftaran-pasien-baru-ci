<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('MyModel', 'mod');
        $this->load->library('form_validation');
        $this->load->library('session');

        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        # code...

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index.php');
        } else {
            $admin = $this->mod->get('admin', ['email' => $this->input->post('email')], true);
            if ($admin != null) {
                if ($admin['password'] != $this->input->post('password')) {
                    $this->session->set_flashdata('gagal', 'Login Gagal Username atau Password salah');
                    redirect('auth');
                } else {
                    $this->session->set_userdata('user', $admin);
                    redirect('pasien');
                }
            } else {
                $this->session->set_flashdata('gagal', 'Login Gagal Username atau Password salah');
                redirect('auth');
            }
        }

    }

    public function keluar()
    {
        # code...
        session_destroy();
        redirect('auth');
    }

}
