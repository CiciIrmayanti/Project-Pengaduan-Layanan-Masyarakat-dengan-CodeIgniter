<?php
Class Dashboard extends CI_Controller{

    public function index(){
        $data['title'] = 'Dashboard';
        $this->load->view('base', $data);
    }

    public function login(){
        $data['title'] = 'Login';
        $this->load->view('v_login', $data);
    }

    public function regis(){
        $data['title'] = 'Register';
        $this->load->view('register', $data);
    }

    public function tanggapan(){
        $data['title'] = 'Tanggapan';
        $this->load->view('tanggapan', $data);
    }

    public function verifikasi(){
        $data['title'] = 'Verifikasi';
        $this->load->view('verifikasi-tanggapan', $data);
    }

    public function laporan(){
        $data['title'] = 'lihat-laporan';
        $this->load->view('data-pengaduan', $data);
    }
    
}