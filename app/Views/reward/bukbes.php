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
            <img src="<?= base_url(); ?>/img/bukbes.jpg" width="30%" class="rounded-square img-thumbnail">
            <h1 class="display-4">Kamu Terlalu Banyak Bercanda</h1>
            <p class="lead">Sebagai Buku Terlaris 2020 versi Artificial Lib</p>
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
                <p>Di buku ilustrasi terbaru ini, Marchella FP mengangkat sisi gelap manusia yang mungkin selama ini selalu ditutupi. Kamu akan bertemu rasa marah, kecewa, sedih, egois, hingga sakit hati di dalam buku ini.

                    Buku ini adalah kumpulan catatan Awan tentang perasaan-perasaan negatifnya. Dalam rentang 10 tahun dalam alur cerita yang diciptakan Awan ini, kita membayangkan pada hari-hari kelabunya ia akan mengambil alat tulis dan catatan hariannya, lantas menumpahkannya pada catatan harian.

                    “Surat ini ditulis 10 tahun lamanya, tentang marah, sedih, kecewa, ragu, takut, dan semua rasa yang jarang ditampilkan,” kata Awan. Kerap kita dengar ujaran: kamu terlalu banyak bercanda, kepada orang yang terlihat jarang bersedih atau sering tertawa. Tak berarti mereka tak punya masalah. Mereka hanya menyimpannya, seperti Awan.

                    Ilustrasi di buku “Kamu Terlalu Banyak Bercanda” memang tidak terlalu berwarna-warni seperti di buku NKCTHI. Emosi-emosi manusia digambarkan dengan sederhana dan begitu mengena. Begitu pula kata-kata yang ditulis Marchella FP di setiap ilustrasinya. Petuah petuah yang disajikan dalam buku ini cukup panjang, sehingga butuh beberapa waktu untuk memahami pesan dari kata katanya. Setiap petuah disajikan dengan ilustrasi unik yang memiliki empat warna dasar (hitam, putih, biru tua dan orange) menurut psikologi warna yang digunakan tersebut mampu mengatasi rasa cemas, mengurangi rasa sakit dan memberi rasa nyaman.

                    Pada bagian akhir buku ini, diceritakan Awan menggali luka yang telah ia kubur untuk kemudian menghadapinya saja.</p>
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
                        <img src="<?= base_url(); ?>/img/bukbes5.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Cover</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/bukbes2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Isi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/bukbes3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Sampul</h3>
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