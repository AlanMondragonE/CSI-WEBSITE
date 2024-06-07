<?php

$production = false;

$route = "";

if (!$production) {
    $route = "/inolab-website";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Soluciones especializadas e integrales para equipos de laboratorio e industria.">
    <meta name="robots" content="all">
    <meta name="theme-color" content="#58ace4">

    <!-- meta tags para Facebook y Whatsapp -->
    <meta property="og:url" content="https://inolab.com/template/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Inolab Especialistas">
    <meta property="og:description" content="Equipo de alta tecnología para laboratorios Industriales y de Investigación">
    <meta property="og:image" content="https://inolab.com/template/img/inolab-site.jpg">
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />

    <!-- meta tags para Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="inolab.com">
    <meta property="twitter:url" content="https://inolab.com/template/">
    <meta name="twitter:title" content="Inolab Especialistas">
    <meta name="twitter:description" content="Equipo de alta tecnología para laboratorios Industriales y de Investigación">
    <meta name="twitter:image" content="https://inolab.com/template/img/inolab-site.jpg">

    <!-- Propuestas preguntas -->
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/components.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/loader.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/menu.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/buttons.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/popup.css">
    <link rel="stylesheet" href="<?php echo ($route) ?>/website-assets/assets/css/cookies.css">
    <link rel="stylesheet" href="<?php echo (dirname($_SERVER['SCRIPT_NAME']) . '/css/header.css') ?>">
    <link rel="stylesheet" href="<?php echo (dirname($_SERVER['SCRIPT_NAME']) . '/css/styles.css') ?>">

    <link rel="shortcut icon" type="image/x-icon" href="https://inolab.com/catalogo/assets/img/favicon/favicon.ico">
    <!-- styles animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- styles iconos-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" crossorigin="anonymous" />
    <!-- styles carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
    <!-- styles video player -->
    <link rel='stylesheet' href='https://unpkg.com/plyr@3/dist/plyr.css'>
    <!-- Styles gallery  -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery-bundle.css'>
    <!-- script recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js?hl=es"></script>
    <!--css slider banner -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.8.0/dist/css/splide-extension-video.min.css">


    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106011446-1"></script>-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-845716858"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-845716858');
    </script>
</head>