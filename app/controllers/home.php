<?php

class home extends controller{
    public function index()
    {
       $data['nama'] = 'Agus';
       $data['pekerjaan'] = 'juragan angkot';
       $data['judul'] = 'home';
       $this->view('templates/header', $data);
       $this->view('home/index', $data);
       $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = 'download.jpeg';
        $data['nama'] = 'rahmat';
        $data['pekerjaan'] = '-';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}
?>
