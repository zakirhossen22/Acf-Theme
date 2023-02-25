<!DOCTYPE html>
<html lang="en">
<head>
<title>ACF</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
</head>
<body<?php body_class();?> >
<div class="wrap">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="bg-wrap">
            <div class="row">
               <div class="col-md-6 d-flex align-items-center">
                  <p class="mb-0 phone pl-md-2">
                     <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> <?php echo get_field('header_mobile','option');?></a> 
                     <a href="#"><span class="fa fa-paper-plane mr-1"></span> <?php echo get_field('header_email','option');?></a>
                  </p>
               </div>
               <div class="col-md-6 d-flex justify-content-md-end">
                  <div class="social-media">
                     <p class="mb-0 d-flex">
                     <?php
                     $header_socialas = get_field('header_social','option');
                     foreach($header_socialas as $social){
                     ?>
                     <a href="<?php echo $social['header_social_icon_link'];?>" class="d-flex align-items-center justify-content-center"><span class="fa <?php echo $social['header_social_icon'];  ?>"><i class="sr-only">Facebook</i></span></a>
                     <?php
                     }
                     ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
   <a class="navbar-brand" href="<?php echo site_url();?>">Accounting</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="fa fa-bars"></span> Menu
   </button>
   <?php 
         wp_nav_menu(array(
            'theme_location'=> 'main-menu',
            'menu_class'=>'navbar-nav ml-auto',
            'container_class' => 'collapse navbar-collapse'
         ));
         ?>
</div>
</nav>
<!-- END nav -->