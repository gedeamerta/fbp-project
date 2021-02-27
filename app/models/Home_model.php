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
}