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
            <img src="<?= base_url(); ?>/img/bukbaik0.jpg" width="30%" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Hapalan Surat Delisa</h1>
            <p class="lead">Sebagai Buku Terbaik 2020 versi Artificial Lib</p>
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
                <p>Kisah ini menceritakan gadis cilik bernama Delisa. Ia merupakan anak bungsu di dalam keluarganya. Adapun kakak-kakak dari Delisa adalah Cut Fatimah, Cut Zahra dan juga Cut Aisyah. Keluarga Delisa berdomisili di Lhok Nga. Delisa dan saudara-saudaranya hanya tinggal bersama Ummi, sebab sang Abi bekerja sebagai mekanik kapal yang berbulan-bulan ikut di kapal yang berlayar.

                    Meski merindu, tetapi Delisa tetap menjalani hari-hari mereka tanpa sang Abi. Suatu hari Delisa mendapat tugas dari sekolahnya. Tugas tersebut adalah menghafal bacaan salat. Delisa giat sekali menghapas bacaan-bacaan tersebut. Terlebih ummi menjanjikan ia hadiah jika Delisa berhasil menghafal bacaan tersebut. Hadiah yang membuat Delisa semangat adalah kalung emas yang dijual di toko Ko Acan. Ko Acan sendiri merupakan sahabat Abi Delisa.

                    Tanggal 26 Desember tahun 2004, Delisa dan semua teman seisi kelasnya dijadwalkan mempraktekkan hafalan solat yang telah mereka hapalkan beberapa waktu. Saat tiba giliran Delisa, sembari mengucapkan bacaan solat, tiba-tiba bumi bergetar hebat. Semua tampak gonjang ganjing. Dan seketika, air laut mulai naik ke daratan dengan ganasnya. Ia bagai tangan raksasa yang merengkuh segala yang ia jumpai. Bencana tersebut adalah gempa hebat yang disusul tsunami. Kurang lebih 15.000 orang yang meninggal akibat bencana ini. Termasuk di dalamnya Ummi dan kakak-kakan Delisa.

                    Delisa sendiri selamat. Ia tersangkut di semak belukar. Siku kanan bocah tersebut patah dan kakinya bagian kanannya terjepit di bebatuan. Setelah 6 hari terjebak di tempat terebur, Delisa kemudian ditemukan oleh seorang prajurit sekaligus relawan bernama Smith. Delisa yang dilihatnya sangat bercahaya kemudian membawa prajurit tersebut untuk masuk Islam.

                    Karena suasana yang kacau balau, Abi yang telah mengetahui bencana tersebut tak bisa menemukan Delisa. Ia menghabiskan beberapa waktu sebelum akhirnya bertemu gadis mungilnya. Saat bertemu Abinya, Delisa bercerita layaknya anak-anak yang tak mengerti apa-apa. Bencana tak menghapus keceriannya. Termasuk saat kaki kanan Delisa harus diamputasi, semuanya tak berhasil membuat ia murung. Ia bersama Abi menjalani hidupnya. menata dari awal. Meski jasad Ummi dan ketiga kakaknya belum ditemukan, tapi Delisa dan Abi harus hidup normal, begitu pikirnya.

                    Suatu waktu Delisa melihat ada sebuah pantulan cahaya yang mengganggu penglihatannya. Karena penasaran, Delisa pun mendekat. Dan tak disangka, cahaya tersebut merupakan pantulan kalung dengan huruf D. Dan kalung tersebut berada dalam pegangan seseorang. Ummi Delisa sendiri.</p>
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
                        <img src="<?= base_url(); ?>/img/bukbaik2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Penulis</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/bukbaik1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Film</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/bukbaik.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Buku</h3>
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