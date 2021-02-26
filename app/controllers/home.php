<?php 
class Home extends Controller 
{
    public function index()
    {
        $data['title'] = 'Future Body Project'; 
        $data['set_active'] = 'index'; 
        
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer',$data);

    }
}