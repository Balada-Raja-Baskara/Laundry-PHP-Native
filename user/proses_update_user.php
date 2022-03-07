<?php

if($_POST){

    $id_user=$_POST['id_user'];

    $nama=$_POST['nama'];

    $username=$_POST['username'];

    $password=$_POST['password'];

    $role=$_POST['role'];

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";


    } elseif(empty($username)){

        echo "<script>alert('username tidak boleh kosong');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";

    } else {

        include "../koneksi.php";

        if(empty($password)){

            $update=mysqli_query($conn,"update user set nama='".$nama."',role='".$role."', username='".$username."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";

            } else {

                echo "<script>alert('Gagal update user');location.href='update_user.php?id_user=".$id_user."';</script>";

            }

        } else {

            $update=mysqli_query($conn,"update user set nama='".$nama."', role ='".$role."', username='".$username."', password='".md5($password)."' where id_user = '".$id_user."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";

            } else {

                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";

            }

        }

       

    }

}

?>
