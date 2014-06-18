<?php 
/*Template Name: Home Page Template */
?>

<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=108817182544223";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="slid-cont">
  <div class="slider-fluid">
    <div class="row-fluid">
      
           
 <div class="flexslider">
  <ul class="slides">
    <li><img src="<?php bloginfo('template_url') ?>/img/slider/tap-installed-auckland.png" alt="Plumbing Auckland" /></li>
    <li><img src="<?php bloginfo('template_url') ?>/img/slider/waste-disposal-auckland.png" alt="Auckland Plumbers" /></li>
  
  </ul>
</div>
      

    </div>
    <!-- row-fluid end-->
  </div>
  <!-- slider-fluid end-->
</div>
<!--slid-cont end-->


<?php the_post(); ?>
<?php the_content(); ?>

  
  
  
  
 <?php get_footer(); ?>