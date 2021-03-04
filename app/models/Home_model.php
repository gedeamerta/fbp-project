<?php 
class Home_model 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBeforeClients()
    {
        $this->db->query("SELECT * FROM before_clients");
        return $this->db->resultAll();
    }

    public function getAfterClients()
    {
        $this->db->query("SELECT * FROM after_clients");
        return $this->db->resultAll();
    }

    public function getTesti()
    {
        $this->db->query("SELECT * FROM testimonials");
        return $this->db->resultAll();
    }
    
    public function getDetailsPackages($id)
    {
        $this->db->query("SELECT packages_details.*, packages.title_packages FROM packages_details INNER JOIN packages ON packages_details.id_packages = packages.id WHERE packages_details.id_packages = :id_packages");
        $this->db->bind('id_packages',$id);
        return $this->db->resultAll();
    }

    public function getTitlePackages($id)
    {
        $this->db->query("SELECT packages_details.*, packages.title_packages FROM packages_details INNER JOIN packages ON packages_details.id_packages = packages.id WHERE packages_details.id_packages = :id_packages");
        $this->db->bind('id_packages',$id);
        return $this->db->single();
    }
}