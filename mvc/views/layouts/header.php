<header id="header">
    <div id="logo" class="d-flex justify-content-space">
        <img src="<?= asset('/img/logo.png'); ?>">

        <img src="<?= asset('/img/logoyoutube.png'); ?>" class="pr-5">
    </div>
    <nav id="nav-menu" class="d-flex justify-content-space">
        <ul>
            <li><a href="/LTWeb/home">Home</a></li>
            <li><a href="/LTWeb/network">Network Administrator</a></li>
            <li><a href="/LTWeb/ccna">CCNA Study Guild</a></li>
            <li><a href="/LTWeb/linux">Linux Tutorial</a></li>
        </ul>
        <div class="d-flex justify-content-end" id="user">
            <?php if (!isset($_SESSION['user'])): ?>
                <a href="/LTWeb/authentication/login" style="color: white; margin-right: 1rem">Login</a>
                <a href="/LTWeb/authentication/registry" href="#" style="color: white; margin-right: 1rem">Registry</a>
            <?php else: ?>
                <a href="/LTWeb/post/create" style="color: white; margin-right: 1rem">New Post</a>
                <a href="#" aria-disabled="true" style="color: white; margin-right: 1rem"
                   class="d-flex">
                    <img src="" alt="" style="width: 2rem; height: 2rem; margin-top: 0.2rem"
                         srcset="<?= asset('/img/img.png'); ?>">
                    <p class="ml-5" style="margin-left: 0.5rem"><?= $_SESSION['user']['username'] ?></p>
                </a>
                <a href="/LTWeb/authentication/logout" style="color: white; margin-right: 1rem">Logout</a>
            <?php endif; ?>
        </div>
    </nav>

</header>