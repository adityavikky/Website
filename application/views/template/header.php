<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/regular.css" integrity="sha384-e7wK18mMVsIpE/BDLrCQ99c7gROAxr9czDzslePcAHgCLGCRidxq1mrNCLVF2oaj" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/brands.css" integrity="sha384-S5yUroXKhsCryF2hYGm7i8RQ/ThL96qmmWD+lF5AZTdOdsxChQktVW+cKP/s4eav" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!--  -->

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--  -->

    <!-- My CSS -->

    <style>

        .maps {
            width: 600px;
            height: 450px;
        }

        /* Size Medium / md */
        @media only screen and (max-width:768px) {
            .maps {
                width: 400px;
                height: 450px;
            }
        }
        
        .berita {
            height: 100vh;
        }
        
        @media only screen and (max-width:768px) {
            .berita {
                height: max-content;
            }
        }

        .warna-biru {
            color: #56627E;
        }

        .btn-dongker {
            background-color: #56627E;
            color: #EEEEEE;
        }
    </style>

    <title>Klinik Pratama Rahmat Medika</title>
  </head>
  <body id="body" style="font-family: 'Manrope';">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#body">
                <img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link font-weight-bold" href="#home" style="color: #56627E;">Home</a>
                    <a class="nav-link font-weight-bold" href="#news" style="color: #56627E;">Berita</a>
                    <a class="nav-link font-weight-bold" href="#jadwal-operasional" style="color: #56627E;">Jam Operasional</a>
                    <a class="nav-link font-weight-bold" href="#alamat" style="color: #56627E;">Alamat</a>
                    <a class="nav-link font-weight-bold" href="#visi-misi" style="color: #56627E;">Visi-Misi</a>
                    <a class="nav-link font-weight-bold" href="#jadwal-dokter" style="color: #56627E;">Jadwal Dokter</a>
                    <a class="nav-link font-weight-bold" href="#contact" style="color: #56627E;">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

<!-- 
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top: 10px;">
            <a class="navbar-brand ml-3 font-weight-bolder" href="#">
            <img src="#" alt="" height="100px" width="200px"></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#");?>">Visi Misi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#");?>">Jadwal Dokter</a>
                        <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <a class="nav-link text-dark" href="#");?>">Galeri</a>
                    <a class="nav-link text-dark" href="#">News</a>
                    <a class="nav-link text-dark" href="#">Contact Us</a>
                </div>
            </div>
        </nav> -->
