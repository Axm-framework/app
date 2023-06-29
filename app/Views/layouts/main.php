<!DOCTYPE html>

<?php $app = Axm::app() ?>

<html lang="<?= $app->config()->get('defaultLocale') ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ff3f3f">
    <title>My Pagina</title>
    <meta name="description" content="<?= $app->config()->get('info.description') ?>">
    <meta name="keywords" content="<?= $app->config()->get('info.keywords') ?>">
    <meta name="author" content="<?= $app->config()->get('info.author') ?>">
    <meta property="og:url" content="<?= $app->config()->get('info.url') ?>">
    <meta property="og:title" content="<?= $app->config()->get('info.title') ?>">
    <meta property="og:image" content="<?= $app->config()->get('info.image') ?>">
    <meta property="og:image:secure_url" content="<?= $app->config()->get('info.image') ?>">
    <meta name="twitter:description" content="<?= $app->config()->get('info.description') ?>" />
    <meta name="twitter:image" content="<?= $app->config()->get('info.image') ?>" />
    <meta name="csrf-token" content="<?= $app->generateCsrfToken() ?>" />

    <!-- CSS Libraries-->
    <link rel="stylesheet" href="<?= baseUrl('assets/css/bootstrap.min.css') ?>"> <!-- bootstrap v4.6.0 -->

</head>

<body>

    <!-- Start em_loading -->
    <section class="em_loading" id="loaderPage">
        <div class="spinner_flash">
            <center> <img src="<?= baseUrl('assets/img/favicon/ico_black2.png') ?>" class="rounded-circle" style="border-radius:50px;width:40px;height:40px;"></center>
        </div>
    </section>
    <!-- End. em_loading -->

    <div id="wrapper">
        <div id="content">

            <?= $content ?>

        </div>
    </div>

    <script src="<?= baseUrl('service-worker.js') ?>"></script> <!--PWA app service registration and works js -->

</body>

</html>