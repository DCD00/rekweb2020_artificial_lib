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
            <img src="<?= base_url(); ?>/img/perbaik.jpg" width="30%" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Erlangga</h1>
            <p class="lead">Sebagai Penerbit Terbaik 2020 versi Artificial Lib</p>
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
                <p>Erlangga Group adalah penerbit di Indonesia yang didirikan pada 30 April 1952. Erlangga Group pada mulanya hanya menerbitkan buku-buku pelajaran saja. Namun kini, di usia yang lebih dari setengah abad, Erlangga telah menduduki posisi mapan di ranah penerbitan Indonesia. Erlangga semakin dikenal karena tingginya kualitas dan kayanya ragam buku yang diterbitkan.

                    Tertempa oleh berpuluh tahun jatuh dan bangunnya sektor pendidikan di Indonesia, dalam skala nasional Erlangga adalah penerbit buku pelajaran yang terbaik. Di luar itu, sejak sepuluh tahun yang lalu Erlangga Group mulai melakukan pengembangan usaha dengan menerbitkan judul-judul buah karya penulis yang dikenal di ranah nasional maupun internasional, baik untuk buku anak maupun buku populer. Dengan bangga Erlangga sampaikan, Erlangga Group adalah rumah bagi buku pelajaran terbaik, penulis-penulis yang ternama, dan juga karakter kartun kesayangan anak.

                    Saat ini, produk Erlangga adalah paduan harmonis dari buku pelajaran, buku anak, fiksi, non fiksi, dan juga majalah. Kala menciptakan sebuah produk, Erlangga selalu mengutamakan nilai pendidikan. Penting bagi Erlangga produk yang dihasilkan dapat memberikan nilai-nilai edukasi bagi pembacanya. Untuk itu, Erlangga pun tak ragu untuk mengusung semboyan “Belajar Lebih, Lebih Belajar”.

                    Apa itu “Belajar Lebih, Lebih Belajar”? Belajar Lebih, Erlangga yakin bahwa siapa pun bisa sukses. Caranya dengan belajar dan latihan terus menerus, sehingga seseorang menjadi bisa karena biasa. Lebih Belajar tentunya proses belajar hanya bisa sukses apabila menggunakan buku yang berkualitas terbaik. Buku-buku Erlangga disusun berdasarkan riset terus-menerus, evaluasi tiada henti oleh para editor terbaik di Indonesia, dibantu para konsultan ahli dari berbagai bidang, dalam dan luar negeri. Bukan itu saja. Buku Erlangga dipasarkan oleh para tim pemasar yang profesional, mengetahui produk dengan sangat baik dan memastikan para guru tahu cara memakai buku Erlangga dengan program pelatihan yang disesuaikan dengan kebutuhan.

                    Untuk menghasilkan karya terbaik, lingkup penerbitan Erlangga bagi ke dalam lima kategori utama buku pelajaran, buku untuk perguruan tinggi, buku anak, buku populer (fiksi dan non fiksi), dan buku referensi. Tugas menerbitkan buku-buku tersebut jatuh ke tangan Penerbit Erlangga dan kelima imprintnya Erlangga for Kids, Esensi, Esis, ESPS, Emir, dan Phiẞeta.</p>
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
                        <img src="<?= base_url(); ?>/img/perbaik2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Fokus UN</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/perbaik2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Bupena</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/perbaik2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>SBMPTN</h3>
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