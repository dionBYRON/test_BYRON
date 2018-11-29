<?php /* Template name: Special Template */
      $args = array(
      'post_type' => 'products',
      'post_status' => 'publish',
      'posts_per_page' => -1
      );
      ?>
  
      <div class="container">
            <?php 
            $count_posts = wp_count_posts('products')->publish;
            $number = 0;
            $new_counter = 0;
            $products_loop = new WP_Query( $args );
            if ( $products_loop->have_posts() ) {
                  ?>
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                              <!--  For every 3 posts there is an indicator added -->
                              <?php for ($i = 0; $i < $count_posts; $i += 3) { 
                              ?>
                              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $number ?>" class="<?php if($i == 0){ echo 'active';} ?>"></li>
                              <?php $number++ ?>
                              <?php
                              }
                              ?>
                        </ol>                        
                        <div class="carousel-inner">
                              <div class="carousel-item active">
                                    <div class="row">
                                          <?php
                                          while ( $products_loop->have_posts() ) { 
                                                $products_loop->the_post();
                                                if ($new_counter > 0 && $new_counter % 3 == 0) {
                                                      ?>
                                                            </div>
                                                      </div>
                                                      <div class="carousel-item">
                                                            <div class="row">
                                                      <?php
                                                }
                                                ?>
                                                <div class="col-lg-4">
                                                      <div class=product>
                                                            <img class="img-fluid" src=<?php echo the_field('product_image');  ?> alt=”product-detail”>
                                                      </div>
                                                </div>
                                                <?php
                                                $new_counter++;                                                
                                          }
                                          $number++;
                                          ?>
                                    </div>
                              </div>                   
                  </div><?php
                  wp_reset_postdata();
            }
            ?>
            </div>
      </div>