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
    <style>
        .search-input {
            width: 100%;
            max-width: 300px;
            padding: 10px 15px;
            border-radius: 30px;
            border: 2px solid #ddd;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .search-input:focus {
            border-color: grey;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background-color: #f0f8ff;
        }

        .search-input::placeholder {
            font-size: 14px;
        }

        .search-input:focus::placeholder {
            color: grey;
        }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>BAYFLIX
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- menu  -->
        <ul class="navbar">
            <li><a href="<?= base_url('welcome') ?>" class="home-active">Home</a></li>
            <?php foreach ($kategori as $kate) { ?>
                <li>
                    <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>">
                        <?= $kate['nama_kategori'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <input type="text" id="searchInput" placeholder="Cari film, artis, imdb" class="search-input">
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
        <h2 class="headinggg">Film Terpopuler</h2>
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

                            <img style="width: 210px;" src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="<?= htmlspecialchars($kk['judul']) ?>">
                        </a>
                    </div>
                    <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">

                        <h3 class="searchable" style="color:white; margin-top:1rem;"><?= htmlspecialchars($kk['judul']) ?></h3>
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

        <!-- coming  -->
        <section class="coming" id="kdrama">
            <h2 class="heading">Kdrama</h2>
            <!-- coming contanier  -->
            <div class="coming-container swiper">
                <div class="swiper-wrapper">
                    <!-- box-1  -->
                    <?php

                    shuffle($konten);

                    foreach ($konten as $kk) { ?>
                        <?php if ($kk['id_kategori'] == '4') { ?>
                            <div class="swiper-slide box">
                                <div class="box-img">
                                    <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">

                                        <img src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="">
                                    </a>
                                </div>
                                <h3 class="searchable"><?= $kk['judul'] ?></h3>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <!-- box-2  -->


                </div>
            </div>
        </section>
        <section class="coming" id="action" style="position:relative;bottom:3rem;">
            <h2 class="heading">Action</h2>
            <!-- coming contanier  -->
            <div class="coming-container swiper">
                <div class="swiper-wrapper">
                    <!-- box-1  -->
                    <?php
                    shuffle($konten);

                    foreach ($konten as $kk) { ?>
                        <?php if ($kk['id_kategori'] == '6') { ?>
                            <div class="swiper-slide box">
                                <div class="box-img">
                                    <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">

                                        <img src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="">
                                    </a>
                                </div>
                                <h3><?= $kk['judul'] ?></h3>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <!-- box-2  -->


                </div>
            </div>
        </section>
        <section class="coming" id="horror" style="position:relative;bottom:4rem;">
            <h2 class="heading">Horror</h2>
            <!-- coming contanier  -->
            <div class="coming-container swiper">
                <div class="swiper-wrapper">
                    <!-- box-1  -->
                    <?php
                    shuffle($konten);
                    foreach ($konten as $kk) { ?>
                        <?php if ($kk['id_kategori'] == '8') { ?>
                            <div class="swiper-slide box">
                                <div class="box-img">
                                    <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">
                                        <img src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="">
                                    </a>
                                </div>
                                <h3><?= $kk['judul'] ?></h3>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <!-- box-2  -->


                </div>
            </div>
        </section>



        <div class="movies" id="all" style="margin-top:4rem;">
            <h2 class="headingg">Semua Film</h2>
            <!-- Movies container  -->
            <div class="moviess-container">
                <?php
                // Acak urutan array $konten
                shuffle($konten);

                // Loop untuk menampilkan konten
                foreach ($konten as $kk) {
                ?>
                    <div class="box">
                        <div class="box-img">
                            <a href="<?= base_url('welcome/artikel/') . $kk['slug'] ?>">
                                <img style="width: 200px;" src="<?= base_url('upload/konten/') . $kk['foto'] ?>" alt="<?= htmlspecialchars($kk['judul']) ?>">
                            </a>
                        </div>
                        <h3 class="searchable"><?= htmlspecialchars($kk['judul']) ?></h3>
                        <span >120 min | <?= htmlspecialchars($kk['nama_kategori']) ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>



        <!-- Newsletter /\ -->

        <!-- footer  -->
        <section class="footer">
            <a href="" class="logo">
                <i class="bx bxs-movie"></i>Bayfilm
            </a>
            
        </section>

        <!-- Copyright  -->
        <div class="copyright">
            <p>&#169; Bayfilm All Right Reserved</p>
        </div>

        <script>
            // Ambil elemen input pencarian dan elemen-elemen yang dapat dicari
            const searchInput = document.getElementById('searchInput');
            const searchableItems = document.querySelectorAll('.searchable');
            const moviesContainer = document.querySelector('.movies-container'); // Container film
            let noResultsMessage = document.createElement('div'); // Pesan jika tidak ada hasil
            noResultsMessage.textContent = 'Film tidak ditemukan.';
            noResultsMessage.style.display = 'none';
            noResultsMessage.style.color = 'white';
            noResultsMessage.style.textAlign = 'center';
            noResultsMessage.style.marginTop = '20px';
            moviesContainer.appendChild(noResultsMessage);

            // Event listener untuk pencarian
            searchInput.addEventListener('input', function() {
                const filter = searchInput.value.toLowerCase(); // Ubah teks input menjadi huruf kecil
                let hasResults = false; // Indikator untuk hasil pencarian

                searchableItems.forEach(item => {
                    const text = item.textContent.toLowerCase(); // Ambil teks elemen dan ubah menjadi huruf kecil
                    const parentBox = item.closest('.box'); // Cari elemen container
                    if (text.includes(filter)) {
                        parentBox.style.display = ''; // Tampilkan jika cocok
                        hasResults = true;
                    } else {
                        parentBox.style.display = 'none'; // Sembunyikan jika tidak cocok
                    }
                });

                // Tampilkan atau sembunyikan pesan "Film tidak ditemukan."
                if (!hasResults) {
                    noResultsMessage.style.display = 'block';
                } else {
                    noResultsMessage.style.display = 'none';
                }
            });
        </script>



        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src="<?= base_url('assets/film/') ?>main.js"></script>
</body>

</html>