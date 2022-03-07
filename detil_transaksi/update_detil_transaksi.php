<?php
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../Member/style/style_member.css" rel="stylesheet">
</head>
<body>
    <div class="global-container">
        <div class="card login-form p-3 col-12 col-sm-6 col-md-4">
            <div class="card-body">
                <h1 class="text-center pb-2"><img src="../Img/laundry1.svg" alt="small-logo"></h1>
                <div class="card-text mt-3">
                    <form action="proses_update_detil_transaksi.php" method="post">
                    <?php 

                    $qry_get=mysqli_query($conn,"select * from detil_transaksi where id_detil = '".$_GET['id_detil']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);
    
                    // var_dump($_POST);
                    // die();
                    
                    ?>
                    <input type="hidden" name="id_transaction_details" value= "<?=$dt_get['id_detil']?>">
                    <div class="mb-3">
                            <label for="InputTransactionsID" class="form-label">Update Transactions ID : </label>
                            <select class="form-control" id="InputTransactionsID" name="transactions_id" placeholder="Update Transactions ID">
                            <option value="<?=$dt_get['id_transaksi']?>" selected>Transactions ID : </option>
                            <?php
                                 $qry_get_transactions=mysqli_query($conn,"select * from transaksi inner join member on transaksi.id_member=member.id_member");
                    
                                 while($dt_get_transactions=mysqli_fetch_array($qry_get_transactions)){
                                    echo '<option value="'.$dt_get_transactions['id_transaksi'].'">'.$dt_get_transactions['nama'].' = '.$dt_get_transactions['tgl'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPackagesID" class="form-label">Update Packages ID : </label>
                            <select class="form-control" id="InputTransactionID" name="packages_id" placeholder="Update Packages ID">
                            <option value="<?=$dt_get['id_paket']?>" selected>Packages ID : </option>
                            <?php
                                 $qry_get_packages=mysqli_query($conn,"select * from paket");
                    
                                 while($dt_get_packages=mysqli_fetch_array($qry_get_packages)){
                                    echo '<option value="'.$dt_get_packages['id_paket'].'">'.$dt_get_packages['jenis'].'='.$dt_get_packages['harga'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputQty" class="form-label">Quantity : </label>
                            <input type="number" class="form-control" id="InputQty" name="quantity" placeholder="Update Quantity" value="<?=$dt_get['qty']?>">
                        </div>
                            <button type="submit" class="btn btn-danger d-block col-12 pt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>