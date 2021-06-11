<?php get_header(); ?>
    <!-- Hero Section -->
    <section id="hero">
        <div class="container-fluid">
            <div class="hero-bg-cover d-flex align-items-center bg-style">

                <div class="container hero-content">
                    <div class="row">
                        <div class="col-10 col-md-8 col-lg-6 mx-auto">

							<?php 
								if(get_theme_mod('hero-top-avatar')){ ?>
									<div class="hero-avatar">
										<img src="<?php echo get_theme_mod('hero-top-avatar'); ?>" class="img-fluid avatar-top-img  wow slideInDown" />
									</div> <?php
								}
							?>
                            <div class="hero-info">
                            <?php
                              if(get_theme_mod('welcome-note')){ ?>
                                <h3 class="head-line  wow fadeIn"><?php echo get_theme_mod('welcome-note', 'Hi, This is me'); ?></h3> <?php
                              };

                              if(get_theme_mod('name')){ ?>
                                <h2 class="name  wow fadeIn"><?php echo get_theme_mod('name', 'Mehedi Hassan'); ?></h2><?php
                              };

                              if(get_theme_mod('extra-info')){ ?>
                                <h3 class="profession  wow fadeIn"><i class="fas fa-share"></i><?php echo get_theme_mod('extra-info', 'front-end developer'); ?></h3> <?php
                              };
                            
                            ?>
                                
                                 


                                <p class="typed">
                                    <span class="text-slider type"></span>
                                    <span class="typed-cursor" style="animation-iteration-count: infinite;"></span>
                                </p>


                                

                                
                                <a href="<?php
                                  if(get_theme_mod('btn-link')){
                                    echo get_theme_mod('btn-link', 'https://www.fiverr.com/m_hassan_coder');
                                  }?>" target="_blank"
                                    class="hire-btn btn btn-success  wow fadeIn">
                                    <?php
                                  if(get_theme_mod('btn-text')){
                                    echo get_theme_mod('btn-text', 'Hire me');
                                  }
                                
                                ?></a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- About Section -->
    <section id="about" class="bg-style">
        <div class="container-fluid">
            <div class="container">

                <div class="about-content">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 order-md-1 order-2">
                            <div class="profile-info">
                                
                                <?php if(get_theme_mod('small-title')){ ?>
                                  <h4 class="small-heading  wow fadeIn"><?php echo get_theme_mod('small-title', 'about me') ?></h4> <?php
                                } ?>

                                <?php if(get_theme_mod('big-title')){ ?>
                                  <div class="section-heading  wow fadeIn">
                                    <h2 class=""><?php echo get_theme_mod('big-title', 'personal details') ?></h2>
                                </div> <?php
                                } ?>
                                

                                <div class="details">
                                    <?php if(get_theme_mod('details')){ ?>
                                      <p class="description  wow fadeIn"><?php echo get_theme_mod('details', 'Hi, I am Md. Mehedi Hassan. I am a professional Front-end
                                            Developer. I can Design any kind of SEO friendly website by HTML5, CSS3 &
                                            jQuery. I can create a responsive design with Bootstrap4 which is useful for
                                            supporting your site in any device.') ?></p> <?php
                                    } ?>
                                    
                                    <?php if(get_theme_mod('details-table')){
                                      echo get_theme_mod('details-table', '
                                      <table class="table others-info  wow fadeIn">
                                      <tr>
                                          <th>Age</th>
                                          <td>22</td>
                                      </tr>
                                      <tr>
                                          <th>Nationality</th>
                                          <td>Bangladeshi</td>
                                      </tr>
                                      <tr>
                                          <th>Phone</th>
                                          <td>+880 1759-757260</td>
                                      </tr>
                                      <tr>
                                          <th>Email</th>
                                          <td>mehedihassanpro@gmail.com</td>
                                      </tr>
                                  </table>'); 
                                    } ?>

                                    

                                    

                                    <div class="social-link  wow fadeIn">
										<?php 
											if(is_active_sidebar('social-btn-menu')){
												dynamic_sidebar('social-btn-menu');
											} else { ?>
                                        <ul class="nav">
                                          <?php if(get_theme_mod('facebook')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com') ?> "
                                            target="_blank" class="nav-link facebook"><i
                                                class="fab fa-facebook-f"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('twitter')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('twitter', 'https://twitter.com') ?> "
                                            target="_blank" class="nav-link twitter"><i
                                                class="fab fa-twitter"></i></a></li> <?php
                                          } ?>
                                            
                                          <?php if(get_theme_mod('linkedin')){ ?>
                                            <li class="nav-item"><a
                                                    href="<?php echo get_theme_mod('linkedin', 'https://linkedin.com') ?>"
                                                    target="_blank" class="nav-link linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('instagram')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('instagram', 'https://instagram.com') ?>"
                                                    target="_blank" class="nav-link instagram"><i
                                                        class="fab fa-instagram"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('skype')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('skype', 'https://skype.com') ?>"
                                                    target="_blank" class="nav-link skype"><i
                                                        class="fab fa-skype"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('github')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('github', 'https://github.com') ?>" target="_blank"
                                                    class="nav-link github"><i class="fab fa-github"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('pinterest')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('pinterest', 'https://pinterest.com') ?>"
                                                    target="_blank" class="nav-link pinterest"><i
                                                        class="fab fa-pinterest"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('dribbble')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('dribbble', 'https://dribbble.com') ?>" target="_blank"
                                                    class="nav-link dribbble"><i class="fab fa-dribbble"></i></a></li> <?php
                                          } ?>

                                          <?php if(get_theme_mod('medium')){ ?>
                                            <li class="nav-item"><a href="<?php echo get_theme_mod('medium', 'https://medium.com') ?>"
                                                    target="_blank" class="nav-link medium"><i
                                                        class="fab fa-medium"></i></a></li> <?php
                                          } ?>
                                        </ul>
										<?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <?php if(get_theme_mod('about-profile-img')){ ?>
                          <div class="col-md-4 col-lg-4 ml-lg-auto order-md-2 order-1 mb-5  wow fadeIn">
                          <div class="profile-img">
                              <img src="<?php echo get_theme_mod('about-profile-img', get_bloginfo('template_directory').'/img/me-2.png'); ?>" alt="" class="img-flui">
                          </div>
                      </div> <?php
                        } ?>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Section Services -->
    <section id="services" class="bg-style">
        <div class="container-fluid">
            <div class="container">

                <div class="service-content">

                    <div class="section-heading text-center">
                        <?php if(get_theme_mod('ss-heading')){  ?>
                          <h2 class="  wow fadeIn"><?php echo get_theme_mod('ss-heading', 'My Offered Services') ?> </h2> <?php
                        } ?> 

                        <?php if(get_theme_mod('ss-title-desc')){ ?>
                          <p class="text-capitalize  wow fadeIn"><?php echo get_theme_mod('ss-title-desc', 'Some of my special services for you!') ?> </p> <?php
                        } ?>
                    </div>

                    <div class="row">
                    <?php 
                        $service = new WP_Query([
                          'post_type'     => 'services',
                          'posts_per_page'=> 12,
                        ]);

                        if($service->have_posts()) :
                          while($service->have_posts()) :
                            $service->the_post(); ?>
                            <div class="col-md-6 col-lg-4 mb-4  wow fadeIn">
                              <div class="service text-center">
                                  <div class="icon">
                                      <i class="fas fa-<?php echo get_post_meta($post->ID, 'service_icon_name', true); ?>"></i>
                                  </div>
                                  <h3 class="heading"><?php the_title(); ?></h3>
                                  <p class=""><?php the_content(); ?></p>

                                  <a href="<?php echo get_post_meta($post->ID, 'service_btn_link', true); ?>" target="_blank"
                                      class="hire-btn btn btn-success" style="margin: 50px 0 20px 0;">Hire me</a>
                              </div>
                          </div>
                            <?php 
                          endwhile;
                          wp_reset_postdata();
                        else :
                          echo '<p class="text-center text-light">No Services found</p>';
                        endif;
                      ?>

                    </div>
                </div>
    </section>
    <!-- Section Services End -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="bg-style">
        <div class="contianer-fluid">
            <div class="container">

                <div class="portfolio-content">

                    <div class="section-heading text-center">
                        <?php if(get_theme_mod('ps-heading')){  ?>
                          <h2 class="  wow fadeIn"><?php echo get_theme_mod('ps-heading', 'some of my work') ?> </h2> <?php
                        } ?> 

                        <?php if(get_theme_mod('ps-title-desc')){ ?>
                          <p class="text-capitalize  wow fadeIn"><?php echo get_theme_mod('ps-title-desc', 'ake a look at some of my beautiful projects!') ?> </p> <?php
                        } ?>
                    </div>

                    <div class="portfolio-menu mb-5">
                        <ul class="nav justify-content-center  wow fadeIn">
                            <li class="nav-item active mb-3" data-filter="*">
                                All
                            </li>
                            
                            <?php if(get_theme_mod('item-1')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-1', 'item-one'); ?>">
                               <?php echo get_theme_mod('item-1', 'item-one'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-2')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-2', 'item-two'); ?>">
                               <?php echo get_theme_mod('item-2', 'item-two'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-3')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-3', 'item-three'); ?>">
                               <?php echo get_theme_mod('item-3', 'item-three'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-4')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-4', 'item-four'); ?>">
                               <?php echo get_theme_mod('item-4', 'item-four'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-5')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-5', 'item-five'); ?>">
                               <?php echo get_theme_mod('item-5', 'item-five'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-6')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-6', 'item-six'); ?>">
                               <?php echo get_theme_mod('item-6', 'item-six'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-7')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-7', 'item-seven'); ?>">
                               <?php echo get_theme_mod('item-7', 'item-seven'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-8')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-8', 'item-eight'); ?>">
                               <?php echo get_theme_mod('item-8', 'item-eight'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-9')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-9', 'item-nine'); ?>">
                               <?php echo get_theme_mod('item-9', 'item-nine'); ?>
                               </li> <?php
                            } ?>

                            <?php if(get_theme_mod('item-10')){ ?>
                               <li class="nav-item  mb-3" data-filter=".<?php echo get_theme_mod('item-10', 'item-ten'); ?>">
                               <?php echo get_theme_mod('item-10', 'item-ten'); ?>
                               </li> <?php
                            } ?>

                        </ul>
                    </div>

                    <div class="portfolios row  wow fadeIn">
                      <?php 
                        $portfolio = new WP_Query([
                          'post_type'     => 'portfolios',
                          'posts_per_page'=> 100,
                        ]);

                        if($portfolio->have_posts()) :
                          while($portfolio->have_posts()) :
                            $portfolio->the_post(); ?>
                            <div class="col-md-6 col-lg-4 item <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>  mb-4">
                              <div class="content">
                                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                  <div class="overlay">
                                      <h4 class="text-uppercase text-light lead"><?php the_title(); ?></h4>
                                      <a href="<?php echo get_post_meta($post->ID, 'portfolio_link', true); ?>" target="_blank" class=""><i
                                              class="fas fa-eye"></i></a>
                                  </div>
                              </div>
                            </div> <?php 
                          endwhile;
                          wp_reset_postdata();
                        else :
                          echo '<p class="text-center text-light">No portfolio found</p>';
                        endif;
                      ?>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->


    <!-- Section Review -->
    <section id="review" class="bg-style">
        <div class="container-fluid">
            <div class="container">

                <div class="review-content">
                    <div class="section-heading text-center">
                        <?php if(get_theme_mod('rs-heading')){  ?>
                          <h2 class="  wow fadeIn"><?php echo get_theme_mod('rs-heading', 'What people say') ?> </h2> <?php
                        } ?> 

                        <?php if(get_theme_mod('rs-title-desc')){ ?>
                          <p class="text-capitalize  wow fadeIn"><?php echo get_theme_mod('rs-title-desc', 'what people exactly say for my job?') ?> </p> <?php
                        } ?>
                    </div>


                    <div class="review-slider-wrapper   wow fadeIn">
                        <div class="owl-carousel owl-theme container">

                          <?php
                            $review = new WP_Query([
                              'post_type'     => 'customslider',
                              'posts_per_page'=> 10,
                            ]);

                            if($review->have_posts()) :
                              while($review->have_posts()) :
                                $review->the_post(); ?>
                                <div class="row">
                                  <div class="col-md-8 col-lg-6 mx-auto">
                                      <h2 class="icon"><i class="fas fa-quote-left"></i></h2>
                                      <div class="item text-center">

                                          <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid mx-auto">
                                          <h3 class="name  wow fadeIn"><?php the_title(); ?></h3>
                                          <p class="quote  wow fadeIn"><?php the_content(); ?></p>
                                      </div>
                                  </div>
                                </div>
                              <?php 
                              endwhile;
                            else :
                              echo '<p class="text-center text-light">No Review Found!!</p>';
                            endif;
                          ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section Review End -->


    <!-- Section contact -->
    <section id="contact" class="bg-style">
        <div class="container-fluid">
            <div class="container">

                <div class="contact-content">
                    <div class="section-heading text-center">
                        <?php if(get_theme_mod('cs-heading')){  ?>
                          <h2 class="  wow fadeIn"><?php echo get_theme_mod('cs-heading', 'Contact me') ?> </h2> <?php
                        } ?> 

                        <?php if(get_theme_mod('cs-title-desc')){ ?>
                          <p class="text-capitalize  wow fadeIn"><?php echo get_theme_mod('cs-title-desc', 'Feel free to contact me') ?> </p> <?php
                        } ?>
                    </div>
					
					


                    <div class="contact-form">
                        <?php
                          if(is_active_sidebar('contact-form')){
                            dynamic_sidebar('contact-form');
                          } else {  ?>
                        	<div class="contact-form">

                        <?php 
                          $name = $_POST["name"];
                          $email = $_POST["email"];
                          $subject = $_POST["subject"];
                          $message = $_POST["messages"];
                          $errors = '';

                          if($_POST["submit"]){
                            if(!$name){
                              $errors .= '<p>Input your name. </p>';
                            } else {
                              $name = filter_var($name, FILTER_SANITIZE_STRING);
                            }
                            
                            if(!$subject){
                              $errors .= '<p>Input your subject.</p>';
                            } else {
                              $subject = filter_var($subject, FILTER_SANITIZE_STRING);
                            } 

                            if(!$email){
                              $errors .= '<p>Input your email.</p>';
                            } else {
                              $subject = filter_var($subject, FILTER_SANITIZE_EMAIL);
                              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                $errors .= '<p>Input valid email</p>';
                              }
                            } 

                            if(!$message){
                              $errors .= '<p>Input your message.</p>';
                            } else {
                              $message = filter_var($message, FILTER_SANITIZE_STRING);
                            }

                            if($errors){
                              echo '<div class="alert alert-warning text-danger text-center">' .$errors. '</div>';
                            } else {
							  
                              $to = get_theme_mod('contact-email','mehedihassanpro@gmail.com');
                              $subject = 'contact';
                              $message = '
                                <p>Name:' .$name. '</p>
                                <p>Subject:' .$subject. '</p>
                                <p>Email:' .$email. '</p>
                                <p><em>Message:</em>' .$message. '</p>
                              ';
                              $headers = 'Content-type: text/html';
							  $successMessage = get_theme_mod('success-message', 'Message sent');
                              
                              if(mail($to, $subject, $message, $headers)){
                                echo '<div class="alert alert-success text-success text-center">'.$successMessage.'</div>';
                              } else {
                                echo '<div class="alert alert-warning text-danger text-center">message not sent</div>';
                              }
                            }

                          }
                          


                          
                        
                        ?>
                        <form class="form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control name  wow slideInLeft" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
                                      </div>

                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control subject  wow slideInLeft" placeholder="Your Subject" value="<?php echo $_POST['subject']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control email  wow slideInLeft" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="messages" id="" cols="30" rows="10" class="form-control message  wow slideInRight"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Send Message" class="btn btn-success sub-btn mt-4 wow slideInUp">
                        </form>
                        
                    </div>
                          <?php }
                        ?>
                        
                    </div>
<!-- 		contact form end			 -->
					
					
					
                </div>

            </div>
        </div>
    </section>
    <!-- Section contact End -->





<?php get_footer(); ?>