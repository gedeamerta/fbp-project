<?php
class PackagesDetails_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getPackagesBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM packages_details WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
    }
    public function getAllPackagesDetails($id)
    {
        $this->db->query('SELECT packages_details.* FROM packages_details INNER JOIN packages ON packages_details.id_packages = packages.id WHERE packages_details.id_packages = :id_packages');
        $this->db->bind('id_packages', $id);
        return $this->db->resultAll();
    }

    public function getPackagesDetails($slug)
    {
        $this->db->query('SELECT * FROM packages_details WHERE slug_details = :slug_details');
        $this->db->bind('slug_details', $slug);
        return $this->db->single();
    }

    public function getSelectedPackages($id)
    {
        $this->db->query('SELECT * FROM packages WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
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

    public function addPackagesDetails($data)
    {
        $title_packages = htmlspecialchars($data['title_packages_details']);
        $slug = $this->slugify($title_packages);
        $descriptions = htmlspecialchars($data['descriptions_details']);
        $id_packages = htmlspecialchars($data['id_packages']);
        
        //to find image location
        $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR;
        $targetFile = $targetDir . basename($_FILES["photos_details"]["name"]);
        $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk   = 1;

        $check = getimagesize($_FILES["photos_details"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["photos_details"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["photos_details"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        $query = "INSERT INTO packages_details (title_packages_details, slug_details, descriptions_details, photos_details, id_packages ) VALUES (:title_packages_details, :slug_details, :descriptions_details, :photos_details, :id_packages)";
        $this->db->query($query);
        $this->db->bind("title_packages_details", $title_packages);
        $this->db->bind("slug_details", $slug);
        $this->db->bind("descriptions_details", $descriptions);
        $this->db->bind("photos_details", $_FILES['photos_details']['name']);
        $this->db->bind("id_packages", $id_packages);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataPackagesDetails($slug)
    {  
        $title_packages = htmlspecialchars($_POST['title_packages_details']);
        $slug = $this->slugify($title_packages);
        $descriptions = htmlspecialchars($_POST['descriptions_details']);


        if(isset($_FILES['photos_details']['name']) && $_FILES['photos_details']['error'] <= 0) {
            //to find image location
            $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR;
            $targetFile = $targetDir . basename($_FILES["photos_details"]["name"]);
            $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $uploadOk   = 1;

            $check = getimagesize($_FILES["photos_details"]["tmp_name"]);
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
                if (move_uploaded_file($_FILES["photos_details"]["tmp_name"], $targetFile)) {
                    echo "The file " . basename($_FILES["photos_details"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $query = "UPDATE packages_details SET title_packages_details= :title_packages_details, slug_details= :slug_details, descriptions_details= :descriptions_details, photos_details= :photos_details WHERE slug_details = :slug_details";
            $this->db->query($query);
            $this->db->bind("title_packages_details", $title_packages);
            $this->db->bind("slug_details", $slug);
            $this->db->bind("descriptions_details", $descriptions);
            $this->db->bind("photos_details", $_FILES['photos_details']['name']);
            $this->db->execute();
            return $this->db->rowCount();
        }else {
            $query = "UPDATE packages_details SET title_packages_details= :title_packages_details, slug_details= :slug_details, descriptions_details= :descriptions_details WHERE slug_details = :slug_details";
            $this->db->query($query);
            $this->db->bind("title_packages_details", $title_packages);
            $this->db->bind("slug_details", $slug);
            $this->db->bind("descriptions_details", $descriptions);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function deleteDataPackages($id) {
        $query = "DELETE FROM packages_details WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}