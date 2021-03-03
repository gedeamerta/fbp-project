<?php
class Coach_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getCoachBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM coach_profile WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
    }
    public function getAllCoach()
    {
        $this->db->query('SELECT * FROM coach_profile');
        return $this->db->resultAll();
    }

    public function getCoachId($id)
    {
        $this->db->query('SELECT * FROM coach_profile WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function addCoach($data)
    {
        $name = htmlspecialchars($data['name']);
        $job = htmlspecialchars($data['job']);
        $descriptions = htmlspecialchars($data['descriptions']);
        
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
        
        $query = "INSERT INTO coach_profile (name, job, photos, descriptions ) VALUES (:name, :job, :photos, :descriptions)";
        $this->db->query($query);
        $this->db->bind("name", $name);
        $this->db->bind("job", $job);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->bind("descriptions", $descriptions);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataCoach($id)
    {  
        $name = htmlspecialchars($_POST['name']);

        if(isset($_FILES['photos']['name']) && $_FILES['photos']['error'] <= 0) {
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

            $query = "UPDATE coach_profile SET name= :name, photos= :photos WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("photos", $_FILES['photos']['name']);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            $query = "UPDATE coach_profile SET name= :name WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

    }

    public function deleteDataCoach($id) {
        $query = "DELETE FROM coach_profile WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}