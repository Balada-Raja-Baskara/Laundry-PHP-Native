<!DOCTYPE html>

<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <h3 class="text-center py-2">User List</h3>

    <div class="container">
    <table class="table table-hover table-striped">

<thead>

    <tr>

        <th>NO</th>
        <th>USER NAMES</th>
        <th>USERNAME</th>
        <th>ROLE</th>
        <th>ACTION</th>

    </tr>

</thead>

<tbody>

    <?php 

    include "../koneksi.php";

    $qry_user=mysqli_query($conn,"SELECT * FROM user_admin");

    $no=0;

    while($data_user=mysqli_fetch_array($qry_user)){

    $no++;?>

<tr>              
        
    <td><?=$no?></td>
    <td><?=$data_user['name']?></td> 
    <td><?=$data_user['username']?></td>
    <td><?=$data_user['role']?></td>
    <td>
        <a href="change_member.php?id_user=<?=$data_user['id_user_admin']?>" class="btn btn-success">Modify</a> 
        | <a href="delete_member.php?id_user=<?=$data_user['id_user_admin']?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger">Delete</a>
    </td>

</tr>

<?php
    }
?>

</tbody>

</table>

    </div>

    <div class="container">
    <a href="register.php" class="btn btn-success">Add User</a>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>