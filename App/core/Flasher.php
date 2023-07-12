<?php

class Flasher
{


    public static function setFlash($pesan, $aksi, $tipe)
    {

        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];

    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {

            $pesan = $_SESSION['flash']['pesan'];
            $aksi = $_SESSION['flash']['aksi'];
            $tipe = $_SESSION['flash']['tipe'];
    
            echo '<script>';
            echo 'Swal.fire({';
            echo '    text: "'. $aksi . '",';
            echo '    icon: "' . $tipe . '",';
            echo '    title: "' . $pesan . '",';
            echo '});';
            echo '</script>';
        
            unset($_SESSION['flash']);
        }
    }
}

?>