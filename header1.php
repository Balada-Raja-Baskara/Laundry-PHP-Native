<?php 

session_start();

    if($_SESSION['status_login']!=true){

        header('location: login.php');

    }

?>

<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">

      <div class="container-fluid">

        <a class="navbar-brand" href="../home.php">LAUNDRY</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav">

            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="../laundry/home1.php">Home</a>

            </li>
            
            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="../laundry/member/tampil_member1.php">MEMBER</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="../laundry/transaksi/tampil_transaksi1.php">Transaksi</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="../laundry/detil_transaksi/tampil_detil_transaksi1.php">Detil Transaksi</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="../laundry/logout.php">Logout</a>

            </li>

          </ul>

        </div>

      </div>

    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
