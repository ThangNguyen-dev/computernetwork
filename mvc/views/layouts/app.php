<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computer Network Notes</title>
    <link rel="shortcut icon" href="<?=asset('img/shortcut.png')?>">

    <meta name="title" content="Computer Network Notes"/>
    <meta name="description" content="Technology, Network, Linux and CCNA"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <?php if (isset($data['linux']['thumbnail_img_url'])): ?>
        <link rel="image_src" href="<?= asset($data['linux']['thumbnail_img_url']) ?>"/>
    <?php endif; ?>
    <!--    css-->
    <link rel="stylesheet" href="<?= asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/login.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/editor.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/responsive.css') ?>">
</head>
<body>

<!--HEADING -->
<?php require_once 'mvc/views/layouts/header.php' ?>
<!--END HEADING-->

<!--MAIN-->
<?php require_once "mvc/views/{$data['page']}.php" ?>

<!--FOOTER-->
<?php require_once 'mvc/views/layouts/footer.php' ?>

<script src="<?= asset('/js/custom.js') ?>'"></script>
</body>
</html>