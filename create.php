
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
<!--
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
   
    
    -->
  
 
<!--layout end-->


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">pemesanan</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="create.php" class="btn btn-sm btn-outline-primary">Tambah</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-7">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Tambah Data Butuh Darah</h1>
            </div>
            <div>
                <a href="{{ route('butuh-darahs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('butuh-darahs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="subject" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}">
                    @error('subject')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="berat_badan" class="form-label">Berat Badan (KG)</label>
                    <input type="number" class="form-control" id="berat_badan" name="berat_badan"
                        value="{{ old('berat_badan') }}">
                    @error('berat_badan')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="golongan_darah" class="form-label">Golongan Darah</label>
                    <select class="form-select" id="golongan_darah" name="golongan_darah">
                        <option value="A" @if(old('golongan_darah')=='A' ) selected @endif>A</option>
                        <option value="B" @if(old('golongan_darah')=='B' ) selected @endif>B</option>
                        <option value="O" @if(old('golongan_darah')=='O' ) selected @endif>O</option>
                        <option value="AB" @if(old('golongan_darah')=='AB' ) selected @endif>AB</option>
                    </select>
                    @error('golongan_darah')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_darah" class="form-label">Jumlah Darah</label>
                    <input type="number" class="form-control" id="jumlah_darah" name="jumlah_darah"
                        value="{{ old('jumlah_darah') }}">
                    @error('jumlah_darah')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                    @error('no_telp')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_koleksi" class="form-label">Tanggal Koleksi</label>
                    <input type="date" class="form-control" id="tanggal_koleksi" name="tanggal_koleksi"
                        value="{{ old('tanggal_koleksi') }}">
                    @error('tanggal_koleksi')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="L" @selected(old('gender')=='L' )>Laki-Laki</option>
                        <option value="P" @selected(old('gender')=='P' )>Perempuan</option>
                    </select>
                    @error('gender')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat" cols="30"
                        rows="10">{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <small class="text-danger mt-2 d-block">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="mt-4 btn px-3 btn-primary py-2 d-block">Tambah</button>
            </form>

        </div>
    </div>
</div>


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
    