<?php 
//require_once ('db.php');
require_once ('pemesanan.php');
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Fischrestaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link rel="stylesheet" href="dashboard\css\quill.snow.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

  <!-- Custom styles for this template -->

  <link href="dashboard\css\dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Blutspender</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                    <a class="nav-link btn btn-dark px-3" href="/logout">Home</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('dashboard.index') }}">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="indexpesan.php">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Pesanan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
    
    

  
 
<!--layout end-->


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">pemesanan</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="create.php" class="btn btn-sm btn-outline-primary">Tambah</a>
        </div>
    </div>
</div>

<div class="my-3">
    <form action="" method="get">
        <label for="q" class="form-label">Cari</label>
        <input type="text" class="form-control" id="q" name="q" value="">
    </form>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nomor Pemesanan</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Nama Konsumen</th>
                <th scope="col">Nomor Penawaran</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">Alamat Pengiriman</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php  include 'db.php';
            require_once 'pemesanan.php';
            //$koneksi = mysqli_connect($host, $user, $password, $database);

            //check connection
           // if (mysqli_connect_errno($koneksi))
           // {
           //     echo "Failed to connect to MySQL:" . mysqli_connect_error();
           // }
            
                $no=1;
                $ambildata = mysqli_query($koneksi,"SELECT * FROM pemesanan");
                while($tampil = mysqli_fetch_array($ambildata)){

                echo "<tr>";
                echo '<td></td>';
                echo '<td>'.$tampil['id_pemesanan']. '</td>';
                echo '<td>'.$tampil['id_pegawai']. '</td>';
                echo '<td>'.$tampil['id_calon_konsumen']. '</td>';
                echo '<td>'.$tampil['id_penawaran']. '</td>';
                echo '<td>'.$tampil['tgl_pemesanan']. '</td>';
                echo '<td>'.$tampil['status_pemesanan']. '</td>';
                echo '<td>'.$tampil['alamat_pengiriman']. '</td>';
                echo '<td>'.$tampil['total_harga']. '</td>';
              '</tr>';
            $no++;
            }
            ?>
           

        </tbody>
    </table>
    </div>
</div>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard\js\dashboard.js"></script>
    