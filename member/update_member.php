<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "../koneksi.php";

    $qry_get_member=mysqli_query($conn,"select * from member where id_member= '".$_GET['id_member']."'");

    $dt_member=mysqli_fetch_array($qry_get_member);

    ?>

<div class='container'>
    <h3>Ubah Member</h3>

    <form action="proses_update_member.php" method="post">
    <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">

    nama :

    <input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">

    alamat :

    <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">

    jenis kelamin :

    <select name="JK" value="<?=$dt_member['jenis_kelamin']?>" class="form-control">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    telpon :

    <input type="text" name="telpon" value="<?=$dt_member['tlp']?>" class="form-control">
</br>
        <input type="submit" name="simpan" value="Update Member" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>

