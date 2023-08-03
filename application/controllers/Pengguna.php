<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengguna', 'pengguna_m');

        $this->load->model('auth_model');

        if (!$this->auth_model->current_user()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['daftar_petugas'] = $this->pengguna_m->daftar_pengguna();
        $data['konten'] = "pengguna/v_pengguna";
        $data['judul'] = "Daftar pengguna";
        $this->load->view('template/template', $data);
    }

    public function Simpan()
    {
        $username       = $this->input->post('username');
        $name           = $this->input->post('name');
        $pass           = $this->input->post('password');
        $email          = $this->input->post('email');

        $data = array(
            'username'      => $username,
            'name'          => $name,
            'password'      => $pass,
            'email'         => $email
        );

        $simpan         = $this->db->insert('user', $data);
        if ($simpan) {
            $this->session->set_Flashdata('flash', 'Tersimpan');
            redirect('pengguna');
        } else {
            $this->session->set_Flashdata('FlashGagal', 'Gagal Tersimpan');
            redirect('pengguna');
        };
    }

    public function Simpan_edit()
    {
        $username       = $this->input->post('username');
        $name           = $this->input->post('name');
        $pass           = $this->input->post('password');
        $email          = $this->input->post('email');

        // array menampung data yang akan disimpan
        $data = array(
            'username'      => $username,
            'name'          => $name,
            'password'      => $pass,
            'email'         => $email

        );
        $this->db->where('username', $username);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->session->set_flashdata('flashUpdate', 'Terupdate');
            redirect('pengguna');
        } else {
            $this->session->set_flasdata('Gagal', 'Gagal Terupdate');
            redirect('pengguna');
        };
    }

    public function Hapus($username)
    {
        $hapus = $this->db->delete('user', array('username' => $username));

        if ($hapus) {
            $this->session->set_flashdata('flashHapus', 'Terhapus');
            redirect('pengguna');
        } else {
            $this->session->set_flashdata('flash', 'Gagal Terhapus');
            redirect('pengguna');
        };
    }
}
