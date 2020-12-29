<?= $this->extend('home/index'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- fluid -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <a href=""><img src="<?= base_url(); ?>/img/tubes.png" width="30%" class="rounded-circle img-thumbnail"></a>
            <h1 class="display-4">Selamat Datang Di Perpustakaan Online Artificial Lib</h1>
            <p class="lead">Kami Menyediakan Berbagai Macam Buku Untuk Kalian Baca</p>
        </div>
    </div>

    <!-- Semua Buku -->
    <div class="container py-4" id="allbook">
        <h1 class="pb-3">Silahkan Pilih Buku Untuk Dibaca</h1>
        <div class="row">
            <?php foreach ($book as $b) : ?>
                <div class="col-md-12 mb-3">
                    <article class="blog-post mb-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="/img/<?= $b['sampul']; ?>" class="blog-img-left" alt="" width="200px" height="250px">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title"><?= $b['judul']; ?></h5>
                                <p class="card-text"><?= $b['tahun']; ?></p>
                                <p>Buku <?= $b['judul']; ?> ini ditulis oleh <?= $b['pengarang'] ?> dan diterbitkan oleh <?= $b['penerbit'] ?> pada tahun <?= $b['tahun']; ?> . </p>
                                <a id="set_dtl" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-slug="<?= $b['slug']; ?>" data-sampul="<?= $b['sampul']; ?>" data-judul="<?= $b['judul']; ?>" data-pengarang="<?= $b['pengarang']; ?>" data-penerbit="<?= $b['penerbit']; ?>" data-jmlhal="<?= $b['jmlhal']; ?>" data-tahun="<?= $b['tahun']; ?>">Detail</a>
                                <a id="baca" class="btn btn-info" href="/pages/readbk/<?= $b['slug']; ?>">Baca</a>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
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

</div>

<?= $this->endSection(); ?>