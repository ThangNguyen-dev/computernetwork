<?php
$date = date('m/d/Y H:i', strtotime($data['linux'][0]['created_by']));
?>
<main id="main" class="detail">
    <h1>
        <?= $data['linux'][0]['title'] ?>
    </h1>
    <div class="date mb-5">
        <b>Public date: <?= $date ?></b>
    </div>
    <?= str_replace('data-src', 'src', $data['linux'][0]['content']) ?>
</main>
