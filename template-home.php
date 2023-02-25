
<?php get_header();

/*
Template Name: Home Template

*/
?>
<div class="hero-wrap">
<div class="home-slider owl-carousel">
<?php
$sliders = get_field('slider_item','option');
foreach($sliders as $slider){
?>
<div class="slider-item" style="background-image:url(<?php echo $slider['slider_image']; ?>">
      <div class="overlay"></div>
      <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate">
               <div class="text w-100 text-center">
                  <h2><?php echo $slider['slider_sub_heading']; ?></h2>
                  <h1 class="mb-4"><?php echo $slider['slider_heading']; ?></h1>
                  <p><a href="<?php echo $slider['slider_btn_url']; ?>" class="btn btn-white"><?php echo $slider['slider_btn_text']; ?></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php
}
?>
</div>
</div>
<!-- about-section-satrt-here -->
<?php get_template_part('template-parts/about');?>
<!-- about-section-end-here -->
<!-- service-section-start-here -->
<?php get_template_part('template-parts/service');?>
<!-- about-section-end-here --> 

<!-- counter-section-satrt-here -->
<?php get_template_part('template-parts/counter');?>
<!-- counter-section-end-here -->

<?php get_template_part('template-parts/testimonial');?>

<!-- faq-section-start -->
<?php get_template_part('template-parts/faq');?>
<!-- faq-section-end-->

<!-- blog-section-start -->
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
         'post_per_page' => '3',
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
<!-- blog-section-end --> 

<!-- cta-section-start -->
<?php get_template_part('template-parts/cta');?>
<!-- cta-section-end -->

<!-- pricing-section-start -->
<?php get_template_part('template-parts/pricing');?>
<!-- pricing-section-end -->

<?php get_footer();?>