
<head>
    
</head>

<footer style="background-color: #343a40; color: #f8f9fa; padding: 40px 0; margin-top: 50px;">
    <div class="container">
        <div class="row">
            <!-- Nama -->
            <div class="col-sm-4">
                <h2 style="color: #ffffff; margin-bottom: 20px;"><?= $konfig->judul_website ?></h2>
                <p><?= $konfig->profil_website ?></p>
            </div>
            <!-- Alamat -->
            <div class="col-sm-4">
                <h4 style="color: #ffffff; margin-bottom: 20px;">Alamat</h4>
                <p><?= $konfig->alamat ?></p>
                <h4 style="color: #ffffff; margin-bottom: 20px;">Kontak</h4>
                <p>+<?= $konfig->no_wa ?></p>
            </div>
            <!-- Kategori -->
            <div class="col-sm-4">
                <h4 style="color: #ffffff; margin-bottom: 20px;">Kategori</h4>
                <?php foreach ($kategori as $kate) { ?>
                    <a class="text-white mb-2" href="<?= base_url('welcome/kategori/' . $kate['id_kategori']) ?>"><i class="fa fa-angle-right mr-2"></i><?= $kate['nama_kategori'] ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div style="background-color: #212529; padding: 10px 0; text-align: center; margin-top: 75px;">
        <p style="margin: 0;">&copy; 2024 BayuArdi. All Rights Reserved.</p>
    </div>
</footer>