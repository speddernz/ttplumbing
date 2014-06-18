<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>




<div class="cont page-wrap">

<div class="container-fluid"> 
    <div class="row-fluid page-title">
     Contact
	
    </div>
    

</div>
</div>


<div class="hcont">
  <div class="slider-fluid">
    <div class="row-fluid hero">
  	
  	<img src="<?php bloginfo("template_url"); ?>/img/auckland-plumbers.jpg" alt="Auckland Plumbers" />

	<?php the_post(); ?>
	<?php the_content(); ?>


	</div>
    <!-- row-fluid end-->
  </div>
  <!-- slider-fluid end-->
</div>
<!--slid-cont end-->









<?php get_footer(); ?>

