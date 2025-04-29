<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('dosen_model');
    }
    public function index(){
        $data['dosen']=$this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['dosen']=$this->dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen',$data);
        $this->load->view('templates/footer');
    }
    public function insert(){
        $nidn=$this->input->post('nidn');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $email=$this->input->post('email');
        $telp=$this->input->post('telp');    

        $data=array(
            'nidn'=>$nidn,
            'nama'=>$nama,
            'alamat'=>$alamat,
            'jenis_kelamin'=>$jenis_kelamin,
            'email'=>$email,
            'telp'=>$telp
        );
        $result=$this->dosen_model->insert_dosen($data);

        if($result){
            $this->session->set_flashdata('success','Data dosen berhasil disimpan');
            redirect('dosen');
        }else{
            $this->session->set_flashdata('error','Data dosen gagal disimpan');
            redirect('dosen');
        }
    }
    public function edit($iddosen){
        $data['dosen']=$this->dosen_model->get_dosen_by_id($iddosen);
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');

        if ($this->form_validation->run()=== FALSE){
            $this->index($id);
        }else{
            $data=[
                'nidn'=>$this->input->post('nidn'),
                'nama'=>$this->input->post('nama'),
                'alamat'=>$this->input->post('alamat'),
                'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
                'email'=>$this->input->post('email'),
                'telp'=>$this->input->post('telp')
            ];
            $this->dosen_model->update_dosen($id,$data);
            redirect('dosen');
        }
    }
    public function hapus($iddosen){
        $this->dosen_model->delete_dosen($iddosen);
        redirect('dosen');
    }
}