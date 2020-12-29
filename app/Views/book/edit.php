<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Book</h2>
            <form action="/book/update/<?= $book['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $book['slug']; ?>">
                <input type="hidden" name="filebukuLama" value="<?= $book['filebuku']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $book['sampul']; ?>">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $book['judul'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('pengarang')) ? 'is-invalid' : ''; ?>" id="pengarang" name="pengarang" value="<?= (old('pengarang')) ? old('pengarang') : $book['pengarang'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('pengarang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $book['penerbit'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jmlhal" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('jmlhal')) ? 'is-invalid' : ''; ?>" id="jmlhal" name="jmlhal" value="<?= (old('jmlhal')) ? old('jmlhal') : $book['jmlhal'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('jmlhal'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('tahun')) ? 'is-invalid' : ''; ?>" id="tahun" name="tahun" value="<?= (old('tahun')) ? old('tahun') : $book['tahun'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tahun'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filebuku" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file <?= ($validation->hasError('filebuku')) ? 'is-invalid' : ''; ?>" id="filebuku" name="filebuku">
                        <div class="invalid-feedback">
                            <?= $validation->getError('filebuku'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $book['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <label class="custom-file-label" for="Sampul"><?= $book['sampul']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="/book" class="btn btn-success">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>