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
    <div class="container">
    <div class="global-container">
        <div class="card login-form p-3 col-12 col-sm-6 col-md-4">
            <div class="card-body">
                <h1 class="text-center pb-2"><img src="../Img/laundry1.svg" alt="small-logo"></h1>
                <div class="card-text mt-3">
                    <form action="proses_update_transaksi.php" method="post">
                    <?php 

                    $qry_get=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
                    
                    $dt_get=mysqli_fetch_array($qry_get);
    
                    // var_dump($_POST);
                    // die();
                    
                    ?>
                    <input type="hidden" name="id_transaksi" value= "<?=$dt_get['id_transaksi']?>">
                    <div class="mb-3">
                            <label for="InputMemberName" class="form-label">Update Member Name : </label>
                            <select class="form-control" id="InputMemberName" name="member_name" placeholder="Update Member Name">
                            <option value="<?=$dt_get['id_member']?>" selected>Member Name : </option>
                            <?php
                                 $qry_get_member=mysqli_query($conn,"select * from member");
                    
                                 while($dt_get_member=mysqli_fetch_array($qry_get_member)){
                                    echo '<option value="'.$dt_get_member['id_member'].'">'.$dt_get_member['nama'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputUserName" class="form-label">Update User Name : </label>
                            <select class="form-control" id="InputUserName" name="user_name" placeholder="Update User Name">
                            <option value="<?=$dt_get['id_user']?>" selected>User Name : </option>
                            <?php
                                 $qry_get_user=mysqli_query($conn,"SELECT * FROM `user` WHERE `role` = 'kasir'");
                    
                                 while($dt_get_user=mysqli_fetch_array($qry_get_user)){
                                    echo '<option value="'.$dt_get_user['id_user'].'">'.$dt_get_user['nama'].'</option>';
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputDueDate" class="form-label">Due Date : </label>
                            <input type="date" class="form-control" id="InputDueDate" name="due_date" placeholder="Fix Due Date" value="<?=$dt_get['batas_waktu']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputPaymentDate" class="form-label">Payment Date : </label>
                            <input type="date" class="form-control" id="InputPaymentDate" name="payment_date" placeholder="Input Payment Date" value="<?=$dt_get['tgl_bayar']?>">
                        </div>
                        <div class="mb-3">
                            <label for="InputStatus" class="form-label"> Status : </label>
                            <select class="form-control" id="InputStatus" name="transactions_status" placeholder="Update Status" required>
                            <option value="<?=$dt_get['status']?>" selected> Status : </option>
                            <option value="baru">baru</option>
                            <option value="proses">proses</option>
                            <option value="diambil">selesai</option>
                            <option value="diambil">diambil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="InputPaymentStatus" class="form-label">Payment Status : </label>
                            <select class="form-control" id="InputPaymentStatus" name="transactions_payment_status" placeholder="Update Payment Status" required>
                            <option value="<?=$dt_get['dibayar']?>" selected>Payment Status : </option>
                            <option value="dibayar">dibayar</option>
                            <option value="belum_dibayar">belum_dibayar</option>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-danger d-block col-12 pt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>