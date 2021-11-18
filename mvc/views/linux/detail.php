<?php

use app\core\Asset;

$date = date('m/d/Y H:i', strtotime($data['linux'][0]['created_at']));
?>
<main id="main" class="detail">
<img src="<?=Asset::asset($data['network'][0]['thumbnail_img_url'])?>" alt="" srcset="">
    <h1>
        <?= $data['linux'][0]['title'] ?>
    </h1>
    <div class="date mb-5">
        <b>Public date: <?= $date ?></b>
    </div>
    <?= str_replace('data-src', 'src', $data['linux'][0]['content']) ?>
</main>
