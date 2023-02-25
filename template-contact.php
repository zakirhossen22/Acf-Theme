

<?php get_header();
/*
Template Name: Contact Template

*/
?>
      <?php require_once get_template_directory(). '/inc/breadcum.php';?>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3 class="mb-4"><?php echo get_field('contact_form_title','options'); ?></h3>
                              <div id="form-message-warning" class="mb-4"></div>
                              <div id="form-message-success" class="mb-4">
                              <?php echo get_field('contact_form_text','options'); ?>!
                              </div>
                              <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                               
                                 <?php echo do_shortcode('[contact-form-7 id="650" title="Contact"]');?>
                                 </div>
                         
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                              <h3><?php echo get_field('adress_title','options'); ?></h3>
                              <p class="mb-4"><?php echo get_field('adress_description','options'); ?></p>
                              <?php
                              $adresses = get_field('adress_item','options');
                              foreach($adresses as $adress){
                              ?>
                               <div class="dbox w-100 d-flex align-items-start">
                                 <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa <?php echo $adress['adress_item_icon']; ?>"></span>
                                 </div>
                                 <div class="text pl-3">
                                    <p><span><?php echo $adress['adress_item_name']; ?>:</span><?php echo $adress['adress_item_text']; ?></p>
                                 </div>
                              </div>
                              <?php
                              }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="map" class="map"></div>
    <?php get_template_part('template-parts/cta');?>
<?php get_footer();?>

