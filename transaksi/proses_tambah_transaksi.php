<?php

if($_POST){

    $nama_member=$_POST['nama'];

    $user_name=$_POST['user_name'];
    
    $due_date=$_POST['due_date'];
    
    include "../koneksi.php";

        $insert=mysqli_query($conn,"insert into transaksi (id_member,id_user,batas_waktu) value ('".$nama_member."','".$user_name."','".$due_date."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added transaksi');location.href='tampil_transaksi.php';</script>";

        } else {

            echo "<script>alert('Failed adding transaksi');location.href='tampil_transaksi.php';</script>";
        }
    }
