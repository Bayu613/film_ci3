<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS MOVIE</title>
    <link rel="stylesheet" href="<?= base_url('assets/film/') ?>style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>Bayfilm
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="<?=base_url('welcome')?>" class="home-active">Home</a></li>
            <?php foreach ($kategori as $kate) { ?>
                <li>
                    <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>">
                        <?= $kate['nama_kategori'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </header>

    <!-- Home  -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <?php
            shuffle($carousel);
            foreach ($carousel as $cc) { ?>
                <div class="swiper-slide container">
                    <img src="<?= base_url('upload/carousel/') . $cc['foto'] ?>" alt="">
                    <div class="home-text">
                        <h1 style="width:800px;"><?= htmlspecialchars($cc['judul']) ?></h1>
                        <a href="" class="btn">Book Now</a>
                        <a href="" class="play">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Movies  -->
    <div class="movies" id="movies" style="margin-top:4rem;">
        <h2 class="headinggg"><?=$nama_kategori?></h2>
        <!-- Movies container  -->
        <div class="movies-container">
            <?php
            $itemsPerPage = 10;
            $totalItems = count($konten);
            $totalPages = ceil($totalItems / $itemsPerPage);
            $currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
            $offset = ($currentPage - 1) * $itemsPerPage;


            $paginatedKonten = array_slice($konten, $offset, $itemsPerPage);

            shuffle($paginatedKonten);

            foreach ($paginatedKonten as $kk) {
            ?>
                <div class="box">
                    <div class="box-img">
                        <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">

                            <img src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="<?= htmlspecialchars($kk['judul']) ?>">
                        </a>
                    </div>
                    <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">

                        <h3 style="color:white; margin-top:1rem;"><?= htmlspecialchars($kk['judul']) ?></h3>
                    </a>
                    <span>
                        <?= rand(85, 140) ?> min | <?= htmlspecialchars($kk['nama_kategori'], ENT_QUOTES, 'UTF-8') ?>
                    </span>

                </div>
            <?php } ?>

        </div>
        <?php if ($totalPages > 1) { ?>
            <div class="pagination" style="margin-top: 1rem;">


                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                    <a href="?page=<?= $i ?>#movies" class="<?= $i == $currentPage ? 'active' : '' ?>"><?= $i ?></a>
                <?php } ?>
            </div>
        <?php } ?>




        <!-- Newsletter /\ -->

        <!-- footer  -->
        <section class="footer">
            <a href="" class="logo">
                <i class="bx bxs-movie"></i>Bayfilm
            </a>
            <div class="social">
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
                <a href=""><i class='bx bxl-instagram'></i></a>
            </div>
        </section>

        <!-- Copyright  -->
        <div class="copyright">
            <p>&#169; Bayfilm All Right Reserved</p>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="<?= base_url('assets/film/') ?>main.js"></script>
</body>

</html>