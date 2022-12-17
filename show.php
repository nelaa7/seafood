<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>{{ $title }}</title>

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
                            <a class="nav-link" aria-current="page" href="{{ route('locations.index') }}">
                                <span data-feather="map-pin" class="align-text-bottom"></span>
                                Lokasi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('stocks.index') }}">
                                <span data-feather="droplet" class="align-text-bottom"></span>
                                Stok Darah
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('blogs.index') }}">
                                <span data-feather="book-open" class="align-text-bottom"></span>
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('butuh-darahs.index') }}">
                                <span data-feather="alert-circle" class="align-text-bottom"></span>
                                Butuh Darah
                            </a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('pesanans.index') }}">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Pesanan
                            </a>
                        </li> 

                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session('failed'))
                <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                

            </main>
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

 
</body>

</html>
<!--layout end-->

@section('content')
<div class="row">
    <div class="col-lg-8">

        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm justify-content-between">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Detail Butuh Darah</h1>
            </div>
            <div>
                <a href="{{ route('butuh-darahs.index') }}" class="btn btn-outline-danger px-3">Kembali</a>
            </div>
        </div>


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="col mb-4">
                    <table class="table table-striped table-bordered table-sm">
                        <tr>
                            <td class="fw-bold">Subjek</td>
                            <td>{{ $butuh_darah->subject }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Golongan Darah</td>
                            <td><span class="badge text-bg-primary">{{ $butuh_darah->golongan_darah }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jumlah Darah</td>
                            <td><span class="badge text-bg-success">{{ $butuh_darah->jumlah_darah }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Berat Badan</td>
                            <td>{{ $butuh_darah->berat_badan }} KG</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Jenis Kelamin</td>
                            <td><span class="badge text-bg-primary">
                                    @if ($butuh_darah->gender == 'L')
                                    Laki-Laki
                                    @else
                                    Perempuan
                                    @endif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>{!! nl2br($butuh_darah->alamat) !!}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">No. Telepon</td>
                            <td>{{ $butuh_darah->no_telp }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Koleksi</td>
                            <td>{{ $butuh_darah->tanggal_koleksi }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal Dibuat</td>
                            <td>{{ $butuh_darah->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tanggal diedit</td>
                            <td>{{ $butuh_darah->updated_at }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold"></td>
                            <td>
                                <div class="d-block">
                                    <a href="{{ route('butuh-darahs.edit', $butuh_darah->id) }}"
                                        class="badge text-bg-info">Edit</a>
                                    <form action="{{ route('butuh-darahs.destroy', $butuh_darah->id) }}" method="post"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="badge text-bg-danger border-0">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection