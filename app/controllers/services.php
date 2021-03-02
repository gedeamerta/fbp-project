<?php
class Services extends Controller {

    public function index()
    {
        $data['title'] = 'Future Body Project - Services'; 
        $data['set_active'] = 'our-services'; 
        $data['packages'] = $this->model("Services_model")->getPackages();
          
        $this->view('layouts/header', $data);
        $this->view('services/index', $data);
        $this->view('layouts/footer',$data);

    }

    public function details($slug)
    {
        $data['title'] = 'Future Body Project - Packages Details'; 
        $data['set_active'] = 'our-services'; 
        $data['packages_details'] = $this->model("Services_model")->getDetailsPackages($slug);
        
        $this->view('layouts/header', $data);
        $this->view('services/details', $data);
        $this->view('layouts/footer',$data);
    }
}