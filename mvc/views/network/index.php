<!--    CCNA TUTORIAL-->
<?php

use app\core\Asset; ?>
<main id="main">
    <h3 class="mt-5 ml-5" style="margin-left: 1rem"><a href="#">Network Tutorials (Latest Tutorials)</a></h3>
    <div class="">
        <div class="">
            <?php $i = 1;
            foreach ($data['network'] as $network) : ?>
                <article class="item mr-5 border-ccc w-50 mt-5 mb-5">
                    <div class="item-heading p-2 m-2">
                        <a href="network/show/<?= $network['id'] ?>"><?= $network['title']; ?></a>
                    </div>
                    <div class="item-content mr-5 ml-5" style="overflow: hidden">
                        <p class="pr-5 pl-5"><?= $network['mini_text'] ?></p>
                    </div>
                    <div class="item-footer mr-5ml-5 d-flex justify-content-end">
                        <a href="network/show/<?= $network['id'] ?>" class="d-flex">
                            <p class="pt-2">VIEW</p>
                            <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                        </a>
                    </div>
                </article>

            <?php endforeach; ?>
        </div>
    </div>
    <h3 class="mt-5 ml-5 mb-5" style="margin-left: 1rem;text-align: center; margin-top: 2rem">
        <a href="#main">Back top</a>
    </h3>
    <?php if ($data['maxpage'] != 1) : ?>
        <div class="pagingation">
            <?php
            for ($i = 0; $i < 5; $i++) : ?>
                <?php
                if ($data['currentpage'] - 2 + $i > 0 && $data['currentpage'] - 2 + $i <= $data['maxpage']) :
                ?>
                    <a href="/network?page=<?= $data['currentpage'] - 2 + $i ?>" class="button 
                <?php
                    if ($data['currentpage'] - 2 + $i == $data['currentpage']) {
                        echo 'active';
                    }
                ?>">
                        <?= $data['currentpage'] - 2 + $i ?>
                    </a>
                <?php endif ?>
            <?php endfor ?>
        </div>
    <?php endif; ?>

</main>