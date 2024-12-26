<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        if($this->session->userdata('level')!=='Admin'){
			redirect('auth');
		}
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
        $this->load->view('admin/user_index', $data);
    }

    public function simpan()
    {
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->result_array();
        if ($cek<>NULL){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Username sudah digunakan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
        redirect('admin/user');
        } else {

            $this->User_model->simpan();
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
            redirect('admin/user');
        }

        
    }

    public function update(){
        $this->User_model->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Diedit
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
         redirect ('admin/user');
     }

    public function hapus($id){
        $where = array('id_user' => $id);
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/user');
    }


    public function edit($id){
        $this->db->select('*')->from('user');
        $this->db->where('id_user',$id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
		$this->load->view('admin/user_edit',$data);
    }
}

