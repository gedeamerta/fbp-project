<?php 
class Auth extends Controller {
    public function login()
    {
        $this->view('auth/login');
    }
    public function add_admin()
    {
        $this->view('auth/add-admin');
    }
}