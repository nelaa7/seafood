<?php 
session_start();
require 'function.php';

if(isset($_POST["registrasi"])){
    if (register($_POST)>0) {
      echo "<script>
              alert('Registrasi berhasil, Silahkan melakukan login');
              document.location.href = 'login.php';
          </script>";
    }else{
    //   echo mysqli_error($koneksi);
        echo "<script> 
        alert('Registrasi Gagal, silahkan registrasi ulang !');
        </script>";
    }
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
        <title>Register | Seafood</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-warning">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registrasi</h3></div>
                                    <div class="card-body">

                                    <form action="" method="post">

                                        <div class="form-group mb-3">
                                        <h7>Nama Konsumen</h7>
                                        <input type="text" name="nama_calon_konsumen" id="nama_calon_konsumen" class="form-control mt-2" autofocus required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="">Asal Negara</label>
                                            <select name="id_negara" class="form-control mt-2">
                                            <option value="">-pilih-</option>
                                            <?php
                                            $neg = mysqli_query($koneksi,"select * from negara");
                                            while($data = mysqli_fetch_assoc($neg)){
                                            echo'<option value="'.$data['id_negara'].'">'.$data['nama_negara'].'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                        <h7>Email Konsumen</h7>
                                        <input type="email" name="email_calon_konsumen" id="email_calon_konsumen" class="form-control mt-2" autofocus required>
                                        </div>

                                        <div class="form-group mb-3">
                                        <h7>Password</h7>
                                        <input type="password" name="password" id="password" class="form-control mt-2" autofocus required>
                                        </div>

                                        <div class="form-group mb-3">
                                        <h7>Confirm Password</h7>
                                        <input type="password" name="password2" id="password2" class="form-control mt-2" autofocus required>
                                        </div>
                                        
                                        <div class="form-group form-button">
                                                <input type="submit" name="registrasi" id="registrasi" class="btn btn-primary" value="Register"/>
                                        </div>
                                        
                                    </form>
                                    
                                    </div>                                          
                                            <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have account? Go to login</a></div>
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
