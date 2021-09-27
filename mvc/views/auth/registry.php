<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registry</title>
    <!--    css-->
    <link rel="stylesheet" href="<?= asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/login.css') ?>">
</head>
<body>
<body>

<!--MAIN-->
<main id="main" style="margin-top: 5rem">
    <h1 class="mb-5">Registry Computer Network Notes</h1>

    <div class="from d-flex justify-content-center mt-5">
        <form action="/LTWeb/authentication/store" method="post">
            <div class="input-email">
                <input type="text" name="email" id="email" class="p-1" placeholder="Email">
            </div>
            <div class="input-email">
                <input type="text" name="username" id="username" class="p-1" placeholder="User name">
            </div>
            <div class="input-email">
                <input type="password" name="password" id="password" class="p-1" placeholder="Password">
            </div>
            <div class="input-email">
                <input type="password" name="re_password" id="password" class="p-1" placeholder="Retyping password">
            </div>

            <?php
            if (isset($_SESSION['create'])): ?>
                <div class="alert">
                    <?= $_SESSION['create'];
                    unset($_SESSION['create']); ?>
                </div>
            <?php endif; ?>

            <input type="submit" style="font-weight: bolder" value="Submit" class="p-1">

        </form>
    </div>
</main>

<script src="/LTWeb/mvc/public//js/custom.js'"></script>

<div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div>
<iframe id="nr-ext-rsicon"
        style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe>
</body>
</body>
</html>