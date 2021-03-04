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
    
    public function login_admin($data)
    {
        $username = $data['username'];
        $password = $data['password'];

        if ($data_admin = $this->getAdminBy('username', $username)) {
            $password_db = $data_admin['password'];
            if ($password == $password_db || password_verify($password, $password_db)) {
                $_SESSION['id_admin'] = $data_admin['id'];
                $_SESSION['login_admin'] = 'login_admin';
                echo "berhasil";
                return true;
            }else{
                echo"gagal";
                return false;
            }
        }
    }

    public function getAdmin()
    {
        $this->db->query('SELECT * FROM admins');
        return $this->db->resultAll();
    }

    public function getAdminId($id)
    {
        $this->db->query('SELECT * FROM admins WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addNewAdmin($data)
    {
        $fullname = htmlspecialchars($data['fullname']);
        $slug = $this->slugify($fullname);
        $username = htmlspecialchars($data['username']);
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);
        $password2 = htmlspecialchars($data['password2']);
        $level = htmlspecialchars($data['level']);

        //validate password
        $uppercase =  preg_match('@[A-Z]@', $password);
        $lowercase =  preg_match('@[a-z]@', $password);
        $number =  preg_match('@[0-9]@', $password);

        if ($data_admin = $this->getAdminBy("username", $username)) {
            var_dump("udah ada username");
        }else{
            if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
                echo
                    '<script>
                            alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number.")
                    </script>';
            } else if ($password != $password2) {
                echo
                '<script>
                        alert("Your password is not same")
                </script>';
            }else {
                $query = "INSERT INTO admins (fullname, slug, username, email, password, level) VALUES (:fullname, :slug, :username, :email, :password, :level)";
                $this->db->query($query);
                $this->db->bind("fullname", $fullname);
                $this->db->bind("slug", $slug);
                $this->db->bind("username", $username);
                $this->db->bind("email", $email);
                $this->db->bind("password", password_hash($password, PASSWORD_DEFAULT));
                $this->db->bind("level", $level);
                $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }

    public function updateAdmin($data)
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

    public function deleteAdmin($slug) {
        $query = "DELETE FROM admins WHERE slug = :slug";
        $this->db->query($query);
        $this->db->bind('slug', $slug);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function logOut()
    {
        session_destroy();
        $_SESSION = [];
        unset($_SESSION);

        header("Location: " . baseurl . '/admin/index');
    }
}