<div class="post">
            <div class="row">
              <div class="col-sm-4 mb-4">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb">
              </div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="cat-name"><?php the_category(','); ?></div>
                    <a href="<?php the_permalink(); ?>" class="heading">
                      <h2><?php the_title(); ?></h2>
                    </a>
                    <p class="post-meta">
                      <strong><?php the_author_posts_link(); ?></strong> | 
                      <span><?php comments_number( 'No Comment', 'One Comment', '% Comment' ); ?></span>
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <div class="content"><?php
                        if(is_single()) :
                          the_content();
                          else :
                          $excerpt = get_the_excerpt();
                          
                          $excerpt = substr($excerpt, 0, 260);
                          $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                          echo $result;
                          ?> <a href="" class="read-more">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                          <?php 
                          endif;
                          ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>