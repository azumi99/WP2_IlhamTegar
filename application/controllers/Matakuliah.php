<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('matkul/view-form-matakuliah');
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('matkul/view-data-matakuliah', $data);
    }
}
