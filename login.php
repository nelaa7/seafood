<?php 
session_start();
require 'function.php';

if(isset($_POST["login"])){

    $email = $_POST["email_calon_konsumen"];
    $password = $_POST["password"];

    
    // $ambil = $koneksi->query("SELECT * FROM calon_konsumen WHERE email_calon_konsumen = '$email'
    // AND password = '$password'");

    $ambil = $koneksi->query("CALL konsumen('$email','$password')");

    $akuncocok = $ambil->num_rows;
    if($akuncocok==1)
    {
        $akun = $ambil->fetch_assoc();
        $_SESSION["calon_konsumen"] = $akun;
            echo "<script>alert('Login Berhasil, Selamat Datang');</script>";
            echo "<script>location='dashboard.php';</script>";
    } else {
            echo "<script>alert('Login Gagal, Password atau Email salah');</script>";
    }



    // $result = mysqli_query($koneksi, "SELECT * FROM calon_konsumen WHERE email_calon_konsumen = '$email'");

    // if(mysqli_num_rows($result)===1){
    //     $result2 = mysqli_fetch_assoc($result);
    //     if($result2['password']==$password){
    //         echo "<script>
    //           document.location.href = 'dashboard.php';
    //           alert('Login Berhasil, Selamat Datang!');
    //         </script>";
    //     }else{
    //         echo "<script>
    //             alert('Login Gagal, Password atau Email salah');
    //         </script>";
    //     }

    // }else{
    //     echo "<script>
    //             alert('Login Gagal');
    //         </script>";
    // }
   
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | Seafood</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-danger">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">

                                        <form action="" method="POST">
                                        <div class="form-group mb-3">
                                        <h7>Email Addres</h7>
                                        <input type="email" name="email_calon_konsumen" id="email_calon_konsumen" class="form-control mt-2" autofocus required>
                                        </div>

                                        <div class="form-group mb-3">
                                        <h7>Password</h7>
                                        <input type="password" name="password" id="password" class="form-control mt-2" autofocus required>
                                        </div>

                                        <div class="form-group form-button">
                                            <input type="submit" name="login" id="login" class="btn btn-primary" value="Login"/>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Don't have account? register!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
