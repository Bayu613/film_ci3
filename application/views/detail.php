<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayFilm</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .navbar {
            background-color: #a50021;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 300px;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.5em;
            font-weight: 700;
        }

        .search-bar {
            display: flex;
            gap: 5px;
        }

        .search-bar input {
            padding: 5px;
            font-size: 1em;
            border: none;
            border-radius: 3px;
        }

        .search-bar button {
            background-color: #d5002d;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #f30047;
        }

        .top-menu a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
            font-size: 0.9em;
        }

        .menu-bar {
            background-color: #ffcc00;
            padding: 10px 300px;
        }

        .menu-bar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 15px;
        }

        .menu-bar ul li {
            display: inline;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .sub-menu {
            background-color: #fff3b0;
            padding: 10px 300px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .sub-menu a {
            text-decoration: none;
            color: #a50021;
            font-size: 0.9em;
            font-weight: bold;
        }

        .sub-menu a:hover {
            text-decoration: underline;
        }

        .movie-detail-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .movie-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            text-transform: uppercase;


        }

        .movie-detail {
            display: flex;
            gap: 20px;
        }

        .poster img {
            width: 200px;
            border-radius: 5px;
        }

        .movie-info {
            flex: 1;
        }

        .movie-info p {
            margin: 5px 0;
            font-size: 0.95rem;
        }

        .movie-info .highlight {
            color: red;
            font-weight: bold;
        }

        .toggle-synopsis {
            display: block;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #d5002d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .toggle-synopsis:hover {
            background-color: #f30047;
        }

        .reactions {
            margin: 20px 0;
            display: flex;
            justify-content: space-around;
            font-size: 1.2rem;
        }

        .comments-section {
            margin-top: 20px;
        }

        .comments-section h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .comments-section textarea {
            width: 100%;
            height: 80px;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-options {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .login-options button {
            padding: 5px 10px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-options button:hover {
            background-color: #005bb5;
        }



        .video-player {
            width: 100%;
            height: auto;
            position: relative;
            background-color: #111111;
            border-bottom: 30px solid #a50021;
            border-top: 30px solid #a50021;
        }

        #video-player {
            width: 100%;
            height: 100%;
        }

        .player-controls {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        .player-controls button {
            background-color: transparent;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }

        .download-section {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            max-width: 1200px;
        }

        .download-button,
        .instructions-button {
            display: inline-block;
            background-color: #a50021;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .ad-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .video-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: none;
            cursor: pointer;

        }


        @media screen and (max-width: 1024px) {
    .navbar {
        padding: 10px 20px;
    }

    .menu-bar {
        padding: 10px 20px;
    }

    .menu-bar ul {
        display: block;
        text-align: center;
    }

    .menu-bar ul li {
        margin-bottom: 10px;
    }

    .sub-menu {
        padding: 10px 20px;
    }

    .movie-detail {
        flex-direction: column;
        align-items: center;
    }

    .poster img {
        width: 150px;
    }

    .search-bar {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .reactions {
        flex-direction: column;
        font-size: 1rem;
    }

    .player-controls {
        flex-direction: column;
    }
}

@media screen and (max-width: 768px) {
    .navbar {
        padding: 10px;
    }

    .search-bar {
        width: 100%;
    }

    .menu-bar {
        padding: 10px;
    }

    .menu-bar ul {
        flex-direction: column;
    }

    .sub-menu {
        padding: 10px;
    }

    .movie-detail {
        flex-direction: column;
    }

    .movie-title {
        font-size: 1.2rem;
    }

    .comments-section textarea {
        height: 60px;
    }

    .video-player {
        margin-top: 10px;
    }

    .download-section {
        width: 100%;
        padding: 10px;
    }
}

@media screen and (max-width: 480px) {
    .navbar {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .menu-bar {
        padding: 10px;
    }

    .movie-title {
        font-size: 1rem;
    }

    .search-bar {
        width: 100%;
    }

    .player-controls {
        flex-direction: column;
        gap: 10px;
    }

    .download-section {
        width: 100%;
        padding: 10px;
    }

    .poster img {
        width: 120px;
    }

    .movie-info p {
        font-size: 0.9rem;
    }
}
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <h1>BAYFLIX</h1>
        </div>
        <div class="search-bar">
            <input style="width: 400px;" type="text" placeholder="Cari film, artis, imdb">
            <button>Cari</button>
        </div>

    </header>
    <div class="menu-bar">
        <ul>
            <li><a href="<?= base_url('welcome') ?>">Home</a></li>
            <?php foreach ($kategori as $kate) { ?>
                <li>
                    <a href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>">
                        <?= $kate['nama_kategori'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>




    <div class="video-container">
        <div class="video-player">
            <center>

                <img style=" opacity: 0.5;" width="400px" height="540px" src="<?= base_url('upload/konten/' . $konten->foto) ?>">
                <a href="<?= $konten->link_nonton ?>">
    
                    <i
                        style="font-size: 60px;
                            color: white; position:relative;right:14rem;"
                        class="bi bi-play-circle-fill"></i>
                </a>
            </center>

        </div>
    </div>
    <div class="download-section">
        <div>

            <a href="" style="text-decoration: none;">

            </a>
        </div>
        <a href="<?= $konten->link_download ?>" class="download-button">Download Film Ini</a>
        <a href="https://tv.lk21official.pics/petunjuk-cara-download-film/" class="instructions-button">Petunjuk Cara Mendownload</a>
    </div>
    </div>
    <div class="movie-detail-container">
        <h1 class="movie-title"><?= $konten->judul ?> FILM SUBTITLE INDONESIA STREAMING / DOWNLOAD</h1>
        <div class="movie-detail">
            <div class="poster">
                <img src="<?= base_url('upload/konten/' . $konten->foto) ?>">
            </div>
            <div class="movie-info">
                <p><strong trong>Kualitas:</strong> WEBDL</p>

                <p><strong>Oleh:</strong> Bayfilm21</p>
                <p><strong>Diunggah:</strong> November 21, 2024 9:50 pm</p>
            </div>
        </div>
        <div class="reactions">
            <span>😊 42</span>
            <span>😍 5</span>
            <span>😂 8</span>
            <span>😲 4</span>
            <span>😢 7</span>
            <span>😡 4</span>
        </div>
        <div class="comments-section">
            <h2>7 Comments</h2>
            <textarea placeholder="Join the discussion..."></textarea>
            <div class="login-options">
                <span>Log in with:</span>
                <button>Disqus</button>
                <button>Facebook</button>
                <button>Google</button>
                <button>Apple</button>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>