<?php
$date = date('m/d/Y H:i', strtotime($data['network'][0]['created_by']));
?>
<main id="main" class="detail">
    <h1>
        <?= $data['network'][0]['title'] ?>
    </h1>
    <div class="date mb-5">
        <b>Updated on: <?= $date ?></b>
    </div>

    <?= str_replace('data-src', 'src', $data['network'][0]['content']) ?>
</main>
