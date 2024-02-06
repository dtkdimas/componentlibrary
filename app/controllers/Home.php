<?php

class Home extends Controller{
    public function index(){
        // echo "Home/Index";
        $data['judul'] = 'Microsite Component Library';
        $data['tahun'] = $this->model('Component_model')->getTahun();
        $data['codepenlink'] = $this->model('Component_model')->getCodepenLink();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}