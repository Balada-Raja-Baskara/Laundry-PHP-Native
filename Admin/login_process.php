<?php 

    if($_POST){

        $username=$_POST['username_user'];

        $password=$_POST['password_user'];

            include "../koneksi.php";

            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".md5($password)."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);

                session_start();

                $_SESSION['id_user']=$dt_login['id_user'];

                $_SESSION['nama']=$dt_login['nama'];

                $_SESSION['role']=$dt_login['role'];

                $_SESSION['status_login']=true;

                if($dt_login['role']=="admin"){
                    header("location: home.php");
                }elseif($dt_login['role']=="kasir"){
                    header("location: home1.php");
                }else{
                    header("location: login.php");
                }              

                header("location: ../home.php");

            } else {

                echo "<script>alert('Wrong Username or Password, please try again');location.href='login.php';</script>";

            }

        

    }

?>