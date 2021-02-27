<?php 

class Admin_model 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAdminBy($param, $value)
    {
        if (isset($param) && isset($value)) {
            $this->db->query("SELECT * FROM admins WHERE $param = :$param");
            $this->db->bind($param, $value);
            return $this->db->single();
        }
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

    public function loginAdmin($data)
    {
        $username = $data['username'];
        $password = $data['password']; //password on admin form input

        if ($data_admin = $this->getAdminBy('username', $username)) {
            $password_db = $data_admin['password']; // password from tb admnin

            if ($password == $password_db || password_verify($password, $password_db)) {
                $_SESSION['id_admin'] = $data_admin['id'];
                $_SESSION['fullname_admin'] = $data_admin['fullname'];
                $_SESSION['login_admin'] = 'login_admin';
                echo "berhasil";
                return true;
            }else{
                echo"gagal";
                return false;
            }
        }
    }

    public function addNewAdmin($data)
    {
        $username = htmlspecialchars($data['username']);
        $fullname = htmlspecialchars($data['fullname']);
        $password = htmlspecialchars($data['password']);

        //validate password
        $uppercase =  preg_match('@[A-Z]@', $password);
        $lowercase =  preg_match('@[a-z]@', $password);
        $number =  preg_match('@[0-9]@', $password);

        //to find image location
        $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk   = 1;

        $check = getimagesize($_FILES["image"]["tmp_name"]);
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
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        if ($data_admin = $this->getAdminBy("username", $username) || $data_admin = $this->getAdminBy("fullname",$fullname)) {
            var_dump("udah ada username");
        }else{
            if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
                echo
                    '<script>
                            alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number.")
                        </script>';
            } else {
                $query = "INSERT INTO admins (username, fullname, image, password) VALUES (:username, :fullname, :image, :password)";
                $this->db->query($query);
                $this->db->bind("username", $username);
                $this->db->bind("fullname", $fullname);
                $this->db->bind("image", $_FILES['image']['name']);
                $this->db->bind("password", password_hash($password, PASSWORD_DEFAULT));
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function updatePassword($data)
    {
        //validate password
        $uppercase =  preg_match('@[A-Z]@', $data['password']);
        $lowercase =  preg_match('@[a-z]@', $data['password']);
        $number =  preg_match('@[0-9]@', $data['password']);


        if (!$uppercase || !$lowercase || !$number || strlen($data['password']) < 8) {
            echo '<script>
                    alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number.");
                    setTimeout(function() {
                        window.location.href="forms";
                    }, 1000);
                </script>';
        } else {
            if ($data['password'] !== $data['password2']) {
                echo
                    '<script>
                        alert("Your Password is invalid");
                        setTimeout(function() {
                            window.location.href="forms";
                        }, 1000);
                    </script>';
                exit;
            }else {
                $query = "UPDATE admins SET password = :password WHERE id = :id";
                $id_admin = $_SESSION['id_admin'];
                $this->db->query($query);
                $this->db->bind('id', $id_admin);
                $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function logOut()
    {
        session_destroy();
        $_SESSION = [];
        unset($_SESSION);

        header("Location: " . baseurl . '/admin/index');
    }
}