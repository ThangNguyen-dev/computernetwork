<!--    CCNA TUTORIAL-->

<main id="main">
    <h3 class="mt-5 ml-5" style="margin-left: 1rem"><a href="#">CCNA Tutorials (Latest Tutorials)</a></h3>
    <div class="">
        <div class="">
            <?php $i = 1;
            foreach ($data['ccna'] as $ccna): ?>
                <article class="item mr-5 border-ccc w-50 mt-5 mb-5">
                    <div class="item-heading p-2 m-2">
                        <a href="ccna/show/<?= $ccna['id'] ?>"><?= $ccna['title']; ?></a>
                    </div>
                    <div class="item-content mr-5 ml-5" style="overflow: hidden">
                        <p class="pr-5 pl-5"><?= $ccna['mini_text'] ?></p>
                    </div>
                    <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                        <a href="ccna/show/<?= $ccna['id'] ?>" class="d-flex">
                            <p class="pt-2">VIEW</p>
                            <img src="<?= asset('img/iconview.png') ?>" class="mr-2" title="view" alt="view icon">
                        </a>
                    </div>
                </article>

            <?php endforeach; ?>
        </div>
    </div>
    <h3 class="mt-5 ml-5 mb-5" style="margin-left: 1rem;text-align: center; margin-top: 2rem">
        <a href="#main">Back top</a>
    </h3>

</main>
