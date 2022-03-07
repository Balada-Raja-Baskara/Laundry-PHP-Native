<?php

include "../koneksi.php";

if($_POST){

    // var_dump($_POST);
    // die();

    $transaction_details_id=$_POST['id_transaction_details'];

    $transaction_id=$_POST['transactions_id'];

    $package_id=$_POST['packages_id'];

    $qty=$_POST['quantity'];
    
    $update=mysqli_query($conn, "UPDATE `detil_transaksi` SET `id_transaksi` = '".$transaction_id."', `id_paket` = '".$package_id."', `qty` = '".$qty."' WHERE `detil_transaksi`.`id_detil` = '".$transaction_details_id."'") or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated transaction details');location.href='tampil_detil_transaksi.php';</script>";
    }else{
        echo "<script>alert('Failed updating package');location.href='update_detil_transaksi.php'?id_detil=".$transaction_details_id."';</script>";
    }

                
    }
?>