<?php use app\core\Asset;?>
<header id="header">
    <div id="logo" class="d-flex justify-content-space">
        <a href="/" style="margin-top: 0.5rem;">
            <img src="<?=Asset::asset('/img/logo.png'); ?>">
        </a>

        <img src="<?=Asset::asset('/img/logoyoutube.png'); ?>" class="pr-5">
    </div>
    <nav id="nav-menu" class="d-flex justify-content-space">
        <ul>
            <li><a href="http://computernetworknotes.test/home">Home</a></li>
            <li><a href="http://computernetworknotes.test/network">Network Administrator</a></li>
            <li><a href="http://computernetworknotes.test/ccna">CCNA Study Guild</a></li>
            <li><a href="http://computernetworknotes.test/linux">Linux Tutorial</a></li>
        </ul>
        <div class="d-flex justify-content-end" id="user">
            <?php if (!isset($_SESSION['user'])) : ?>
                <a href="http://computernetworknotes.test/authentication/login" style="color: white; margin-right: 1rem">Login</a>
                <a href="http://computernetworknotes.test/authentication/registry" href="#" style="color: white; margin-right: 1rem">Registry</a>
            <?php else : ?>
                <a href="http://computernetworknotes.test/post/create" style="color: white; margin-right: 1rem">New Post</a>
                <a href="http://computernetworknotes.test/authentication/profile" aria-disabled="true" style="color: white; margin-right: 1rem" class="d-flex">
                    <img src="" alt="" style="width: 2rem; height: 2rem; margin-top: 0.2rem" srcset="<?=Asset::asset('/img/img.png'); ?>">
                    <p class="ml-5" style="margin-left: 0.5rem"><?= $_SESSION['user']['username'] ?></p>
                </a>
                <a href="http://computernetworknotes.test/authentication/logout" style="color: white; margin-right: 1rem">Logout</a>
            <?php endif; ?>
        </div>
    </nav>

</header>