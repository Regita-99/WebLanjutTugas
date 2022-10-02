<?php 

class MdlMahasiswa extends CI_Model{
    public $nama;
    public $npm;
    public $umur;

    public function insert($mahasiswa){
        $this->db->insert('mahasiswa',$mahasiswa);
    }
}
