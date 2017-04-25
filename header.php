<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Title goes here woo woo</title>
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/stylish-portfolio.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    	<?php wp_head();?>
</head>
<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Menu</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="about.html" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="body.html" onclick=$("#menu-close").click();>Bombshell Body</a>
            </li>
            <li>
                <a href="business.html" onclick=$("#menu-close").click();>Bombshell Business</a>
            </li>
            <li>
                <a href="contact.html" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>
    <section id="about" class="about">
    </section>



    <!-- Callout -->
    <aside class="callout2">
        <div class="text-vertical-center">
        </div>
    </aside>
