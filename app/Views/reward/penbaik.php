<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- style -->
    <style>
        section {
            min-height: 420px;
        }
    </style>

    <title>Penghargaan</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class=navbar-brand href=" <?= base_url('/'); ?>">
                <img src="<?= base_url(); ?>/img/tubes.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Artificial Lib
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <ul class="navbar-nav mr-auto">
                    <li>
                        <a class="nav-item nav-link active" href="/">Beranda</a>
                    </li>
                </ul>

                <a class="nav-item nav-link text-light" href="/user">Akun</a>


                <?php if (logged_in()) : ?>
                    <a class="nav-item nav-link btn btn-danger" href="/logout">Keluar</a>
                <?php else : ?>
                    <a class="nav-item nav-link btn btn-primary" href="/login">Masuk</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <hr>
    <br>
    <!-- fluid -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="<?= base_url(); ?>/img/penmud.jpg" width="30%" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Latisa Shafa Naraswari</h1>
            <p class="lead">Sebagai Penulis Muda Terinspiratif 2020 versi Artificial Lib</p>
        </div>
    </div>

    <section id="reward" class="reward">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Portofolio</h1>
                </div>
            </div>
            <div class="row">
                <p>Setiap orang pasti memiliki karakter yang berbeda-beda dalam hidupnya. Ada seseorang yang cenderung pasif, namun ada pula yang bersikap kreatif. Ya, tentunya orang-orang yang kreatif ini dapat mengubah sesuatu yang biasa menjadi luar biasa.

                    Salah satu sosok kreatif tersebut bernama Latisa Shafa Naraswari. Gadis berusia 15 tahun tersebut mampu membuat puisi dan prosa tentang curhatan kehidupannya. Uniknya puisi dan prosa buatannya tersebut dibuatnya menggunakan bahasa Inggris.

                    Kecerdasan yang dimiliki Latisa memang tidak perlu diragukan lagi. Selain pandai membuat puisi dan prosa, dara kelahiran 23 Maret 2003 ini juga memiliki prestasi di bidang akademik. Pada usainya yang masih berusia 15 tahun, terbukti Latisa sudah duduk di bangku kuliah semester satu di Unisadhuguna International College.</p>
                <p>Latisa atau biasa dipanggil Tisa, mengaku bahwa memiliki ketertarikan untuk menulis berbagai macam kisah kehidupan tentang dirinya. Ketertarikannya dalam menulis membuatnya menciptakan sebuah buku berjudul Drifting Away yang berisi karya seni tingkat tinggi.

                    Tentunya banyak orang yang penasaran mengapa sebuah buku ditulis dengan aneka puisi dan prosa? Tisa menjelaskan ia tidak ingin namanya diketahui, sehingga ia memilih untuk menulis sebuah buku dengan puisi dan prosa di dalamnya.

                    “Saya dari dulu memang suka menulis. Saya ingin menyampaikan perasaan hati, namun tidak ingin diketahui namanya. Jadi saya menggunakan puisi dan prosa. Kan puisi dan prosa tidak harus menuliskan nama,” tutur Tisa, saat di jumpai Okezone di kawasan Kuningan, Jakarta Selatan, Selasa (4/12/2018).

                    Tisa juga mengaku latar belakang terciptanya buku berjudul Drifting Away ini diinspirasi dari kisah percintaanya dengan sang kekasih yang harus menelan pil pahit. Kala itu hubungan Tisa harus kandas yang membuatnya sangat galau.

                    “Saya waktu itu diputusin sama pacar. Sempat galau dan down banget. Kisah inilah yang dituangkan ke dalam tulisan. Selain itu ada juga berbagai masalah tentang keluarga, masalah bullying dan aneka masalah yang terjadi dalam kehidupan sehari-hari,” lanjutnya.

                    Kepiawaian Tisa menulis kisahnya dalam bentuk puisi dan prosa membuatnya mendapat penghargaan dari Museum Rekor Indonesia (MURI) sebagai penulis buku termuda di usia 15 tahun.</p>
            </div>
        </div>
    </section>

    <section id="Preview" class="Preview bg-white pb-4">
        <div class="container">
            <div class="row mb-4 pt-4">
                <div class="col text-center">
                    <h2></h2>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/penmud2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Buku</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/penmud1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Prestasi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/penmud3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Latisha</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row mb-4">
                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/buku4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Cover</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/buku5.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Cover</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/buku6.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Cover</h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        </div>
    </section>

    <!-- Footer -->
    <?= $this->include('home/footer'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>