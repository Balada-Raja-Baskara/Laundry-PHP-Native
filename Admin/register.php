<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <div class="global-container">
        <div class="card login-form p-3 col-12 col-sm-6 col-md-4">
            <div class="card-body">
                <h1 class="text-center pb-2"><img src="../Img/CleanHolic_SM.svg" alt="small-logo"></h1>
                <div class="card-text mt-3">
                    <form action="register_process.php" method="post">
                        <div class="mb-3">
                            <label for="InputName" class="form-label">Name : </label>
                            <input type="text" class="form-control" id="InputName" name="name_admin" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputUsername" class="form-label">Username : </label>
                            <input type="text" class="form-control" id="InputUsername" name="username_admin" required>
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Password : </label>
                            <input type="password" class="form-control" id="InputPassword" name="password_admin" required>
                            <div class="mb-3">
                            <input type="checkbox" id="pass_toggle" onclick="ShowOrHide()">
                            <script>
                            function ShowOrHide() {
                            var x = document.getElementById("InputPassword");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                            </script>
                            <label for="pass_toggle">Show Password</label>
                        </div>
                        </div>
                        <div class="mb-3"> 
                            <label for="AdminRole" class="form-label">Role : </label>
                            <select name="role_admin" class="form-control" id="AdminRole" required>
                            <option value="" disabled selected>Role : </option>
                            <option value="Admin">Admin</option>
                            <option value="Cashier">Cashier</option>
                            </select>
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