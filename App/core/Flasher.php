<?php

class Flasher
{

    public static function setFlash($message, $type)
    {

        $_SESSION['flash'] = [
            'message' => $message,
            'type' => $type
        ];

    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
         
            echo '<script>';
            echo 'Swal.fire({';
            echo '    icon: "'.$_SESSION['flash']['type'].'",';
            echo '    title: "'.$_SESSION['flash']['message'].'",';
            echo '});';
            echo '</script>';
        
            unset($_SESSION['flash']);
        }
    }
}

?>