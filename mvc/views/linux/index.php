<!--    LINUX TUTORIAL-->
<main id="main">
<h3 class="mt-5 ml-5" style="margin-left: 1rem"><a href="#">Linux Tutorials (Latest Tutorials)</a></h3>
<div class="mt-5">
    <div class="mt-5">
        <?php for ($i = 0;
        $i < count($data['linux']);
        $i++): ?>
        <article class="item mr-5 border-ccc w-50 mt-5 mb-5">
            <div class="item-heading p-2 m-2">
                <a href="ccna/show/<?= $i ?>"><?= $data['linux'][$i]['title'] ?></a>
            </div>
            <div class="item-content mr-5 ml-5">
                <p class="pr-5 pl-5"><?= $data['linux'][$i]['content'] ?></p>
            </div>
            <div class="item-footer mr-5 mt-5 ml-5 d-flex justify-content-end">
                <a href="linux/show/<?= $i ?>" class="d-flex">
                    <p class="pt-2">VIEW</p>
                    <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                </a>
            </div>
        </article>
    </div>
</div>
<?php endfor; ?>
<h3 class="mt-5 ml-5 mb-5" style="margin-left: 1rem; margin-top: 2rem"><a href="#">Linux Tutorials (Previous
        Tutorials)</a></h3>
<div class="mt-5">
    <div class="mt-5">
        <article id="item-article" class="item-article mr-5 mb-5 pt-2 mt-5 w-100">
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
</div>
</main>
