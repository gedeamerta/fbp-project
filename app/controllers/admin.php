<?php 
class Admin extends Controller
{
    public function index()
    {
        if(!isset($_POST['login-admin'])) {
            $data['title'] = 'Login Admin';
            $this->view('admin/index',$data);   
        }else {
            if($this->model("Admin_model")->login_admin($_POST) > 0)
            {
                Flasher::setFlash('success', 'Success Login');
                header("Location: ". baseurl . "/admin/dashboard");
            }else {
                var_dump('gagal');
            }
        }
    }

    public function dashboard()
    {
        if(!isset($_SESSION['login_admin'])){
            $data['title'] = 'Login Admin';
            $this->view('admin/index',$data);  
        }else {
            $data['title'] = 'Dashboard Admin'; 
            $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
            $this->view('layouts/header-admin', $data);
            $this->view('admin/dashboard', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function add_admin()
    {
        if($this->model('Admin_model')->addNewAdmin($_POST) > 0)
        {
            Flasher::setFlash('success', 'Success Add Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        }else {
            Flasher::setFlash('error', 'Fail Add Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        }
    }

    public function update()
    {
        if ($this->model('Admin_model')->updateAdmin($_POST) > 0) {
            Flasher::setFlash('success', 'Success Update Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        }
    }

    public function setOut()
    {
        $this->model('Admin_model')->logOut();
    }
}