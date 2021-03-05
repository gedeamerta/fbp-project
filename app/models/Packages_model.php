<?php
class Packages_model {
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getPackagesBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM packages WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
    }
    public function getAllPackages()
    {
        $this->db->query('SELECT * FROM packages');
        return $this->db->resultAll();
    }

    public function getPackagesId($id)
    {
        $this->db->query('SELECT * FROM packages WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getDetailsPackages($slug) {
        $this->db->query("SELECT * FROM packages_details INNER JOIN packages ON packages.slug = package_details.slug_packages WHERE package_details.slug_packages = :slug_packages");
        $this->db->bind('slug_packages', $slug);
        return $this->db->resultAll();
    }
    public function getPackages($slug) {
        $this->db->query("SELECT * FROM packages INNER JOIN packages_details ON packages.slug = package_details.slug_packages WHERE package_details.slug_packages = :slug_packages");
        $this->db->bind('slug_packages', $slug);
        return $this->db->resultAll();
    }
    
    //slug the category
    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public function addPackages($data)
    {
        $title_packages = htmlspecialchars($data['title_packages']);
        $slug = $this->slugify($title_packages);
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
        
        $query = "INSERT INTO packages (title_packages, slug, descriptions, photos ) VALUES (:title_packages, :slug, :descriptions, :photos)";
        $this->db->query($query);
        $this->db->bind("title_packages", $title_packages);
        $this->db->bind("slug", $slug);
        $this->db->bind("descriptions", $descriptions);
        $this->db->bind("photos", $_FILES['photos']['name']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataPackages($id)
    {  
        $title_packages = htmlspecialchars($_POST['title_packages']);
        $slug = $this->slugify($title_packages);
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
            $query = "UPDATE packages SET title_packages= :title_packages, slug= :slug, descriptions= :descriptions, photos= :photos WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("title_packages", $title_packages);
            $this->db->bind("slug", $slug);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("photos", $_FILES['photos']['name']);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            $query = "UPDATE packages SET title_packages= :title_packages, slug= :slug, descriptions= :descriptions WHERE id = :id";
            $this->db->query($query);
            $this->db->bind("title_packages", $title_packages);
            $this->db->bind("slug", $slug);
            $this->db->bind("descriptions", $descriptions);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function deleteDataPackages($id) {
        $query = "DELETE FROM packages WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}