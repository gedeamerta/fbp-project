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
                Flasher::setFlash('error', 'Username or Password is wrong');
                header("Location: ". baseurl . "/admin/index");
            }
        }
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard Admin'; 
        $data['set_active'] = 'dashboard'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['admin'] = $this->model("Admin_model")->getAdmin();
        
        if(!isset($_SESSION['login_admin'])){
            header("Location: " . baseurl . "/admin/index");
        }else {
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

    public function delete($id)
    {
        if ($this->model('Admin_model')->deleteAdmin($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        }
    }

                
    public function packages()
    {
        $data['title'] = 'Dashboard Packages';
        $data['set_active'] = 'packages'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['packages'] = $this->model("Packages_model")->getAllPackages();
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/packages', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function packages_details($id)
    {
        $data['title'] = 'Dashboard Packages Details';
        $data['set_active'] = 'packages'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['packages_single'] = $this->model("Packages_model")->getPackagesId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/packages-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updatePackages($id)
    {
        if ($this->model('Packages_model')->updateDataPackages($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data Packages');
            header("Location: " . baseurl . "/admin/dashboard");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Packages');
            header("Location: " . baseurl . "/admin/dashboard");
        }
    }

    public function add_packages()
    {
        if ($this->model('Packages_model')->addPackages($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add Packages');
            header("Location: " . baseurl . "/admin/packages");
        } else {
            Flasher::setFlash('error', 'Fail Add Packages');
            header("Location: " . baseurl . "/admin/packages");
        }
    }

    public function setOut()
    {
        $this->model('Admin_model')->logOut();
    }
}