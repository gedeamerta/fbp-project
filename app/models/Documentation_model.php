<?php
class Documentation_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDocs()
    {
        $this->db->query('SELECT * FROM documentation');
        return $this->db->resultAll();
    }

    public function getDocsId($id)
    {
        $this->db->query('SELECT * FROM documentation WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addDocs()
    {     
        //to find image location
        $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR;
        $targetFile = $targetDir . basename($_FILES["photos"]["name"]);
        $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk   = 1;

        $check = getimagesize($_FILES["photos"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
            echo "Sorry, only JPG, JPEG, and PNG images are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["photos"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["photos"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        $query = "INSERT INTO documentation (photos) VALUES (:photos)";
        $this->db->query($query);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataDocs($id)
    {  
        //to find image location
        $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR;
        $targetFile = $targetDir . basename($_FILES["photos"]["name"]);
        $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk   = 1;

        $check = getimagesize($_FILES["photos"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
            echo "Sorry, only JPG, JPEG, and PNG images are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["photos"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["photos"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $query = "UPDATE documentation SET photos= :photos WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDataDocs($id) {
        $query = "DELETE FROM documentation WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}