<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends Parent_controller {

//nim,nama_lengkap,jurusan,email,alamat,kontak,password,status

  var $parsing_form_input = array('nim','nama_lengkap','jurusan','email','alamat','kontak','password','status');
  var $tablename = 'anggota';

    public function __construct() {
        parent::__construct();
        $this->load->model('m_anggota','mbm');

    }

    public function index() {

        $data['listing'] = $this->mbm->get_all($id=NULL,$this->tablename)->result();
        echo json_encode($data['listing']);

    }

        public function save(){

          //nim,nama_lengkap,jurusan,email,alamat,kontak,password,status

        $datapos = array('nim'=>$this->input->post('id'),
                           'nama_lengkap'=>$this->input->post('nama_barang'),
                           'jurusan'=>$this->input->post('jurusan'),
                           'email'=>$this->input->post('email'),
                           'alamat'=>$this->input->post('alamat'),
                           'kontak'=>$this->input->post('kontak'),
                           'password'=>$this->input->post('password'),
                           'status'=>$this->input->post('status'));
        $save = $this->db->query("insert into anggota (nim,nama_lengkap,jurusan,email,alamat,kontak,
        password,status) values (null,'$datapos[nim]','$datapos[nama_lengkap]','$datapos[jurusan]','$datapos[email]',
        '$datapos[alamat]','$datapos[kontak]','$datapos[password]','$datapos[status]') ");

          if($save){
            echo "<script language=javascript>
             alert('Simpan Data Berhasil');
             window.location='" . base_url('user') . "';
                 </script>";
          }

        }

        public function delete(){
          $idpost = $this->input->post('id');

          $del = $this->db->query("delete from anggota where id = '$idpost' ");

          if($del){
            echo "<script language=javascript>
             alert('Hapus Data Berhasil');
             window.location='" . base_url('user') . "';
                 </script>";
          }
        }

        public function update(){
          $datapos = array('nim'=>$this->input->post('id'),
                             'nama_lengkap'=>$this->input->post('nama_barang'),
                             'jurusan'=>$this->input->post('jurusan'),
                             'email'=>$this->input->post('email'),
                             'alamat'=>$this->input->post('alamat'),
                             'kontak'=>$this->input->post('kontak'),
                             'password'=>$this->input->post('password'),
                             'status'=>$this->input->post('status'));
        $save = $this->db->query("update anggota set nim = '$datapos[nim]' , nama_lengkap = '$datapos[nama_lengkap]', jurusan = '$datapos[jurusan]', email = '$datapos[email]', alamat = '$datapos[alamat]', kontak = '$datapos[kontak]', password = '$datapos[password]', status = '$datapos[status]'");
        if($save){
          echo "<script language=javascript>
           alert('Update Data Berhasil');
           window.location='" . base_url('user') . "';
               </script>";
        }
        }

}
