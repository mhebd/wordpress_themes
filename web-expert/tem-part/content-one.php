<div class="featured-post-wrap">
            <div class="post-thumb">
              <img src="img/2.jpg" alt="" class="img-fluid">
            </div>
            <?php 
                if( has_post_thumbnail() ) { ?>
                    <div class="post-thumb">
                      
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      
                    </div>
                <?php
                } 
              ?>
               <div class="post-meta single-post-meta mb-4">
                 
                  
                    <span>Last Update On: <?php the_date(); ?></span> 
                  
                 
                  
                </div>
                <?php 
                  if( ! is_page() ) { ?>
                    <div class="post-heading single-post-heading">
                  
                    <h3 class=""><?php the_title(); ?></h3>
                  
                </div> <?php
                  }
                ?>
                <div class="post-content">
                  <?php 
                    if( is_single() || is_page() ) {
                      the_content();
                    } else {
                      the_excerpt();
                    }
                  ?>
                </div>
          </div>