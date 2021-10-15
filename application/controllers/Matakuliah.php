<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('matkul/view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => "<div class='alert alert-danger' role='alert'>Kode Matakuliah Harus diisi</div>",
                'min_length' => "<div class='alert alert-danger' role='alert'>Kode terlalu pendek</div>"
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => "<div class='alert alert-danger' role='alert'>Nama Matakuliah Harus diisi</div>",
                'min_length' => "<div class='alert alert-danger' role='alert'>Nama terlalu pendek</div>"
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('matkul/view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

            $this->load->view('matkul/view-data-matakuliah', $data);
        }
    }
}
