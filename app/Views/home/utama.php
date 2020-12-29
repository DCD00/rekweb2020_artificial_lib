<?= $this->extend('home/index'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Slidebar -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>/img/arb3.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/arb1.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/arb2.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/arb4.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>/img/arb5.png" class="d-block w-100" alt="">
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

    <!-- search book -->
    <!-- <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Cari Buku</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="cari">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <!-- card title -->
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-left">
                <h1>Penghargaan</h1>
            </div>
        </div>

        <div class="row">
            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/bukbes"><img src="img/iconverif.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Buku Terlaris</p>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/bukbaik"><img src="img/iconpiala.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Buku Terbaik</p>
                    </div>
                </div>
            </div>

            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/penbaik"><img src="img/iconpodium.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Penulis Terinspiratif</p>
                    </div>
                </div>
            </div>

            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/penfav"><img src="img/iconmedali.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Penulis Terpopuler</p>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/perbaik"><img src="img/iconpuncak.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Penerbit Terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="" style="width: 8rem;">
                    <a href="/pages/ytfav"><img src="img/iconapi.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p class="card-text">Youtube Teredukatif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card sedang trending -->
    <div class="row mb-4 pt-4">
        <div class="col text-left">
            <h1>Sedang Trending</h1>
        </div>
    </div>

    <div class="row">
        <?php
        $num = 1;
        foreach ($book as $b) { ?>
            <?php
            if ($b['slug'] == "programming-kotlin") {
                break;
            }
            if ($num % 2 == 0) { ?>

                <div class="col m3 s12">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/<?= $b['sampul']; ?>" class="card-img-top" alt="" height="400">
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['judul']; ?></h5>
                            <p class="card-text"><?= $b['tahun']; ?></p>
                            <a id="set_dtl" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-slug="<?= $b['slug']; ?>" data-sampul="<?= $b['sampul']; ?>" data-judul="<?= $b['judul']; ?>" data-pengarang="<?= $b['pengarang']; ?>" data-penerbit="<?= $b['penerbit']; ?>" data-jmlhal="<?= $b['jmlhal']; ?>" data-tahun="<?= $b['tahun']; ?>">Detail</a>
                            <a id="baca" class="btn btn-info" href="home/read/<?= $b['slug']; ?>">Baca</a>
                        </div>
                    </div>
                </div>
        <?php }

            $num++;
        } ?>
    </div>

    <!-- card rekomendasi untukmu -->
    <div class="row mb-4 pt-4">
        <div class="col text-left">
            <h1>Rekomendasi Untukmu</h1>
        </div>
    </div>

    <div class="row">

        <?php
        $num = 1;
        foreach ($book as $b) { ?>
            <?php
            if ($num < 4) { ?>

                <div class="col m3 s12">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/<?= $b['sampul']; ?>" class="card-img-top" alt="" height="400">
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['judul']; ?></h5>
                            <p class="card-text"><?= $b['tahun']; ?></p>
                            <a id="set_dtl" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-slug="<?= $b['slug']; ?>" data-sampul="<?= $b['sampul']; ?>" data-judul="<?= $b['judul']; ?>" data-pengarang="<?= $b['pengarang']; ?>" data-penerbit="<?= $b['penerbit']; ?>" data-jmlhal="<?= $b['jmlhal']; ?>" data-tahun="<?= $b['tahun']; ?>">Detail</a>
                            <a id="baca" class="btn btn-info" href="home/read/<?= $b['slug']; ?>">Baca</a>
                        </div>
                    </div>
                </div>
        <?php }
            $num++;
        } ?>
    </div>

    <!-- card all books -->
    <div class="row mb-4 pt-4">
        <div class="col text-center">
            <h3><a class="nav-item nav-link btn btn-info" href="/pages/allbook">Semua buku</a></h3>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book <span id="slug"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" id="sampul" class="img-fluid">
                        </div>

                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h3 id="judul"></h3>
                                </li>
                                <li class="list-group-item">Pengarang : <span id="pengarang"><span>
                                </li>
                                <li class="list-group-item">Penerbit : <span id="penerbit"></span>
                                </li>
                                <li class="list-group-item">Jumlah Halaman : <span id="jmlhal"></span>
                                </li>
                                <li class="list-group-item">Tahun Terbit : <span id="tahun"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>