<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class KontakModel extends CI_Model {

  public function view(){
    return $this->db->get('kontak')->result();
  }
  

  public function view_by($no){
    $this->db->where('no', $no);
    return $this->db->get('kontak')->row();
  }
  

  public function validation($mode){
    $this->load->library('form_validation'); 
    

    if($mode == "save")
      $this->form_validation->set_rules('input_no', 'no', 'required|numeric|max_length[3]');
    
    $this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[25]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[25]');
    $this->form_validation->set_rules('input_phone', 'phone', 'required|numeric|max_length[15]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  

  public function save(){
    $data = array(
      "no" => $this->input->post('input_no'),
      "nama" => $this->input->post('input_nama'),
      "email" => $this->input->post('input_email'),
      "phone" => $this->input->post('input_phone')
    );
    
    $this->db->insert('kontak', $data);
  }
  

  public function edit($no){
    $data = array(
      "no" => $this->input->post('input_no'),
      "nama" => $this->input->post('input_nama'),
      "email" => $this->input->post('input_email'),
      "phone" => $this->input->post('input_phone')
    );
    
    $this->db->where('no', $no);
    $this->db->update('kontak', $data);
  }
  

  public function delete($no){
    $this->db->where('no', $no);
    $this->db->delete('kontak');
  }
}