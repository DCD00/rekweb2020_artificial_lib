<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Buku</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $book['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book['judul']; ?></h5>
                            <p class="card-text"><b>Penulis : </b><?= $book['pengarang']; ?></p>
                            <p class="card-text"><b>Penerbit : </b><?= $book['penerbit']; ?></p>
                            <p class="card-text"><b>Jumlah Halaman : </b><?= $book['jmlhal']; ?></p>
                            <p class="card-text"><b>Tahun Terbit : </b><?= $book['tahun']; ?></p>

                            <br><br>
                            <a href="/book">Kembali ke daftar buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>