<?= $this->extend('home/index'); ?>

<?= $this->section('content'); ?>


<section class="blog-posts py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="blog-post mb-3">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2>Cerita Kami</h2>
                            <p class="justify">artificial lib kepanjangan dari arftificial library. kami menyediakan layanan informasi mengenai buku elektronik dan pengguna dapat membaca sekaligus mendownload buku elektroniknya. kami memfokuskan e-book kami kepada e-book yang berbasis informatika. tim ini dibentuk atas dasar kemauan masing-masing untuk membuat perpustakaan yang berbasis informatika.</p>
                        </div>
                        <div class="col-sm-3">
                            <img class="img-center" src="<?= base_url(); ?>/img/tubes3.png" width="250" height="250">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h2>Perjalanan Kami</h2>
    <!-- Slidebar -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>/img/Artboard3.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/Artboard2.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section class="blog-posts py-4">
    <div class="container">
        <h2>Portofolio Kami</h2>
        <div class="row">
            <div class="col-md-12">
                <article class="blog-post mb-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="rounded-circle img-thumbnail" src="/img/drajat.jpg" width="250" height="250">
                        </div>
                        <div class="col-sm-9">
                            <h3>Drajat Cahya</h3>
                            <p class="justify">saya mahasiswa asal bandung yang berkuliah di universitas pasundan bandung. saya memiliki hobi berolahraga, mendengarkan musik, serta bermain game. dalam tim artificial lib ini saya sebagai ketua tim dan bertanggung jawab pada bagian back end dev.</p>
                        </div>
                    </div>
                </article>

                <article class="blog-post mb-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="rounded-circle img-thumbnail" src="/img/hasbi.jpeg" width="250" height="250">
                        </div>
                        <div class="col-sm-9">
                            <h3>Dicky Hasbi</h3>
                            <p class="justify">saya mahasiswa asal bandung yang berkuliah di universitas pasundan bandung. saya memiliki hobi menggambar, mendengarkan musik, serta bermain game. dalam tim artificial lib ini saya sebagai anggota tim dan bertanggung jawab pada bagian front end dev.</p>
                        </div>
                    </div>
                </article>
                <article class="blog-post mb-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="rounded-circle img-thumbnail" src="/img/herdy.jpeg" width="250" height="250">
                        </div>
                        <div class="col-sm-9">
                            <h3>Herdi Imam</h3>
                            <p class="justify">saya mahasiswa asal bandung yang berkuliah di universitas pasundan bandung. saya memiliki hobi ngoding, mendengarkan musik, serta bermain game. dalam tim artificial lib ini saya sebagai anggota tim dan bertanggung jawab pada bagian front end dev.</p>
                        </div>
                    </div>
                </article>
                <article class="blog-post mb-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="rounded-circle img-thumbnail" src="/img/aswin.jpeg" width="250" height="250">
                        </div>
                        <div class="col-sm-9">
                            <h3>Muhamad Aswin</h3>
                            <p class="justify">saya mahasiswa asal bandung yang berkuliah di universitas pasundan bandung. saya memiliki hobi jalan-jalan, mendengarkan musik, serta bermain game. dalam tim artificial lib ini saya sebagai anggota tim dan bertanggung jawab pada bagian front end dev.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>