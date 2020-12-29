<?= $this->extend('home/index'); ?>

<?= $this->section('content'); ?>

<?php

function get_CURL($url)
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);

    curl_close($curl);

    return json_decode($result, true);
}

$result = get_CURL('https://newsapi.org/v2/top-headlines?apiKey=7fcf1baed40149009782a91160c418d9&country=id');

$articleName = $result['articles'][0]['source']['name'];
$authorName = $result['articles'][0]['author'];
$titleName = $result['articles'][0]['title'];
$desc = $result['articles'][0]['description'];
$urlArticle = $result['articles'][0]['url'];
$image = $result['articles'][0]['urlToImage'];
$publishAt = $result['articles'][0]['publishedAt'];
$contentArticle = $result['articles'][0]['content'];

// var_dump($articleName);

$articleName2 = $result['articles'][1]['source']['name'];
$authorName2 = $result['articles'][1]['author'];
$titleName2 = $result['articles'][1]['title'];
$desc2 = $result['articles'][1]['description'];
$urlArticle2 = $result['articles'][1]['url'];
$image2 = $result['articles'][1]['urlToImage'];
$publishAt2 = $result['articles'][1]['publishedAt'];
$contentArticle2 = $result['articles'][1]['content'];

?>

<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $image; ?>" class="card-img" height="250">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $titleName; ?></h5>
                            <h6><?= $authorName; ?></h6>
                            <p class="card-text"><?= $desc; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $publishAt; ?></small></p>
                            <a class="btn btn-info text-white" href="<?= $urlArticle; ?>">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $image2; ?>" class="card-img" height="250">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $titleName2; ?></h5>
                            <h6><?= $authorName2; ?></h6>
                            <p class="card-text"><?= $desc2; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $publishAt2; ?></small></p>
                            <a class="btn btn-info text-white" href="<?= $urlArticle2; ?>">Baca lebih lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
</div>

<?= $this->endSection(); ?>