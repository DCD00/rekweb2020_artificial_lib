<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body class="bg-light">
    <!-- Header -->
    <?= $this->include('home/header'); ?>

    <!-- Content -->
    <hr>
    <br>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <?= $this->include('home/footer'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#set_dtl', function() {
                var slug = $(this).data('slug');
                var sampul = $(this).data('sampul');
                var judul = $(this).data('judul');
                var pengarang = $(this).data('pengarang');
                var penerbit = $(this).data('penerbit');
                var jmlhal = $(this).data('jmlhal');
                var tahun = $(this).data('tahun');

                $('.modal-title #slug').text(slug);
                $('.modal-body #sampul').attr('src', '/img/' + sampul);
                $('.modal-body #judul').text(judul);
                $('.modal-body #pengarang').text(pengarang);
                $('.modal-body #penerbit').text(penerbit);
                $('.modal-body #jmlhal').text(jmlhal);
                $('.modal-body #tahun').text(tahun);
            });
        });
    </script>
</body>

</html>