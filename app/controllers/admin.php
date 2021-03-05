<?php 
class Admin extends Controller
{
    // !! Section Admin
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

    public function update_admin()
    {
        $data['title'] = 'Dashboard Admin'; 
        $data['set_active'] = 'dashboard'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['admin'] = $this->model("Admin_model")->getAdmin();
        
        if(!isset($_SESSION['login_admin'])){
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/update-admin', $data);
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

    public function updateCoAdmin($slug)
    {
        if ($this->model('Admin_model')->updateDataCoAdmin($slug) > 0) {
            Flasher::setFlash('success', 'Success Update Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Admin');
            header("Location: " . baseurl . "/admin/update_admin/".$slug);
        }
    }

    public function delete($slug)
    {
        if ($this->model('Admin_model')->deleteAdmin($slug) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Admin');
            header("Location: " . baseurl . "/admin/dashboard");
        }
    }

    // !!Section Packages   
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

    public function packages_update($id)
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
            header("Location: " . baseurl . "/admin/packages");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Packages');
            header("Location: " . baseurl . "/admin/packages");
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

    public function deletePackages($id)
    {
        if ($this->model('Packages_model')->deleteDataPackages($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Packages');
            header("Location: " . baseurl . "/admin/packages");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Packages');
            header("Location: " . baseurl . "/admin/packages");
        }
    }

    // !!Section Packages Details
    public function packages_details($id)
    {
        $data['title'] = 'Dashboard Packages';
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['packages_details'] = $this->model("PackagesDetails_model")->getAllPackagesDetails($id);
        $data['selected_packages'] = $this->model("PackagesDetails_model")->getSelectedPackages($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/packages-details', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function packages_details_update($slug)
    {
        $data['title'] = 'Dashboard Packages Details';
        $data['set_active'] = 'packages-details'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['packages_details_single'] = $this->model("PackagesDetails_model")->getPackagesDetails($slug);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/packages-details-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updatePackagesDetails($id)
    {
        if ($this->model('PackagesDetails_model')->updateDataPackagesDetails($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data Packages Details');
            header("Location: " . baseurl . "/admin/packages");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Packages Details');
            header("Location: " . baseurl . "/admin/packages");
        }
    }

    public function add_packages_details()
    {
        if ($this->model('PackagesDetails_model')->addPackagesDetails($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add Packages Details');
            header("Location: " . baseurl . "/admin/packages_details/".$_POST['id_packages']);
        } else {
            Flasher::setFlash('error', 'Fail Add Packages Details');
            header("Location: " . baseurl . "/admin/packages_details");
        }
    }

    public function deletePackagesDetails($id)
    {
        if ($this->model('PackagesDetails_model')->deleteDataPackages($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Packages Details');
            header("Location: " . baseurl . "/admin/packages");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Packages Details');
            header("Location: " . baseurl . "/admin/packages");
        }
    }


    // !!Section Coach
    public function coach()
    {
        $data['title'] = 'Dashboard Coach';
        $data['set_active'] = 'coach'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['coach'] = $this->model("Coach_model")->getAllCoach();
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/coach', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function coach_update($id)
    {
        $data['title'] = 'Dashboard Packages Details';
        $data['set_active'] = 'packages'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['coach_single'] = $this->model("Coach_model")->getCoachId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/coach-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function add_coach()
    {
        if ($this->model('Coach_model')->addCoach($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add Coach');
            header("Location: " . baseurl . "/admin/coach");
        } else {
            Flasher::setFlash('error', 'Fail Add Coach');
            header("Location: " . baseurl . "/admin/coach");
        }
    }

    public function updateCoach($id)
    {
        if ($this->model('Coach_model')->updateDataCoach($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data Coach');
            header("Location: " . baseurl . "/admin/coach");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Coach');
            header("Location: " . baseurl . "/admin/coach");
        }
    }

    public function deleteCoach($id)
    {
        if ($this->model('Coach_model')->deleteDataCoach($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Coach');
            header("Location: " . baseurl . "/admin/coach");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Coach');
            header("Location: " . baseurl . "/admin/coach");
        }
    }

    // !! Before After Secion
    public function before_after()
    {
        $data['title'] = 'Dashboard Before & After';
        $data['set_active'] = 'beforeafter'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['before'] = $this->model("BeforeAfter_model")->getAllBefore();
        $data['after'] = $this->model("BeforeAfter_model")->getAllAfter();
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/before-after', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function add_before()
    {
        if ($this->model('BeforeAfter_model')->addBefore($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add Before Clients');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Add Before Clients');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    public function before_update($id)
    {
        $data['title'] = 'Dashboard Before Clients Update';
        $data['set_active'] = 'before'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['before_single'] = $this->model("BeforeAfter_model")->getBeforeId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/before-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updateBefore($id)
    {
        if ($this->model('BeforeAfter_model')->updateDataBefore($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data Before');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Before');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    public function deleteBefore($id)
    {
        if ($this->model('BeforeAfter_model')->deleteDataBefore($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Before');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Before');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    // !! Section After
    public function add_after()
    {
        if ($this->model('BeforeAfter_model')->addAfter($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add After Clients');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Add After Clients');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    public function after_update($id)
    {
        $data['title'] = 'Dashboard After Clients Update';
        $data['set_active'] = 'after'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['after_single'] = $this->model("BeforeAfter_model")->getAfterId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/after-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updateAfter($id)
    {
        if ($this->model('BeforeAfter_model')->updateDataAfter($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data After');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Update Data After');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    public function deleteAfter($id)
    {
        if ($this->model('BeforeAfter_model')->deleteDataAfter($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data After');
            header("Location: " . baseurl . "/admin/before_after");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data After');
            header("Location: " . baseurl . "/admin/before_after");
        }
    }

    // !! Section Documentations
    public function docs()
    {
        $data['title'] = 'Dashboard Documentations';
        $data['set_active'] = 'docs'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['docs'] = $this->model("Documentation_model")->getAllDocs();
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/docs', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function add_docs()
    {
        if ($this->model('Documentation_model')->addDocs($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add After Documentations');
            header("Location: " . baseurl . "/admin/docs");
        } else {
            Flasher::setFlash('error', 'Fail Add After Documentations');
            header("Location: " . baseurl . "/admin/docs");
        }
    }

    public function docs_update($id)
    {
        $data['title'] = 'Dashboard After Clients Update';
        $data['set_active'] = 'after'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['docs_single'] = $this->model("Documentation_model")->getDocsId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/docs-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updateDocs($id)
    {
        if ($this->model('Documentation_model')->updateDataDocs($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data After');
            header("Location: " . baseurl . "/admin/docs");
        } else {
            Flasher::setFlash('error', 'Fail Update Data After');
            header("Location: " . baseurl . "/admin/docs");
        }
    }

    public function deleteDocs($id)
    {
        if ($this->model('Documentation_model')->deleteDataDocs($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Docs');
            header("Location: " . baseurl . "/admin/docs");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Docs');
            header("Location: " . baseurl . "/admin/docs");
        }
    }

    // !! Section Testimonials
    public function testi()
    {
        $data['title'] = 'Dashboard Testi'; 
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['testi'] = $this->model("Testi_model")->getAllTesti();
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/testi', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function add_testi()
    {
        if ($this->model('Testi_model')->addDataTesti($_POST) > 0) {
            Flasher::setFlash('success', 'Success Add Testimonials');
            header("Location: " . baseurl . "/admin/testi");
        } else {
            Flasher::setFlash('error', 'Fail Add Testimonials');
            header("Location: " . baseurl . "/admin/testi");
        }
    }

    public function testi_update($id)
    {

        $data['title'] = 'Dashboard Testi Update';
        $data['admin_single'] = $this->model("Admin_model")->getAdminId($_SESSION['id_admin']);
        $data['testi_single'] = $this->model("Testi_model")->getTestiId($id);
        
        if(!isset($_SESSION['login_admin'])) {
            header("Location: " . baseurl . "/admin/index");
        }else {
            $this->view('layouts/header-admin', $data);
            $this->view('admin/testi-update', $data);
            $this->view('layouts/footer-admin',$data);
        }
    }

    public function updateTesti($id)
    {

        if ($this->model('Testi_model')->updateDataTesti($id) > 0) {
            Flasher::setFlash('success', 'Success Update Data Testi');
            header("Location: " . baseurl . "/admin/testi");
        } else {
            Flasher::setFlash('error', 'Fail Update Data Testi');
            header("Location: " . baseurl . "/admin/testi");
        }
    }

    public function deleteTesti($id)
    {
        if ($this->model('Testi_model')->deleteDataTesti($id) > 0) {
            Flasher::setFlash('success', 'Success Delete Data Testi');
            header("Location: " . baseurl . "/admin/testi");
        } else {
            Flasher::setFlash('error', 'Fail Delete Data Testi');
            header("Location: " . baseurl . "/admin/testi");
        }
    }

    public function setOut()
    {
        $this->model('Admin_model')->logOut();
    }
}