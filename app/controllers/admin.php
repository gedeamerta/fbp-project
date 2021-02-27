<?php 
class Admin extends Controller
{
    public function index()
    {
        $data['title'] = 'Admin FBP'; 
        $data['set_active'] = 'index';
        
        $this->view('layouts/header-admin', $data);
        $this->view('admin/index', $data);
        $this->view('layouts/footer-admin',$data);
    }
}