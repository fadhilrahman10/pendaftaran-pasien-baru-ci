<?php

class Pasien extends CI_Controller
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
        $data['judul'] = 'Pasien';

        $this->form_validation->set_rules('bulan', 'Bulan', 'required');

        if ($this->form_validation->run() == false) {
            $data['pasien'] = $this->mod->get('pasien');
        } else {
            $bulan = explode('-', $this->input->post('bulan'));
            $data['pasien'] = $this->mod->get('pasien', ['MONTH(tanggal_dibuat)' => $bulan[1]]);
        }

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('pasien/index.php', $data);
        $this->load->view('templates/footer.php', $data);

    }

    public function tambahPasien()
    {
        # code...
        $data['judul'] = 'Tambah Pasien Baru';
        $data['nrm'] = $this->mod->nomorRekamMedis();

        $this->form_validation->set_rules('nrm', 'Nomor Rekam Medis', 'required|is_unique[pasien.nrm]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('profesi', 'Profesi', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|min_length[10]|max_length[14]|is_natural');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('pasien/tambah.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $val = [
                'nrm' => $this->input->post('nrm', true),
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'profesi' => $this->input->post('profesi', true),
                'no_hp' => $this->input->post('no_hp', true),
                'alamat' => $this->input->post('alamat', true),
                'agama' => $this->input->post('agama', true),
                'tanggal_dibuat' => date('Y-m-d H:i:s'),
            ];

            if ($this->mod->add('pasien', $val)) {
                $this->session->set_flashdata('success', 'Data berhasil di tambahkan');
                redirect('pasien');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di tambahkan');
                redirect('pasien');
            }
        }

    }

    public function editPasien($nrm)
    {
        # code...
        $data['judul'] = 'Edit Pasien';
        $data['pasien'] = $this->mod->get('pasien', ['nrm' => $nrm], true);

        $this->form_validation->set_rules('nrm', 'Nomor Rekam Medis', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('profesi', 'Profesi', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|min_length[10]|max_length[14]|is_natural');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('pasien/edit.php', $data);
            $this->load->view('templates/footer.php', $data);
        } else {
            $val = [
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'profesi' => $this->input->post('profesi', true),
                'no_hp' => $this->input->post('no_hp', true),
                'alamat' => $this->input->post('alamat', true),
                'agama' => $this->input->post('agama', true),
                'tanggal_dibuat' => date('Y-m-d H:i:s'),
            ];

            if ($this->mod->edit('pasien', $val, ['nrm' => $nrm])) {
                $this->session->set_flashdata('success', 'Data berhasil di ubah');
                redirect('pasien');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di ubah');
                redirect('pasien');
            }
        }

    }

    public function hapusPasien($nrm)
    {
        # code...
        if ($nrm) {
            if ($this->mod->trash('pasien', ['nrm' => $nrm])) {
                $this->session->set_flashdata('success', 'Data berhasil di hapus');
                redirect('pasien');
            } else {
                $this->session->set_flashdata('gagal', 'Data gagal di hapus');
                redirect('pasien');
            }
        } else {
            redirect('pasien');
        }
    }

    public function printPasien($id)
    {
        # code...
        $data['pasien'] = $this->mod->get('pasien', ['nrm' => $id], true);
        $this->load->view('pasien/print.php', $data);
    }

}
