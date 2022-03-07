<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
<?php 

include "../header.php";

?>
<div class='container'>
    <h3>Daftar Harga</h3>

    <table class="table table-hover table-striped">

        <thead>

            <tr>

                <th>NO</th>
                <th>ID PAKET</th>
                <th>JENIS</th>
                <th>HARGA</th>
                <th>AKSI</th>

            </tr>

        </thead>

        <tbody>

            <?php 

            include "../koneksi.php";

            $qry_paket=mysqli_query($conn,"select * from paket");

            $no=0;

            while($data_paket=mysqli_fetch_array($qry_paket)){

            $no++;?>

            <tr>              
                <td><?=$no?></td>
                <td><?=$data_paket['id_paket']?></td>
                <td><?=$data_paket['jenis']?></td> 
                <td><?=$data_paket['harga']?></td> 
                <td><a href="update_paket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="delete_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


            </tr>

            <?php 

            }

            ?>

        </tbody>

    </table>
    <a href="../paket/tambah_paket.php" class="btn btn-success">tambah paket</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </div>
<?php 

    include "../footer.php";

?>
</body>

</html>