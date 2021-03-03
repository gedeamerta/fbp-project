<?php 
class Home extends Controller 
{
    public function index()
    {
        $data['title'] = 'Future Body Project'; 
        $data['set_active'] = 'index';

        $data['getTesti']= $this->model('Home_model')->getTesti();
        $data['getCoach']= $this->model('Coach_model')->getAllCoach();
        
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer',$data);

    }

    public function services()
    {
        $data['title'] = 'Future Body Project - Services'; 
        $data['set_active'] = 'our-services'; 
        $data['packages'] = $this->model("Packages_model")->getAllPackages();
          
        $this->view('layouts/header', $data);
        $this->view('home/packages', $data);
        $this->view('layouts/footer',$data);

    }

    public function details_packages($slug)
    {
        $data['title'] = 'Future Body Project - Packages Details'; 
        $data['set_active'] = 'our-services'; 
        $data['packages_details'] = $this->model("Packages_model")->getDetailsPackages($slug);
        
        $this->view('layouts/header', $data);
        $this->view('home/details-packages', $data);
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
        $data['coach'] = $this->model("Coach_model")->getAllCoach();
        
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