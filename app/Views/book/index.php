<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">
            <h1 class="h3 mb-4 text-gray-800">Daftar Buku</h1>
        </div>
        <div class="col-lg text-center">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword judul/tahun.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg text-right">
            <a href="/book/create" class="btn btn-secondary mb-4">Tambah Book</a>
        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php $i = 1 + (2 * ($currentPage - 1)); ?>
                    <?php foreach ($book as $b) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $b['sampul']; ?>" alt="" class="sampul" width="110" height="125"></td>
                            <td><?= $b['judul']; ?></td>
                            <td><?= $b['tahun']; ?></td>
                            <td>
                                <a href="book/<?= $b['slug']; ?>" class="btn btn-success">Detail</a>
                                <a href="book/edit/<?= $b['slug']; ?>" class="btn btn-warning">Ubah</a>
                                <form action="/book/<?= $b['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('book', 'book_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>