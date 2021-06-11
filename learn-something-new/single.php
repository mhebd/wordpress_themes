<?php get_header(); ?>
    
        <section>
            <div class="container-fluid">
                <div class="container">
                    <div class="header-widget-section">

                    </div> <!-- header widget end-->

                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <div class="content-section-wrapper">
                                <div class="featured-post mb-4">

                                  <?php
                                    

                                    if(have_posts()) :
                                      while(have_posts()) :     the_post(); ?>
                                      
                                    <article class="bg-light p-3 my-3 wow animated fadeInUp">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid wow animated zoomIn">

                                        <h2 class="post-heading my-3">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>

                                                <div class="post-meta mb-3">
                                                    <span><strong>By: </strong><?php the_author_posts_link(); ?></span> |
                                                    <span><strong>On: </strong><?php echo get_the_date(); ?></span> |
                                                    <span><strong>In: </strong><?php the_category(', '); ?></span>
                                                </div>

                                        <div class="prg">
                                            <p>
                                            <?php
                                                  the_content();
                                                ?>
                                            </p>
                                        </div>

                                        <div class="more-link  text-right">
                                            <a href="#" class="more">Read More &raquo;</a>
                                        </div>

                                        <div class="share-btn mt-4 post-single">
                                            <!-- <strong class="float-left"><strong>Share:</strong></p> -->
                                            <ul class="nav justify-content-center">
                                                <li class="nav-item"><a href="#" class="nav-link"
                                                        style="background: rgb(255, 38, 0);"><i
                                                            class="fab fa-pinterest-p"></i></a></li>
                                                <li class="nav-item"><a href="#" class="nav-link"
                                                        style="background: #0073FF;"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li class="nav-item"><a href="#" class="nav-link"
                                                        style="background: #1DA1F2;"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link"
                                                        style="background: #0077B5;"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="comment mt-5">
                                          <?php comments_template(); ?>
                                        </div>
                                    </article>

                                      <?php

                                    endwhile;
                                    wp_reset_postdata();
                                  endif;
                                  ?>


                                </div> <!-- featured post end-->
                                
                            </div> <!-- post section end -->
                        </div> <!-- right side end-->

                        <div class="col-md-4 mb-4">
                            <aside>
                                <div class="sidebar-widget">

                                    <?php
                                      get_sidebar();
                                    ?>

                                </div>
                            </aside>
                        </div> <!-- left side end-->
                    </div>
                </div>
            </div>
        </section>
        <!--section  end-->

        <?php get_footer(); ?>