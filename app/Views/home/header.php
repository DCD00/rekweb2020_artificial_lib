<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand">
            <img src="<?= base_url(); ?>/img/tubes.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Artificial Liv
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="nav-item nav-link active" href="/">Beranda</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="/pages/allbook">Buku</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="/pages/berita">Berita</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="/pages/about">About</a>
                </li>
                <li>
                    <a class="nav-item nav-link" href="#contact">Kontak</a>
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