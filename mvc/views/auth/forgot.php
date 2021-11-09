<?php

use app\core\Asset;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!--    css-->
    <link rel="stylesheet" href="<?=Asset::asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/footer.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/login.css') ?>">
</head>

<body>

    <body>

        <!--MAIN-->
        <main id="main" style="margin-top: 5rem">
            <h1 class="mb-5">Get new password Computer Notes</h1>
            <div class="from d-flex justify-content-center mt-5">
                <form action="http://computernetworknotes.test/authentication/resetPassword" method="post">
                    <div class="input-email">
                        <input type="text" name="email" id="email" class="p-1" placeholder="Email">
                    </div>
                    <?php
                    if (isset($_SESSION['create'])) : ?>
                        <div class="alert">
                            <?= $_SESSION['create'];
                            unset($_SESSION['create']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="alert d-flex">
                        <a href="http://computernetworknotes.test/" style="text-decoration: none; ">Home</a>
                        <a href="http://computernetworknotes.test/authentication/registry/" style="text-decoration: none; ">Registry</a>
                        <a href="http://computernetworknotes.test/authentication/login" style="text-decoration: none; ">Login</a>
                    </div>
                    <input type="submit" style="font-weight: bolder" value="Send Mail" class="p-1">
                </form>
            </div>
        </main>

        <script src="http://computernetworknotes.test/mvc/public/js/custom.js'"></script>

    </body>
</body>

</html>