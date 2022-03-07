<?php

include "../koneksi.php";

if($_POST){

    $id_transactions=$_POST['id_transactions'];

    $id_packages=$_POST['id_packages'];
    
    $qty=$_POST['qty'];

    $qry_get_packages=mysqli_query($conn,"select paket.harga from detil_transaksi join paket on paket.id_paket=detil_transaksi.id_paket");

    $qry_get=mysqli_fetch_array($qry_get_packages);

    $subtotal=$qry_get['harga'] * $qty;

        $insert=mysqli_query($conn,"insert into detil_transaksi (id_transaksi,id_paket,subtotal,qty) value ('".$id_transactions."','".$id_packages."','".$subtotal."', '".$qty."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Successfully added transaction details');location.href='tampil_detil_transaksi.php';</script>";

        } else {

            echo "<script>alert('Failed adding transaction details');location.href='tampil_detil_transaksi.php';</script>";
        }
    }

?>