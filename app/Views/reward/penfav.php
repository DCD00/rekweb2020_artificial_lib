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
            <img src="<?= base_url(); ?>/img/penbaik.jpg" width="30%" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Kahlil Gibran</h1>
            <p class="lead">Sebagai Penulis Terfavorit 2020 versi Artificial Lib</p>
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
                <p>Sebelum tahun 1918, Gibran sudah siap meluncurkan karya pertamanya dalam bahasa Inggris, "The Madman", "His Parables and Poems". Persahabatan yang erat antara Mary tergambar dalam "The Madman". Setelah "The Madman", buku Gibran yang berbahasa Inggris adalah "Twenty Drawing", 1919; "The Forerunne", 1920; dan "Sang Nabi" pada tahun 1923, karya-karya itu adalah suatu cara agar dirinya memahami dunia sebagai orang dewasa dan sebagai seorang siswa sekolah di Lebanon, ditulis dalam bahasa Arab, tetapi tidak dipublikasikan dan kemudian dikembangkan lagi untuk ditulis ulang dalam bahasa Inggris pada tahun 1918–1922.

                    Sebelum terbitnya "Sang Nabi", hubungan dekat antara Mary dan Gibran mulai tidak jelas. Mary dilamar Florance Minis, seorang pengusaha kaya dari Georgia. Ia menawarkan pada Mary sebuah kehidupan mewah dan mendesaknya agar melepaskan tanggung jawab pendidikannya. Walau hubungan Mary dan Gibran pada mulanya diwarnai dengan berbagai pertimbangan dan diskusi mengenai kemungkinan pernikahan mereka, tetapi pada dasarnya prinsip-prinsip Mary selama ini banyak yang berbeda dengan Gibran. Ketidaksabaran mereka dalam membina hubungan dekat dan penolakan mereka terhadap ikatan perkawinan dengan jelas telah merasuk ke dalam hubungan tersebut. Akhirnya Mary menerima Florance Minis.

                    Pada tahun 1920 Gibran mendirikan sebuah asosiasi penulis Arab yang dinamakan Arrabithah Al Alamia (Ikatan Penulis). Tujuan ikatan ini merombak kesusastraan Arab yang stagnan. Seiring dengan naiknya reputasi Gibran, ia memiliki banyak pengagum. Salah satunya adalah Barbara Young. Ia mengenal Gibran setelah membaca "Sang Nabi". Barbara Young sendiri merupakan pemilik sebuah toko buku yang sebelumnya menjadi guru bahasa Inggris. Selama 8 tahun tinggal di New York, Barbara Young ikut aktif dalam kegiatan studio Gibran.

                    Gibran menyelesaikan "Sand and Foam" tahun 1926, dan "Jesus the Son of Man" pada tahun 1928. Ia juga membacakan naskah drama tulisannya, "Lazarus" pada tanggal 6 Januari 1929. Setelah itu Gibran menyelesaikan "The Earth Gods" pada tahun 1931. Karyanya yang lain "The Wanderer", yang selama ini ada di tangan Mary, diterbitkan tanpa nama pada tahun 1932, setelah kematiannya. Juga tulisannya yang lain "The Garden of the Propeth".</p>
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
                        <img src="<?= base_url(); ?>/img/penbaik1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Buku</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/penbaik2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Puisi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url(); ?>/img/penbaik3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h3>Gibran</h3>
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