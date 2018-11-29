<?php get_header() ?>
<?php 
while (have_posts()) {
    the_post();
    ?> 
    <div class="home-landing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-landing-text">
                        <h1>Now anyone<br> can build things</h1>
                        <p>Build things with things. <br>things are easy for things.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-landing-image">
                        <img src="../wp-content/themes/website/img/mobile-app.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-second">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1>You want to create a thing, but how?</h1>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet lacus ut felis dictum venenatis. Donec eleifend, odio ac dictum cursus, mi libero fermentum odio, quis vehicula enim neque eu erat.</p>
                    <img class="img-fluid home-img" src="../wp-content/themes/website/img/iphone.png">
                </div>
                <div class="col-lg-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet lacus ut felis dictum venenatis. Donec eleifend, odio ac dictum cursus, mi libero fermentum odio, quis vehicula enim neque eu erat.</p>
                    <img class="img-fluid" src="../wp-content/themes/website/img/s9.png">
                </div>
            </div>
        </div>
    </div>
    <div class="home-third">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <img class="img-fluid" src="../wp-content/themes/website/img/banner-mobile.png">
                </div>
                <div class="col-lg-5">
                    <div class="bg-color"></div>
                        <h1>Why you should choose to make things right now.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra tempus elementum. Nulla vel leo quis orci ultrices cursus. Donec magna nibh, dapibus et mi a, consectetur mattis diam. Integer tellus ipsum, efficitur non sem bibendum, posuere commodo lectus.<br><br> Nam blandit turpis in porttitor interdum. In tempus, urna ut laoreet semper, neque sapien finibus ante, in aliquam elit metus vel risus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-fourth">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-price">
                        <div class="card-top">
                            <h1>€500,-</h1>
                        </div>
                        <div class="card-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra tempus elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-price">
                        <div class="card-top">
                            <h1>€900,-</h1>
                        </div>
                        <div class="card-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra tempus elementum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-price">
                        <div class="card-top">
                            <h1>€1500,-</h1>
                        </div>
                        <div class="card-bottom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra tempus elementum.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} // End of while loop for content
?>

<?php

