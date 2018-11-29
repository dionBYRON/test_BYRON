<?php get_header() ?>

<?php 
while (have_posts()) {
      the_post();
      ?> 
      <div id="home" class="animate-backgrond"style="background: url('<?php the_field('landing_page_background')?>') no-repeat 50% 50%; background-attachment: fixed;">
            <div class="landing-text animate-pop-in">
                  <h1><span><a href="#pano"id="smooth">Explore</a></span></h1>
                  <h3><span>start your journey now</span></h3>
             </div>
      </div>
      <div class="container-fluid">
            <div class="row explore-explain">
                  <div class="col-12 col-sm-3 col-md-6 ">
                        <div class="explain-text">
                              <h1><?php echo get_field('explain_explore_title') ?></h1>
                              <p><?php echo get_field('explain_explore_text') ?></p>
                        </div>
                  </div>
                  <div class="col">
                        <img class="img-fluid explain-image" src="<?php the_field('explain_explore_image') ?>" alt="#">
                  </div>
            </div>
      </div>
      <div  class="container-fluid">
            <div class="row">
                  <div class="col-lg-6  nature-text explore-nature">
                        <div class="overlay"></div>
                        <div class="nature-text">
                              <h1>Nature</h1>
                              <button type="button" class="btn">Basic</button>
                        </div>
                  </div>
                  <div class="col-lg-6 nopadding explore-space">                        
                        <div class="load">
                              <hr/><hr/><hr/><hr/>
                        </div>
                  </div>
            </div>
      </div>

      <!-- Custom post type carousel -->
     <?php get_template_part( 'templates/special')?>
<?php
} // End of while loop for content
?>


<?php get_footer()?>
