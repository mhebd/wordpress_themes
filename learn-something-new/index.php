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
                                    <!-- <article class="bg-light p-3 my-3 wow animated fadeInUp">
                                        <img src="image/1.jpg" alt="" class="img-fluid wow animated zoomIn">

                                        <h2 class="post-heading my-3">
                                            <a href="#">This is a featured post heading!</a>
                                        </h2>

                                        <div class="post-meta mb-3">
                                            <span><strong>By:</strong> Admin</span> |
                                            <span><strong>On:</strong> 11 Sep, 2018</span> |
                                            <span><strong>In:</strong> Category</span> |
                                        </div>

                                        <div class="prg">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nulla,
                                                consequuntur dignissimos id voluptatum dicta et ullam minus tempore qui
                                                dolor nam, natus maxime beatae nobis nisi vel ab. Alias.</p>
                                        </div>

                                        <div class="more-link  text-right">
                                            <a href="#" class="more">Read More &raquo;</a>
                                        </div>

                                        <div class="share-btn mt-4 post-single">
                                           
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
                                    </article> -->

                                  <?php
                                    $featured = new WP_Query( 'post_type=post&posts_per_page=1' );

                                    if($featured->have_posts()) :
                                      while($featured->have_posts()) :     $featured->the_post(); ?>
                                      
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
                                                  $excerpt = get_the_excerpt();
                                                  
                                                  $excerpt = substr($excerpt, 0, 260);
                                                  $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                                  echo $result;
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
                                    </article>

                                      <?php

                                    endwhile;
                                    wp_reset_postdata();
                                  endif;
                                  ?>


                                </div> <!-- featured post end-->



                                <div class="blog-post-wrapper">

                                <?php 
                                  $allpost = new WP_Query( 'offset=1' );
                                    if( $allpost->have_posts() ) : 
                                        while( $allpost->have_posts() ) :
                                          $allpost->the_post(); ?>

                                            <article class="bg-light p-3 my-3 wow animated fadeInUp">
                                        <div class="row">
                                            <div class="col-lg-5 mb-3 ">
                                                <a href="<?php the_permalink(); ?>">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid wow animated zoomIn">
                                                </a>
                                            </div>
                                            <div class="col-lg-7">
                                                <h2 class="post-heading my-3">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>

                                                <div class="post-meta mb-3">
                                                    <span><strong>By: </strong><?php the_author_posts_link(); ?></span> |
                                                    <span><strong>On: </strong><?php the_date();echo(' '); the_time(); ?></span> |
                                                    <span><strong>In: </strong><?php the_category(', '); ?></span>
                                                </div>

                                                <div class="prg">
                                                <p>
                                                <?php
                                                  $excerpt = get_the_excerpt();
                                                  
                                                  $excerpt = substr($excerpt, 0, 200);
                                                  echo $excerpt;
                                                ?></p>
                                                </div>

                                                <div class="more-link  text-right">
                                                    <a href="<?php the_permalink(); ?>" class="more">Read More &raquo;</a>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="share-btn mt-4">
                                                    <!-- <strong class="float-left"><strong>Share:</strong></p> -->
                                                    <ul class="nav justify-content-center">
                                                        <li class="nav-item"><a href="#" class="nav-link"
                                                                style="background: rgb(255, 38, 0);"><i
                                                                    class="fab fa-pinterest-p"></i></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link"
                                                                style="background: #0073FF;"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link"
                                                                style="background: #1DA1F2;"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link"
                                                                style="background: #0077B5;"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </article>
                                    <!--single post end-->

                                    <?php    endwhile;

                                    else :
                                        echo( 'NO Post found' );

                                    endif; ?>


                                </div> <!-- main post end -->
                            </div> <!-- post section end -->
                        </div> <!-- right side end-->

                        <div class="col-md-4 mb-4">
                            <aside>
                                <div class="sidebar-widget-wrapper">

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