<!DOCTYPE html>
<html lang="en">
    <?php use app\core\Asset;?>
<head>
    <meta charset="UTF-8">
    <title>Computer Network Notes</title>
    <link rel="shortcut icon" href="<?=Asset::asset('img/shortcut.png')?>">

    <meta name="title" content="Computer Network Notes"/>
    <meta name="description" content="Technology, Network, Linux and CCNA"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <?php if (isset($data['linux']['thumbnail_img_url'])): ?>
        <link rel="image_src" href="<?=Asset::asset($data['linux']['thumbnail_img_url']) ?>"/>
    <?php endif; ?>
    <!--    css-->
    <link rel="stylesheet" href="<?=Asset::asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/footer.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/login.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/editor.css') ?>">
    <link rel="stylesheet" href="<?=Asset::asset('css/responsive.css') ?>">
</head>
<body>

<!--HEADING -->
<?php require_once 'mvc/views/layouts/header.php' ?>
<!--END HEADING-->

<!--MAIN-->
<?php require_once "mvc/views/{$data['page']}.php" ?>

<!--FOOTER-->
<?php require_once 'mvc/views/layouts/footer.php' ?>

<script src="<?=Asset::asset('/js/custom.js') ?>'"></script>
</body>
</html>