<head>
    <link rel="stylesheet" href="<?= base_url('assets/oi/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/oi/'); ?>dist/css/hover-min.css">
    <link rel="stylesheet" href="<?= base_url('assets/oi/'); ?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/oi/'); ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/oi/'); ?>wow/css/animate.css">
    <script src="http://localhost/portalberita/assets/jquery/jquery-1.12.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">


    <style>
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #222;
            /* Dark background */
            padding: 10px 20px;
        }

        .navbar {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-item a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: flex;
            align-items: center;
        }

        .nav-item.active a {
            background-color: #007bff;
            /* Blue background for the active item */
            border-radius: 4px;
        }

        .nav-item a:hover {
            background-color: #444;
            /* Slightly lighter background on hover */
            border-radius: 4px;
        }

        .search-icon a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;

        }

        .navbarr {
            background-color: #2780e3;
            /* Warna ungu */
            padding: 15px 0;
        }

        .wahyu {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ffcc00;
            /* Warna kuning saat hover */
        }

        .logo {
            font-family: "Comfortaa", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            letter-spacing: 3px;
            color: white;
        }
    </style>
</head>
<nav class="navbarr">
    <div class="wahyu">
        <a href="<?= base_url('auth/login') ?>">
            <span class="logo" style="font-size: 2.3em;">
                <?php
                $judul = $konfig->judul_website;
                $lastFour = substr($judul, -4);
                $firstPart = substr($judul, 0, -4);
                echo $firstPart . '<span style="color: purple ; font-weight:900;">' . $lastFour . '</span>';
                ?>
            </span>
        </a>
        <ul class="nav-links">
            <?php foreach ($kategori as $kate) { ?>
                <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" style="font-size: 15px;" class="nav-item nav-link">
                    <?= $kate['nama_kategori'] ?>
                </a>
            <?php } ?>
            <a href="<?= base_url('welcome/galeri/') ?>" style="font-size: 15px;" class="nav-item nav-link">
                Galeri
            </a>

        </ul>
       
    </div>
</nav>
<div class="container-fluid wrapper">


    <div class="row header-wrapper">

        <div class="container" style="padding-bottom: 4rem; padding-top:5rem;">
            <div class="header">
                <h3 class="site-title">
                    Berita Karanganyar

                </h3>
                <h4 class="site-description">Sumber informasi terpercaya</h4>
            </div>
            <nav class="navbar navbar-default navbar-bottom" style="display: flex;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->


                    <div class="navbar-container" style="position:relative;right:8rem;">
                        <ul class="navbar">
                            <li class="nav-item active">
                                <a href="<?= base_url('welcome/index') ?>">
                                    <i class="glyphicon glyphicon-home"></i>
                                </a>
                            </li>
                            <?php foreach ($kategori as $kate) { ?>
                                <li class="nav-item">
                                    <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>" style="font-size: 15px;" class="nav-item nav-link">
                                        <?= $kate['nama_kategori'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a href="<?= base_url('welcome/galeri/') ?>" style="font-size: 15px;" class="nav-item nav-link">
                                    Galeri
                                </a>
                            </li>
                        </ul>

                    </div>

                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>