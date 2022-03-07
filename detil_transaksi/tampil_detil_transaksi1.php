<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php include "../header.php"?>

    <h3 class="text-center py-2">Transaction Detail List</h3>

    <div class="container">
    <table class="table table-hover table-striped">

<thead>

    <tr>

        <th>NO</th>
        <th>TRANSACTIONS ID</th>
        <th>PACKAGES ID</th>
        <th>QUANTITY</th>
        <th>SUBTOTAL</th>
        <?php 
        if($_SESSION['role']=='admin'){
        ?>
        <th>ACTION</th>
        <?php } ?>

    </tr>

</thead>

<tbody>

    <?php 

    include "../koneksi.php";

    $qry_transaction_details=mysqli_query($conn,"SELECT * FROM detil_transaksi");

    $no=0;

    while($data_transaction_details=mysqli_fetch_array($qry_transaction_details)){

    $no++;?>

<tr>              
        
    <td><?=$no?></td>
    <td><?=$data_transaction_details['id_transaksi']?></td> 
    <td><?=$data_transaction_details['id_paket']?></td>
    <td><?=$data_transaction_details['qty']?></td>
    <td><?=$data_transaction_details['subtotal']?></td>
    <?php 
    if($_SESSION['role']=='admin'){
    ?>
    <td>
        <a href="update_detil_transaksi.php?id_detil=<?=$data_transaction_details['id_detil']?>" class="btn btn-success">update</a> 
        
    </td>
    <?php } ?>

</tr>

<?php
    }
?>

</tbody>

</table>
    </div>
    <?php
        if($_SESSION['role']=='admin'){
    ?>
    <div class="container">
    <a href="tambah_detil_transaksi.php" class="btn btn-success">Add transaction details</a>  
    </div>
    <?php } ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>