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
  
                                  <p class="lead">This is your Search result...</p>


                                </div> <!-- featured post end-->



                                <div class="blog-post-wrapper">

                                <?php 
                                    if(have_posts() ) : 
                                        while( have_posts() ) :
                                          the_post(); ?>

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
                                        ?>

                                        <p class="lead">No post found!!!</p>

                                        <?php

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