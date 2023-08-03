<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataassets extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataassets', 'dataassets_m');

        $this->load->model('auth_model');

        if (!$this->auth_model->current_user()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        //get kategori
        $data['kategori'] = $this->db->query('SELECT * FROM tkategori')->result();
        $data['daftar_assets']  = $this->dataassets_m->daftar_assets();
        $data['konten']         = "aset/v_dataassets";
        $data['judul']          = "Daftar Assets";
        $this->load->view('template/template', $data);
    }

    public function Simpan()
    {

        //upload img
        $upload = $this->do_upload();
        if ($upload['error']) {
            $this->session->set_flashdata('flashGagal', 'Gagal' . $upload['error']);
            redirect('dataassets');
        }

        $photo            = $this->input->post('photo');
        $kode_barang      = $this->input->post('kode_barang');
        $nama_barang      = $this->input->post('nama_barang');
        $kategori         = $this->input->post('kategori');
        $kwalitas         = $this->input->post('kwalitas');
        $pengadaan        = $this->input->post('pengadaan');
        $letak            = $this->input->post('letak');
        $qty              = $this->input->post('qty');


        // array menampung data yang akan disimpan
        $data = array(
            'photo'             => $upload['file_name'],
            'kode_barang'       => $kode_barang,
            'nama_barang'       => $nama_barang,
            'kategori'          => $kategori,
            'kwalitas'          => $kwalitas,
            'pengadaan'         => $pengadaan,
            'letak'             => $letak,
            'qty'               => $qty
        );

        $simpan         = $this->db->insert('assets', $data);
        if ($simpan) {
            $this->session->set_Flashdata('flash', 'Tersimpan');
            redirect('dataassets');
        } else {
            $this->session->set_Flashdata('flashGagal', 'Gagal Tersimpan');
            redirect('dataassets');
        };
    }

    public function Simpan_edit()
    {
        $photo            = $this->input->post('photo');
        $kode_barang      = $this->input->post('kode_barang');
        $nama_barang      = $this->input->post('nama_barang');
        $kategori         = $this->input->post('kategori');
        $kwalitas         = $this->input->post('kwalitas');
        $pengadaan        = $this->input->post('pengadaan');
        $letak            = $this->input->post('letak');
        $qty              = $this->input->post('qty');


        // array menampung data yang akan disimpan
        if ($_FILES['photo']['name']) {
            $upload = $this->do_upload();
            if ($upload['error']) {
                $this->session->set_flashdata('flashGagal', 'Gagal' . $upload['error']);
                redirect('dataassets');
            }

            $data = array(
                'photo'         => $upload['file_name'],
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'kategori'      => $kategori,
                'kwalitas'      => $kwalitas,
                'pengadaan'     => $pengadaan,
                'letak'         => $letak,
                'qty'           => $qty
            );
        } else {
            $data = array(
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'kategori'      => $kategori,
                'kwalitas'      => $kwalitas,
                'pengadaan'     => $pengadaan,
                'letak'         => $letak,
                'qty'           => $qty
            );
        }

        $this->db->where('kode_barang', $kode_barang);
        $update = $this->db->update('assets', $data);

        if ($update) {
            $this->session->set_flashdata('flashUpdate', 'Terupdate');
            redirect('dataassets');
        } else {
            $this->session->set_flashdata('fUpdateGagal', 'Gagal Terupdate');
            redirect('dataassets');
        }
    }

    public function Hapus($id_assets)
    {
        $hapus = $this->db->delete('assets', array('id_assets' => $id_assets));

        if ($hapus) {
            $this->session->set_flashdata('flashHapus', 'Terhapus');
            redirect('dataassets');
        } else {
            $this->session->set_flashdata('fGagalTerhapus', 'Gagal Terhapus');
            redirect('dataassets');
        };
    }

    public function do_upload()
    {
        $config['upload_path'] = 'img_up/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = date("YmdHis") . $this->input->post('photo');

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            return $error;
        } else {
            $data = $this->upload->data();
            return $data;
        }
    }
}
