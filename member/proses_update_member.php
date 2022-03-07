<?php

if($_POST){

    $id_member=$_POST['id_member'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telpon'];

    $JK=$_POST['JK'];

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='update_member.php?id_member=".$id_member."';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='update_member.php?id_member=".$id_member."';</script>";

    } elseif(empty($telp)){

        echo "<script>alert('telpon tidak boleh kosong');location.href='update_member.php?id_member=".$id_member."';</script>";

    } else {

        include "../koneksi.php";

        $update=mysqli_query($conn,"update member set nama='".$nama."', alamat='".$alamat."', tlp ='".$telp."', jenis_kelamin='".$JK."' where id_member = '".$id_member."'") or die(mysqli_error($conn));

        if($update){

            echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";

        } else {

            echo "<script>alert('Gagal update member');location.href='update_member.php?id_member=".$id_member."';</script>";

        }

        

       

    }

}

?>
