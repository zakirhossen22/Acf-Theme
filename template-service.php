

<?php get_header();
/*
Template Name: Service Template

*/
?>
 <?php require_once get_template_directory(). '/inc/breadcum.php';?>


   <!-- about-start-here -->
   <?php get_template_part('template-parts/about');?>
   <!-- about-end-here -->

   <!-- pricing-start-here -->
   <?php get_template_part('template-parts/pricing');?>
   <!-- pricing-end-here -->

   <!--cta-start-here -->
   <?php get_template_part('template-parts/cta');?>
   <!-- cta-end-here -->

      
   <?php get_footer();?>