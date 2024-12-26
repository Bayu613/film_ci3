<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }
    public function index()
    {
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'galeri'          => $galeri
        );
        $this->load->view('admin/galeri', $data);
    }



    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'upload/galeri/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/galeri');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
            'foto'      => $namafoto,
        );

        $this->db->insert('galeri', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Carousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/galeri');
    }



    public function update()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']      = 'upload/galeri/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $config['overwrite']        = true;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/galeri');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
      
        );
        $where = array(
            'foto'  => $this->input->post('nama_foto')
        );
        $this->db->update('galeri', $data,$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Konten Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/galeri');
    }



    public function hapus($id){
        $where = array('id_galeri' => $id);
        $this->db->delete('galeri',$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/galeri');
    }


    public function edit($id){
        $this->db->select('*')->from('galeri');
        $this->db->where('id_galeri',$id);
        $galeri = $this->db->get()->result_array();
        $data = array('galeri' => $galeri);
		$this->load->view('admin/galeri_edit',$data);
    }

}
?>