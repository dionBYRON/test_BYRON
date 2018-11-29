<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Poppins:400,600,700,900" rel="stylesheet">
        <title>Custom Website</title>
        <script src="js/main.js"></script>    
        <?php wp_head() ?>  
    </head>
    <body>
    <header>
        <div class="header-main-navigation">
            <div class="container">
                <div class="row justify-content-end ">
                    <div class="col-lg-auto">
                        <nav class="desktop-naviagion">
                        <?php
                        if(has_nav_menu('primary')){
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'item_spacing' => 'discard',
                            ]);
                        }
                        ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


