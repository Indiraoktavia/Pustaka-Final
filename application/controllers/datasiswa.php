<?php
class Datasiswa extends CI_Controller
{


    public function index()
    {

        $this->load->view('view-form-datasiswa');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('nis', 'nis datasiswa',
        'required|min_length[5]', [
            'required' => 'nis datasiswa Harus diisi',
            'min_lenght' => 'nis terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama datasiswa',
        'required|min_length[3]', [
            'required' => 'Nama datasiswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else{
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggal lahir'),
                'tempatlahir' => $this->input->post('tempat lahir'),
                'alamat' => $this->input->post('alamat'),
                'agama' => $this->input->post('agama'),
               
            
            ];

            $this->load->view('view-data-datasiswa', $data);
        }    
    }
    
}