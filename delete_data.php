<?php
    include "koneksi.php";
    $id = $_GET['idnomor'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE idnomor='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/dt_mahasiswa.php'>";
?>