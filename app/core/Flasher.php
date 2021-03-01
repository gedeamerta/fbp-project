<?php 
class Flasher 
{
    public static function setFlash($icon, $title)
    {
        $_SESSION['flasher'] = [
            'icon' => $icon,
            'title' => $title,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flasher'])) {
            echo "
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: '".$_SESSION['flasher']['icon']."',
                        title: '".$_SESSION['flasher']['title']."',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            ";
            unset($_SESSION['flasher']);
                
        }
    }
}