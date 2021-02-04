<?php
    include "koneksi.php";
    $id = $_GET['idnomor'];
    $ambildata = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE idnomor='$id'");
    $data=mysqli_fetch_array($ambildata);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compltible"content="ie=edge">
        <title> Edit Data Mahasiswa</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script>src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card">
        <div class="card=header bg-primary text-white">
                Edit Data Mahasiswa
                </div>
                <div class="card-card">
                <form action=""method="POST" class="form-item">

                <div class="form-group">
                        <label for="npm">NPM</label>
                      <input type="varchar(8)" name="npm" value ="<?php echo $data ['npm']?> "class="form-control col-md-9" placeholder="Masukkan NPM">
                     </div>

                     <div class="form-group">
                        <label for="nama">Nama</label>
                      <input type="varchar(100)" name="nama" value ="<?php echo $data ['nama']?> " class="form-control col-md-9" placeholder="Masukkan Nama">
                     </div>

                     <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="varchar(50)" name="tempat_lahir" value ="<?php echo $data ['tempat_lahir']?> "  class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                     </div>

                     <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" value ="<?php echo $data ['tanggal_lahir']?> " class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                     </div>

                     <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                      <input type="enum('L','P')"name="jenis_kelamin" value ="<?php echo $data ['jenis_kelamin']?> "  class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin">
                     </div>

                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                      <input type="text" name="alamat" value ="<?php echo $data ['alamat']?> " class="form-control col-md-9" placeholder="Masukkan Alamat">
                     </div>

                     <div class="form-group">
                        <label for="kode_pos">Kodepos</label>
                      <input type="varchar(5)" name="kode_pos" value ="<?php echo $data ['kode_pos']?> " class="form-control col-md-9" placeholder="Masukkan Kodepos">
                     </div>

                     <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                     <button type="reset" class="btn btn-danger">BATAL</button>
        </form>
                </div>
                </div>
                </div>
                </body>
                </html>


                <?php
        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm      =$_POST['npm'];
            $nama      =$_POST['nama'];
            $tempat_lahir      =$_POST['tempat_lahir'];
            $tanggal_lahir      =$_POST['tanggal_lahir'];
            $jenis_kelamin      =$_POST['jenis_kelamin'];
            $alamat      =$_POST['alamat'];
            $kode_pos      =$_POST['kode_pos'];
            
            mysqli_query($koneksi, "UPDATE mahasiswa 
            SET npm='$npm', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kode_pos='$kode_pos'
           WHERE idnomor='$id'")or die (mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Diubah...</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/dt_mahasiswa.php'>";
         }
            
?>