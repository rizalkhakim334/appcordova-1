<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $prodi=$_POST['prodi'];
 $fakultas=$_POST['fakultas'];
 $angkatan=$_POST['angkatan'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi' ,`angkatan`='$fakultas' ,`angkatan`='$angkatan' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
