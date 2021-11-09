<main id="main">
    <!--    post TUTORIAL-->
    <h3 class="mt-5 ml-5" style="margin-left: 1rem"><a href="#">Post Of User</a></h3>
    <div class="">
        <div class="">
            <?php $i = 1;
            foreach ($data['post'] as $post) : ?>
                <article class="item mr-5 border-ccc w-50 mt-5 mb-5">
                    <div class="item-heading p-2 m-2">
                        <a href="../../<?= $post['type'] ?>/show/<?= $post['id'] ?>"><?= $post['title']; ?></a>
                        <br>
                        <small> Post Type: 
                            <a style="text-decoration: none;" href="/<?= $post['type'] ?>"><?= ucfirst($post['type']); ?></a></small>
                    </div>
                    <div class="item-content mr-5 ml-5" style="overflow: hidden">
                        <p class="pr-5 pl-5"><?= $post['mini_text'] ?></p>
                    </div>
                    <div class="item-footer mr-5 ml-5 d-flex justify-content-end">
                        <a href="../../<?= $post['type'] ?>/show/<?= $post['id'] ?>" class="d-flex">
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