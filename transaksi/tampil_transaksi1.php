<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php include "../header1.php" ?>

    <h3 class="text-center py-2">Transaction List</h3>

    <div class="container">
    <table class="table table-hover table-striped">

<thead>

    <tr>

        <th>NO</th>
        <th>MEMBER ID</th>
        <th>USER ID</th>
        <th>DATE</th>
        <th>DUE DATE</th>
        <th>PAYMENT DATE</th>
        <th>STATUS</th>
        <th>PAYMENT STATUS</th>
        <?php

        if($_SESSION['role'] == 'admin'){

        ?>
        <th>ACTION</th>
        <?php } ?>

    </tr>

</thead>

<tbody>

    <?php 

    include "../koneksi.php";

    $qry_transactions=mysqli_query($conn,"SELECT * FROM transaksi");

    $no=0;

    while($data_transactions=mysqli_fetch_array($qry_transactions)){

    $no++;?>

<tr>              
        
    <td><?=$no?></td>
    <td><?=$data_transactions['id_member']?></td> 
    <td><?=$data_transactions['id_user']?></td>
    <td><?=$data_transactions['tgl']?></td>
    <td><?=$data_transactions['batas_waktu']?></td> 
    <td><?=$data_transactions['tgl_bayar']?></td>
    <td><?=$data_transactions['status']?></td>
    <td><?=$data_transactions['dibayar']?></td> 
    <?php

    if($_SESSION['role'] == 'admin'){

    ?>
    <td>
        <a href="update_transaksi.php?id_transaksi=<?=$data_transactions['id_transaksi']?>" class="btn btn-success">update</a> 
        | <a href="delete_transaksi.php?id_transaksi=<?=$data_transactions['id_transaksi']?>" onclick="return confirm('Are you sure you want to delete this transactions?')" class="btn btn-danger">Delete</a>
        | <a target="_blank" class="btn btn-primary" href="../cetak.php?id_transaksi=<?php echo $data_transactions['id_transaksi']; ?>">Print</a>
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
    <a href="tambah_transaksi.php" class="btn btn-success">Add transactions</a>  
    </div>
    <?php } ?>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>