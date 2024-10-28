<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>OrangeHouse10</title>
    <?php wp_head(); ?>
</head>
<body>
<!-- header -->
<header class="header">
    <div class="header-inner">
        <div class="header-logo">
            <a href="<?=home_url(); ?>"><img src="<?=get_template_directory_uri(); ?>/img/logo.png" alt="ゲストハウスロゴ"></a>
        </div>
        <ul class="header-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#gallary">Gallary</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#price">Price</a></li>
            <li><a href="#access">Access</a></li>
            <li><a href="https://www.instagram.com/orangehouse_10/"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!-- ハンバーガーボタン -->
        <div id="btn" class="hamburger__btn">
            <i class="fas fa-bars"></i>
        </div>
        <ul id="menu" class="menu-sp">
            <li class="header-logo"><img src="<?=get_template_directory_uri(); ?>/img/logo.png" alt="ゲストハウスロゴ">
            <li><a href="#about">About</a></li>
            <li><a href="#gallary">Gallary</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#price">Price</a></li>
            <li><a href="#access">Access</a></li>
            <li><a href="https://www.instagram.com/orangehouse_10/"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!-- バツボタン -->
        <div id="batsu" class="batsu"></div>
        <!-- モーダルウィンドウ  -->
        <div id="modal" class="modal-sp"></div>
    </div>
</header>
<!-- header -->