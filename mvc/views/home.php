<!--        NETWORK-->
<h3 class="mt-5"><a href="#">Network Administrator</a></h3>
<div class="d-flex justify-content-space mt-5">
    <?php for ($i = 0; $i < 2; $i++): ?>
        <article class="item mr-5 border-ccc">
            <div class="item-heading p-2 m-2">
                <a href="networkadmin/show/<?= $i ?>"><?= $data['network'][$i]['title'] ?></a>
            </div>
            <div class="item-content mr-5 ml-5">
                <p class="pr-5 pl-5"><?= $data['network'][$i]['content'] ?></p>
            </div>
            <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="networkadmin/show/<?= $i ?>" class="d-flex">
                    <p class="pt-2">VIEW</p>
                    <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    <?php endfor; ?>
    <article id="item-article" class="item-article mr-5">
        <div class="list-article">
            <ul>
                <?php for ($i = 2; $i < 6; $i++): ?>
                    <li class="p-3">
                        <div class="item-list-article">
                            <a href="networkadmin/show/<?= $i ?>">
                                Computer Peripheral Devices and Their Functions
                            </a>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
            <a href="networkadmin/index.html" class="d-flex">
                <p class="pt-2">VIEW ALL ARTICLE</p>
                <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
            </a>
        </div>
    </article>
</div>


<!--CCNA STUDY GUILD-->
<h3 class="mt-5"><a href="#">CCNA Study Guild</a></h3>
<div class="d-flex justify-content-space mt-5">
    <?php for ($i = 0; $i < 2; $i++): ?>
        <article class="item mr-5 border-ccc">
            <div class="item-heading p-2 m-2">
                <a href="ccna/show/<?= $i ?>"><?= $data['ccna'][$i]['title'] ?></a>
            </div>
            <div class="item-content mr-5 ml-5">
                <p class="pr-5 pl-5"><?= $data['ccna'][$i]['content'] ?></p>
            </div>
            <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="ccna/show/<?= $i ?>" class="d-flex">
                    <p class="pt-2">VIEW</p>
                    <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    <?php endfor; ?>
    <article id="item-article" class="item-article mr-5 pt-2">
        <div class="list-article">
            <ul>
                <?php for ($i = 2; $i < 6; $i++): ?>
                    <li class="p-3">
                        <div class="item-list-article">
                            <a href="ccna/show/<?= $i ?>">
                                Computer Peripheral Devices and Their Functions
                            </a>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
            <a href="networkadmin/index.html" class="d-flex">
                <p class="pt-2">VIEW ALL ARTICLE</p>
                <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
            </a>
        </div>
    </article>
</div>

<!--    LINUX TUTORIAL-->
<h3 class="mt-5"><a href="#">Linux Tutorial</a></h3>
<div class="d-flex justify-content-space mt-5">
    <?php for ($i = 0; $i < 2; $i++): ?>
        <article class="item mr-5 border-ccc">
            <div class="item-heading p-2 m-2">
                <a href="ccna/show/<?= $i ?>"><?= $data['ccna'][$i]['title'] ?></a>
            </div>
            <div class="item-content mr-5 ml-5">
                <p class="pr-5 pl-5"><?= $data['ccna'][$i]['content'] ?></p>
            </div>
            <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                <a href="ccna/show/<?= $i ?>" class="d-flex">
                    <p class="pt-2">VIEW</p>
                    <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    <?php endfor; ?>
    <article id="item-article" class="item-article mr-5 pt-2">
        <div class="list-article">
            <ul>
                <?php for ($i = 2; $i < 6; $i++): ?>
                    <li class="p-3">
                        <div class="item-list-article">
                            <a href="ccna/show/<?= $i ?>">
                                Computer Peripheral Devices and Their Functions
                            </a>
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <div id="view-article" class="item-footer mr-5 ml-5 d-flex justify-content-end">
            <a href="./linux" class="d-flex">
                <p class="pt-2">VIEW ALL ARTICLE</p>
                <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
            </a>
        </div>
    </article>
</div>
<!--       END ARTICLES LIST-->