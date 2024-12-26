<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Card</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: linear-gradient( 94.3deg,  rgba(26,33,64,1) 10.9%, rgba(81,84,115,1) 87.1% );
        }
        .card-img {
            width: 300px;
            aspect-ratio: 1/1;
            overflow: hidden;
            position: relative;
        }

        .card-img:hover img {
            transform: scale(1.05);
        }

        .card-img .caption {
            opacity: 0;
            position: absolute;
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.279);
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-family: system-ui;
            font-weight: bold;
            color: white;
            transition: all 600ms ease-in-out;
        }

        .card-img:hover .caption {
            opacity: 1;
        }

        img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            transition: all 600ms ease-in-out;
        }

        .galery {
            display: grid;
            grid-template-columns: auto auto auto;
        }


        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 kolom dengan lebar yang sama */
            gap: 20px;
            /* Jarak antar item */
            padding: 20px;
        }

        .gallery-item {
            background-color: #f5f5f5; /* Abu-abu terang */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            /* Efek zoom saat di-hover */
        }

        .card-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .caption {
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
        }

        /* Responsif: jika layar lebih kecil dari 768px, tampilkan 2 item per baris */
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Responsif: jika layar lebih kecil dari 576px, tampilkan 1 item per baris */
        @media (max-width: 576px) {
            .gallery-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div>
        <center>
            <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">GALERI</h1>
        </center>
        <div class="gallery-container">
            <?php foreach ($galeri as $aa) { ?>
                <div class="gallery-item">
                    <div class="card-img">
                        <div class="caption">
                            <p><?= $aa['judul'] ?></p>
                        </div>
                        <img src="<?= base_url('upload/galeri/' . $aa['foto']) ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>