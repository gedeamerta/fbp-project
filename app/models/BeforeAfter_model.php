<?php
class BeforeAfter_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getBeforeBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM before_clients WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
    }
    public function getAfterBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM after_clients WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
    }

    public function getAllBefore()
    {
        $this->db->query('SELECT * FROM before_clients');
        return $this->db->resultAll();
    }

    public function getAllAfter()
    {
        $this->db->query('SELECT * FROM after_clients');
        return $this->db->resultAll();
    }

    public function getBeforeId($id)
    {
        $this->db->query('SELECT * FROM before_clients WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAfterId($id)
    {
        $this->db->query('SELECT * FROM after_clients WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    // !! Before Progress
    public function addBefore($data)
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
        
        $query = "INSERT INTO before_clients (name, job, photos, descriptions ) VALUES (:name, :job, :photos, :descriptions)";
        $this->db->query($query);
        $this->db->bind("name", $name);
        $this->db->bind("job", $job);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->bind("descriptions", $descriptions);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataBefore($id)
    {  
        $name = htmlspecialchars($_POST['name']);
        $job = htmlspecialchars($_POST['job']);
        $descriptions = htmlspecialchars($_POST['descriptions']);

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

            $query = "UPDATE before_clients SET name= :name, job = :job, descriptions=:descriptions, photos= :photos WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("job", $job);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("photos", $_FILES['photos']['name']);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            $query = "UPDATE before_clients SET name= :name, job=:job, descriptions=:descriptions WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("job", $job);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

    }

    public function deleteDataBefore($id) {
        $query = "DELETE FROM before_clients WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // !! After Progress
    public function addAfter($data)
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
        
        $query = "INSERT INTO after_clients (name, job, photos, descriptions ) VALUES (:name, :job, :photos, :descriptions)";
        $this->db->query($query);
        $this->db->bind("name", $name);
        $this->db->bind("job", $job);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->bind("descriptions", $descriptions);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataAfter($id)
    {  
        $name = htmlspecialchars($_POST['name']);
        $job = htmlspecialchars($_POST['job']);
        $descriptions = htmlspecialchars($_POST['descriptions']);

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

            $query = "UPDATE after_clients SET name= :name, job = :job, descriptions=:descriptions, photos= :photos WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("job", $job);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("photos", $_FILES['photos']['name']);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            $query = "UPDATE after_clients SET name= :name, job=:job, descriptions=:descriptions WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("name", $name);
            $this->db->bind("job", $job);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

    }

    public function deleteDataAfter($id) {
        $query = "DELETE FROM after_clients WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}