<?php
    $conn = mysqli_connect("localhost","root","");

   /* if ($conn) {
        echo "Koneksi berhasil";
    } else {
        echo "koneksi gagal;";
    }*/
    $db = mysqli_select_db($conn,"import");

       /* if ($db) {
            echo "koneksi db berhasil";
        }
        else {
            echo "koneksi db gagal";
        }*/
    
?>