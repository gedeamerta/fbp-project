<?php
class Services_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPackages()
    {
        $this->db->query("SELECT * FROM packages");
        return $this->db->resultAll();
    }

    public function getDetailsPackages($slug) {
        $this->db->query("SELECT * FROM package_details INNER JOIN packages ON packages.slug = package_details.slug_packages WHERE package_details.slug_packages = :slug_packages");
        $this->db->bind('slug_packages', $slug);
        return $this->db->resultAll();
    }
}