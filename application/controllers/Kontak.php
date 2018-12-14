<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('KontakModel');
  }
  
  public function index(){
    $data['kontak'] = $this->KontakModel->view();
    $this->load->view('kontak/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->KontakModel->validation("save")){
        $this->KontakModel->save(); 
        redirect('kontak');
      }
    }
    
    $this->load->view('kontak/tambah_data');
  }
  
  public function ubah($no){
    if($this->input->post('submit')){ 
      if($this->KontakModel->validation("update")){ 
        $this->KontakModel->edit($no);
        redirect('kontak');
      }
    }
    
    $data['kontak'] = $this->KontakModel->view_by($no);
    $this->load->view('kontak/edit_data', $data);
  }
  
  public function hapus($no){
    $this->KontakModel->delete($no);
    redirect('kontak');
  }
}