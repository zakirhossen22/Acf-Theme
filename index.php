
<?php get_header();

?>
<?php require_once get_template_directory(). '/inc/breadcum.php';?>
<section class="ftco-section">
<div class="container">
   <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
         <span class="subheading"><?php echo get_field('blog_section_sub_heading','options'); ?></span>
         <h2><?php echo get_field('blog_section_heading','options'); ?></h2>
      </div>
   </div>
   <div class="row d-flex">
<?php
      $args = array(
         'post_type' => 'post',
         'post_per_page' => '9',
      );
      $query = new WP_Query($args);
      while($query -> have_posts()){
         $query -> the_post();
      ?>
      <?php get_template_part('template-parts/blog');?>

      <?php
      }
      ?>
      </div>
      </div>
</section>

<?php get_footer();?>