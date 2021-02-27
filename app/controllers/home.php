<?php 
class Home extends Controller 
{
    public function index()
    {
        $data['title'] = 'Future Body Project'; 
        $data['set_active'] = 'index';

        $data['getTesti']= $this->model('Home_model')->getTesti();
        
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer',$data);

    }

    public function result()
    {
        $data['title'] = 'Future Body Project'; 
        $data['set_active'] = 'result'; 
        $data['getBefore'] = $this->model("Home_model")->getBeforeClients();
        $data['getAfter'] = $this->model("Home_model")->getAfterClients();
        
        $this->view('layouts/header', $data);
        $this->view('home/before-after', $data);
        $this->view('layouts/footer',$data);

    }

    public function coach()
    {
        $data['title'] = 'Future Body Project - Coach'; 
        $data['set_active'] = 'our-coach'; 
        
        $this->view('layouts/header', $data);
        $this->view('home/our-coach', $data);
        $this->view('layouts/footer',$data);

    }

    public function contact()
    {
        $data['title'] = 'Future Body Project - Contact'; 
        $data['set_active'] = 'contact'; 
        
        $this->view('layouts/header', $data);
        $this->view('home/contact', $data);
        $this->view('layouts/footer',$data);

    }
}