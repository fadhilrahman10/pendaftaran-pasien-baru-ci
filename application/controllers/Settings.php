<?php

class Settings extends CI_Controller
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
        $data['judul'] = 'Settings';

        $user = $this->session->userdata('user');

        $data['admin'] = $this->mod->get('admin', ['no_admin' => $user['no_admin']], true);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('settings/index.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $passwordBaru = $this->input->post('password_baru');
            $val = [
                'nama' => $this->input->post('nama', true),
            ];
            if ($passwordBaru == '') {
                if ($this->mod->edit('admin', $val, ['no_admin' => $user['no_admin']])) {
                    $this->session->set_flashdata('success', 'Data berhasil di ubah');
                    redirect('settings');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal di ubah');
                    redirect('settings');
                }
            } else {
                $val = [
                    'nama' => $this->input->post('nama', true),
                    'password' => $this->input->post('password_baru', true),
                ];
                if ($this->mod->edit('admin', $val, ['no_admin' => $user['no_admin']])) {
                    $this->session->set_flashdata('success', 'Data berhasil di ubah');
                    redirect('settings');
                } else {
                    $this->session->set_flashdata('gagal', 'Data gagal di ubah');
                    redirect('settings');
                }
            }
        }

    }
}
