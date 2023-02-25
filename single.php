

<?php get_header();?> 
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                  <h1 class="mb-0 bread">Blog Single</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 ftco-animate">
                 <?php the_content();?>
                  <div class="tag-widget post-tag-container mb-5 mt-5">
                     <div class="tagcloud">
                     <?php
                     if($posttags = get_the_tags()){
                        foreach($posttags as $tag) {
                           ?>
                            <a href="#" class="tag-cloud-link"><?php echo $tag->name;?></a>
                           <?php
                              
                           }

                     }
                     ?>
                     </div>
                  </div>
                  <div class="about-author d-flex p-4 bg-light">
                     <div class="bio mr-5">

                     <?php
                     $user = wp_get_current_user();
                     global $post;
                     $author_id = $post -> post_author;
                     if ( $user ){
                        ?>
                        <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                     <?php } ?>
                     </div>
                     <div class="desc">
                        <h3><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h3>
                        <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
                     </div>
                  </div>
                  <div class="pt-5 mt-5">
                     <?php
                  // If comments are open or we have at least one comment, load up the comment template.
                     if ( comments_open() || get_comments_number() ) :
                        comments_template();
                     endif;
                     ?>
                   
                     <!-- END comment-list -->
                  </div>
               </div>
               <!-- .col-md-8 -->
               <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                  <div class="sidebar-box">
                     <form action="#" class="search-form">
                        <div class="form-group">
                           <span class="fa fa-search"></span>
                           <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                     </form>
                  </div>
                  
                    
                     <?php dynamic_sidebar('sidebar-1');?>
                  <div class="sidebar-box ftco-animate">
                     <?php dynamic_sidebar('sidebar-2');?>
                  </div>
                  <div class="sidebar-box ftco-animate">
                     <?php dynamic_sidebar('sidebar-3');?>
                  </div>
                  <div class="sidebar-box ftco-animate">
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- .section -->
      <?php get_template_part('template-parts/cta');?>
 <?php get_footer();?>
