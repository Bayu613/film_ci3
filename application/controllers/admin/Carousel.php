<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Carousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }
    public function index()
    {
        $this->db->from('carousel');
        $carousel = $this->db->get()->result_array();

        $data = array(
            'judul_halaman' => 'Daftar Carousel',
            'carousel'          => $carousel,
        );
        $this->load->view('admin/carousel_index', $data);
    }

    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'upload/carousel/';
        $config['max_size'] = 30 * 1024 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 30 * 1024 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/carousel');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
            'foto'      => $namafoto,
        );

        $this->db->insert('carousel', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Carousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/carousel');
    }



    public function update()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']      = 'upload/konten/';
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
            redirect('admin/konten');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
        $data = array(
            'judul'      => $this->input->post('judul'),
            'id_kategori'      => $this->input->post('id_kategori'),
            'keterangan'      => $this->input->post('keterangan'),
            'slug'      => str_replace(' ', '-', $this->input->post('judul'))
        );
        $where = array(
            'foto'  => $this->input->post('nama_foto')
        );
        $this->db->update('konten', $data,$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Konten Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/konten');
    }




    
    public function hapus($id)
    {
        $filename=FCPATH.'/upload/carousel'.$id;
            if(file_exists($filename)){
                unlink("./upload/carousel".$id);
            }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('carousel', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Carousel Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/carousel');
    }


    public function edit($id)
    {
        $this->db->select('*')->from('konten');
        $this->db->where('id_kategori', $id);
        $user = $this->db->get()->result_array();
        $data = array('konten' => $user);
        $this->load->view('admin/konten_edit', $data);
    }
}
