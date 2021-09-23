<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forum Lap Trinh</title>
    <!--    font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!--    css-->
    <link rel="stylesheet" href="<?= asset('css/common.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/footer.css') ?>">
</head>
<body>

<!--HEADING -->
<?php require_once 'mvc/views/layouts/header.php' ?>
<!--END HEADING-->

<!--MAIN-->
<main id="main">
    <?php require_once "mvc/views/{$data['page']}.php" ?>
</main>

<!--FOOTER-->
<?php require_once 'mvc/views/layouts/footer.php' ?>

<script src="<?= asset('/js/custom.js') ?>'"></script>
</body>
</html>