<?php

class Flasher
{


    public static function setFlash($message, $action, $type)
    {

        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];

    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {

            $message = $_SESSION['flash']['message'];
            $action = $_SESSION['flash']['action'];
            $type = $_SESSION['flash']['type'];
    
            echo '<script>';
            echo 'Swal.fire({';
            echo '    text: "'. $action . '",';
            echo '    icon: "' . $type . '",';
            echo '    title: "' . $message . '",';
            echo '});';
            echo '</script>';
        
            unset($_SESSION['flash']);
            
        }
    }
}

?>