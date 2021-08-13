<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->model('MyModel', 'mod');
        $this->load->library('form_validation');
        $this->load->library('session');

        date_default_timezone_set('Asia/Jakarta');

        if (!$this->session->userdata('user')) {
            redirect('auth');
        }

    }

    public function index()
    {
        # code...
        $data['judul'] = 'Admin';
        $data['admin'] = $this->mod->get('admin');

        $data['userAktif'] = $this->session->userdata('user');

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('admin/index.php', $data);
        $this->load->view('templates/footer.php', $data);
    }

    public function tambahAdmin()
    {
        # code...
        $data['judul'] = 'Tambah Admin Baru';

        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpw', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('admin/tambah.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $val = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password', true),
                'status' => 'admin',
            ];

            if ($this->mod->add('admin', $val)) {
                $this->session->set_flashdata('success', 'Data berhasil di tambahkan');
                redirect('admin');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di tambahkan');
                redirect('admin');
            }
        }

    }

    public function editAdmin($id)
    {
        # code...
        $data['judul'] = 'Tambah Admin Baru';
        $data['admin'] = $this->mod->get('admin', ['no_admin' => $id], true);

        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('admin/edit.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $val = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password', true),
            ];

            if ($this->mod->edit('admin', $val, ['no_admin' => $id])) {
                $this->session->set_flashdata('success', 'Data berhasil di ubah');
                redirect('admin');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di ubah');
                redirect('admin');
            }
        }

    }

    public function hapusAdmin($id)
    {
        # code...
        if ($id) {
            if ($this->mod->trash('admin', ['no_admin' => $id])) {
                $this->session->set_flashdata('success', 'Data berhasil di hapus');
                redirect('admin');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di hapus');
                redirect('admin');
            }
        } else {
            redirect('admin');
        }
    }

}
