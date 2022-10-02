<?php
class Formcontroller extends CI_Controller
{
    public function form1()
    {
        $this->load->view('form1');
    }

    public function form2()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "npm" => $this->input->post('npm'),
            "umur" => $this->input->post('umur')
        ];
        $mahasiswa = new MdlMahasiswa();
        $mahasiswa->insert($data);

        $this->load->view('form2', $data);
    }
}
