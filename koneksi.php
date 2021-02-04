<?php
        $koneksi =mysqli_connect("localhost", "root", "", "db_mhsiswa");

        if(mysqli_connect_error($koneksi))
        {
            echo "koneksi Gagal". mysqli_connect_error();
        }
?>