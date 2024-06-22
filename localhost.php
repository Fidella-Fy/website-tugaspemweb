<?php
    $koneksi = mysqli_connect("localhost","root","","db_bank");

    if (mysql_connect_error()) {
        echo "Koneksi database gagal".mysqli_connect();
    }
?>