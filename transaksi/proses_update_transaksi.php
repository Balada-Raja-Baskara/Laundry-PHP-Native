<?php

include "../koneksi.php";

if($_POST){

// var_dump($_POST);
//  die();

    $transaction_id=$_POST['id_transaksi'];

    $member_name=$_POST['member_name'];

    $user_name=$_POST['user_name'];
    
    $due_date=$_POST['due_date'];

    $payment_date=$_POST['payment_date'];

    $transaction_status=$_POST['transactions_status'];

    $payment_status=$_POST['transactions_payment_status'];

    $update=mysqli_query($conn, "UPDATE `transaksi` SET `id_member`='".$member_name."', `id_user`='".$user_name."', `batas_waktu`='".$due_date."', `tgl_bayar`='".$payment_date."', `status`='".$transaction_status."', `dibayar`='".$payment_status."' WHERE `transaksi`.`id_transaksi`='".$transaction_id."'") 
    or die(mysqli_error($conn));

    if($update){
         echo "<script>alert('Success updated transactions');location.href='tampil_transaksi.php';</script>";
    }else{
        echo "<script>alert('Failed updating transactions');location.href='tampil_transaksi.php'?id_transactions=".$transaction_id."';</script>";
    }

                
    }
?>