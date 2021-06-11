<?php 

            $j = 0;
            $i = 1;

            if(have_posts() ) :
              while(have_posts() ) :
                the_post(); 

                $j++;
                if( $j == 1 ) {
                  $featured_dsp = 'display: block';
                  $recent_dsp = 'display: none';
                } else {
                  $featured_dsp = 'display: none';
                  $recent_dsp = 'display: block';
                };
                
                
                
                if( $i % 2 === 0) {
                  $class1 = 'order-2';
                  $class2 = 'order-2 order-sm-1';
                } else {
                  $class1 = '';
                  $class2 = '';
                }
                $i++;
          ?>
          <div class="featured-post-wrap" style="<?php echo $featured_dsp; ?>">
            <div class="post-thumb">
              <img src="img/2.jpg" alt="" class="img-fluid">
            </div>
            <?php 
                if( has_post_thumbnail() ) { ?>
                    <div class="post-thumb">
                      <a href="<?php the_permalink(); ?>" class="">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      </a>
                    </div>
                <?php
                } 
              ?>
               <div class="post-meta">
                  <span class="cat"><?php the_category( ' ' ); ?></span>
                </div>
                <div class="post-heading">
                  <a href="<?php the_permalink(); ?>" class="">
                    <h3 class=""><?php the_title(); ?></h3>
                  </a>
                </div>
                <div class="post-content">
                  <?php the_excerpt(); ?>
                </div>
          </div>

          <div class="recent-post-wrap" style="<?php echo $recent_dsp; ?>">
            <div class="row">
              <?php 
                if( has_post_thumbnail() ) { ?>
                  <div class="col-sm-5 <?php echo $class1; ?>">
                    <div class="post-thumb">
                      <a href="<?php the_permalink(); ?>" class="">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-7 <?php echo $class2; ?>">
                <?php
                } else { ?>
                  <div class="col-12">
                  <?php
                }
              ?>
              
              
                <div class="post-meta">
                  <span class="cat"><?php the_category( ' ' ); ?></span>
                </div>
                <div class="post-heading">
                  <a href="<?php the_permalink(); ?>" class="">
                    <h3 class=""><?php the_title(); ?></h3>
                  </a>
                </div>
                <div class="post-content">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          </div>

          <?php 
              endwhile;
            else :
              echo '<p class="lead text-warning">There is nothing found!!</p>';
            endif;
          ?>