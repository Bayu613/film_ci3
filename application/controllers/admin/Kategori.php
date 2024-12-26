<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model("User_model");
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('id_kategori', 'ASC');
        $kategori= $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'          => $kategori
        );
        $this->load->view('admin/kategori_index', $data);
    }

    public function simpan()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$nama_kategori);
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Nama Kategori sudah digunakan SILAHKAN GANTI
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
        redirect('admin/kategori');
        } else {

            $data = array(
                'nama_kategori'      => $this->input->post('nama_kategori'),
            );
    
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
            redirect('admin/kategori');
        }

        
    }

    public function update(){
        $this->User_model->update_kategori();
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Diedit
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
         redirect ('admin/kategori');
     }

    public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/kategori');
    }


    public function edit($id){
        $this->db->select('*')->from('kategori');
        $this->db->where('id_kategori',$id);
        $user = $this->db->get()->result_array();
        $data = array('kategori' => $user);
		$this->load->view('admin/kategori_edit',$data);
    }
}

