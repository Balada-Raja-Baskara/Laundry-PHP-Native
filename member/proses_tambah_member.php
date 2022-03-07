<?php

if($_POST){

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $JK=$_POST['JK'];

    $telp=$_POST['telpon'];

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($telp)){

        echo "<script>alert('telpon tidak boleh kosong');location.href='tambah_member.php';</script>";

    } else {

        include "../koneksi.php";

        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$JK."','".$telp."')");

        if($insert){

            echo "<script>alert('Sukses menambahkan member');location.href='tambah_member.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";

        }

    }

}

?>