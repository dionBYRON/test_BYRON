<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mytheme.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animatons.css" type="text/css" media="screen" />
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <script src="/wp-content/themes/mytheme/js/main.js"></script>
        <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
        <title>Custom Theme</title>      
        <?php wp_head() ?>  
    </head>
    <header>

    </header>
    <body>
        <nav class="nav-main">
            <div class="btn-toggle-nav" onclick="toggleNav()"></div>    
            <div class="btn-icon" onclick="toggleNav()"></div>    
        </nav>

        <div class="nav-sidebar">
            <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>








