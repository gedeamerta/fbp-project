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

        if ($data_admin = $this->getPackagesBy("title_packages", $title_packages)) {
            echo
            '<script>
                    alert("Packages has been added")
            </script>';
        }else{
                $query = "INSERT INTO packages (title_packages, slug, descriptions, photos, created_at ) VALUES (:title_packages, :slug, :descriptions, :photos, :created_at)";
                $this->db->query($query);
                $this->db->bind("title_packages", $title_packages);
                $this->db->bind("slug", $slug);
                $this->db->bind("descriptions", $descriptions);
                $this->db->bind("photos", $_FILES['photos']['name']);
                $this->db->bind("created_at", date("d-m-Y"));
                $this->db->execute();
                return $this->db->rowCount();
            }
        }

        public function updatePackages($data)
        {   
            $username = $data['username'];
            //validate password
            $uppercase =  preg_match('@[A-Z]@', $data['password']);
            $lowercase =  preg_match('@[a-z]@', $data['password']);
            $number =  preg_match('@[0-9]@', $data['password']);
    
    
            if (!$uppercase || !$lowercase || !$number || strlen($data['password']) < 8) {
                echo '<script>
                        alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number.");
                        setTimeout(function() {
                            window.location.href="dashboard";
                        }, 1000);
                    </script>';
            } else {
                if ($data['password'] !== $data['password2']) {
                    echo
                        '<script>
                            alert("Your Password is invalid");
                            setTimeout(function() {
                                window.location.href="dashboard";
                            }, 1000);
                        </script>';
                    exit;
                }else {
                    $query = "UPDATE admins SET username = :username , password = :password WHERE id = :id";
                    $id_admin = $_SESSION['id_admin'];
                    $this->db->query($query);
                    $this->db->bind('username', $username);
                    $this->db->bind('id', $id_admin);
                    $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
                    $this->db->execute();
                    return $this->db->rowCount();
                }
            }
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