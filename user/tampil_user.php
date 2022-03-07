<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

<div class='container'>
    <h3>Tampil USER</h3>

    <table class="table table-hover table-striped">

        <thead>

            <tr>

                <th>NO</th>
                <th>ID USER</th>
                <th>NAMA </th>
                <th>USERNAME</th>
                <th>ROLE</th>
                <th>AKSI</th>

            </tr>

        </thead>

        <tbody>

            <?php 

            include "../koneksi.php";

            $qry_user=mysqli_query($conn,"select * from user");

            $no=0;

            while($data_user=mysqli_fetch_array($qry_user)){

            $no++;?>

            <tr>              
                <td><?=$no?></td>
                <td><?=$data_user['id_user']?></td>
                <td><?=$data_user['nama']?></td> 
                <td><?=$data_user['username']?></td> 
                <td><?=$data_user['role']?></td>
                <td><a href="update_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Ubah</a> | <a href="delete_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


            </tr>

            <?php 

            }

            ?>

        </tbody>

    </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </div>

</body>

</html>