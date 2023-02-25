<?php
/*
Template Name: About Template

*/
get_header();?>
     <?php require_once get_template_directory(). '/inc/breadcum.php';?>
    <?php get_template_part('template-parts/about');?>
<?php
if(get_field('counters_section_show','option')){
?>
<?php get_template_part('template-parts/counter');?>
<?php
}
?>
   <!-- testimonial-item-start -->
<?php get_template_part('template-parts/testimonial');?>
<!--testimonial-item-end -->>

<!--faq-item-start -->
<?php get_template_part('template-parts/faq');?>
<!--faq-item-end -->  

<!--cta-item-start -->
<?php get_template_part('template-parts/cta');?>
<!--cta-item-end -->

   <?php get_footer();?>