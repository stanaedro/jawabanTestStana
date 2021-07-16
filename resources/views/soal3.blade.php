<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Soal Test - Stana Edro Swargara</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">Stana Edro Swargara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal1') }}">Soal1</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal2') }}">Soal2</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal3') }}">Soal3</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal4') }}">Soal4</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal5') }}">Soal5</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>SOAL 3</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-left">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <h3>Nama Film Dengan Artis Bayaran Terendah</h3>
                <small>Query : SELECT * FROM artis INNER JOIN film ON artis.id_artis=film.artis WHERE artis.bayaran =(SELECT min(bayaran) FROM artis);</small>
                <img src="{{asset('/assets/img/soal3no1.png')}}">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID FIlm</th>
                            <th scope="col">Nama Film</th>
                            <th scope="col">Nama Artis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($soal1 as $s1)
                        <tr>
                            <td>{{ $i; }}</td>
                            <td>{{ $s1->id_film }}</td>
                            <td>{{ $s1->nm_film }}</td>
                            <td>{{ $s1->nm_artis }}</td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>

                <h3>Nama Film Yang Dibintangi Artis Huruf Depannya "J"</h3>
                <small>SELECT * FROM film INNER JOIN artis ON film.artis=artis.id_artis WHERE artis.nm_artis LIKE 'j%';</small>
                <img src="{{asset('/assets/img/soal3no2.png')}}">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID FIlm</th>
                            <th scope="col">Nama Film</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($soal2 as $s2)
                        <tr>
                            <td>{{ $i; }}</td>
                            <td>{{ $s2->id_film }}</td>
                            <td>{{ $s2->nm_film }}</td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>

                <h3>Jumlah Film Dari Masing - Masing Produser</h3>
                <small>SELECT produser.nm_produser, Count(film.produser) AS Jumlah FROM produser LEFT JOIN film on produser.id_produser = film.produser GROUP BY produser.id_produser</small>
                <img src="{{asset('/assets/img/soal3no3.png')}}">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produser</th>
                            <th scope="col">Jumlah Film</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($soal3 as $s3)
                        <tr>
                            <td>{{ $i; }}</td>
                            <td>{{ $s3->nm_produser }}</td>
                            <td>{{ $s3->jumlah }}</td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>

                <h3>Nama Artis Yang Bermain FIlm Bergenre Horror</h3>
                <small>SELECT artis.nm_artis FROM artis JOIN film ON artis.id_artis = film.artis JOIN genre ON film.genre = genre.id_genre WHERE genre.nm_genre = "HORROR"</small>
                <img src="{{asset('/assets/img/soal3no4.png')}}">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Artis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($soal4 as $s4)
                        <tr>
                            <td>{{ $i; }}</td>
                            <td>{{ $s4->nm_artis }}</td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('/js/scripts.js')}}"></script>
</body>

</html>