<?= $this->extend('home/index'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>Membaca e-book</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-secondary">
                <div class="card-body">
                    <div style="border-bottom: 1px solid #000;">
                        <?= $book['pengarang']; ?>
                    </div>
                    <div>
                        <?= $book['tahun']; ?> <br>
                    </div>
                    <div>
                        <embed src="/buku/<?= $book['filebuku']; ?>" type="application/pdf" width="100%" height="600" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

</div>
<?= $this->endSection(); ?>