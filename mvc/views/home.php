<!--        NETWORK-->
<main id="main">
    <h3 class=""><a href="#">Network Administrator</a></h3>
    <div class="d-flex justify-content-space mt-3">
        <?php

        use app\core\Asset;
        for ($i = 0; $i < 2; $i++) : ?>
            <article class="item mr-5 border-ccc">
                <div class="item-heading p-2 m-2">
                    <a href="network/show/<?= $data['network'][$i]['id'] ?>"><?= $data['network'][$i]['title'] ?></a>
                </div>
                <div class="item-content mr-5 ml-5">
                    <p class="pr-5 pl-5"><?= $data['network'][$i]['mini_text'] ?></p>
                </div>
                <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                    <a href="network/show/<?= $data['network'][$i]['id'] ?>" class="d-flex">
                        <p class="pt-2">VIEW</p>
                        <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                    </a>
                </div>
            </article>
        <?php endfor; ?>
        <article id="item-article" class="item-article mr-5 pt-2">
            <div class="list-article">
                <ul>
                    <?php for ($i = 2; $i < 6; $i++) : ?>
                        <li class="p-3">
                            <div class="item-list-article">
                                <a href="network/show/<?= $data['network'][$i]['id'] ?>">
                                    <?= $data['network'][$i]['title'] ?>
                                </a>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="./network" class="d-flex">
                    <p class="pt-2">VIEW ALL ARTICLE</p>
                    <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    </div>


    <!--CCNA STUDY GUILD-->
    <h3 class="mt-5"><a href="#">CCNA Study Guild</a></h3>
    <div class="d-flex justify-content-space mt-3">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <article class="item mr-5 border-ccc">
                <div class="item-heading p-2 m-2">
                    <a href="ccna/show/<?= $data['ccna'][$i]['id'] ?>"><?= $data['ccna'][$i]['title'] ?></a>
                </div>
                <div class="item-content mr-5 ml-5">
                    <p class="pr-5 pl-5"><?= $data['ccna'][$i]['mini_text'] ?></p>
                </div>
                <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                    <a href="ccna/show/<?= $data['ccna'][$i]['id'] ?>" class="d-flex">
                        <p class="pt-2">VIEW</p>
                        <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                    </a>
                </div>
            </article>
        <?php endfor; ?>
        <article id="item-article" class="item-article mr-5 pt-2">
            <div class="list-article">
                <ul>
                    <?php for ($i = 2; $i < 6; $i++) : ?>
                        <?php if (isset($data['ccna'][$i])) : ?>
                            <li class="p-3">
                                <div class="item-list-article">
                                    <a href="ccna/show/<?= $data['ccna'][$i]['id'] ?>">
                                        <?= $data['ccna'][$i]['title'] ?>
                                    </a>
                                </div>
                            </li>
                        <?php endif ?>
                    <?php endfor; ?>
                </ul>
            </div>
            <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="./ccna" class="d-flex">
                    <p class="pt-2">VIEW ALL ARTICLE</p>
                    <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    </div>

    <!--    LINUX TUTORIAL-->
    <h3 class="mt-5"><a href="#">Linux Tutorial</a></h3>
    <div class="d-flex justify-content-space mt-3">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <article class="item mr-5 border-ccc">
                <div class="item-heading p-2 m-2">
                    <a href="linux/show/<?= $data['linux'][$i]['id'] ?>"><?= $data['linux'][$i]['title'] ?></a>
                </div>
                <div class="item-content mr-5 ml-5">
                    <p class="pr-5 pl-5"><?= $data['linux'][$i]['mini_text'] ?></p>
                </div>
                <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                    <a href="linux/show/<?= $data['linux'][$i]['id'] ?>" class="d-flex">
                        <p class="pt-2">VIEW</p>
                        <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                    </a>
                </div>
            </article>
        <?php endfor; ?>
        <article id="item-article" class="item-article mr-5 pt-2">
            <div class="list-article">
                <ul>
                    <?php for ($i = 2; $i < 6; $i++) : ?>
                        <li class="p-3">
                            <div class="item-list-article">
                                <a href="linux/show/<?= $data['linux'][$i]['id'] ?>">
                                    <?= $data['linux'][$i]['title'] ?>
                                </a>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="./linux" class="d-flex">
                    <p class="pt-2">VIEW ALL ARTICLE</p>
                    <img src="<?= Asset::asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    </div>
</main>
<!--       END ARTICLES LIST-->