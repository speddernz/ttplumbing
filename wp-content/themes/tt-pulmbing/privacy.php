<?php /* Template Name: Privacy Policy */ ?>

<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=108817182544223";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="cont page-wrap">

<div class="container-fluid"> 
    <div class="row-fluid page-title">
    <h1>Privacy Policy</h1>
	
    </div>
    

</div>
</div>


<div class="hcont">
  <div class="slider-fluid">
    <div class="row-fluid hero">
  	
  	<?php the_post();?>
    <?php the_content();?>


	</div>
    <!-- row-fluid end-->
  </div>
  <!-- slider-fluid end-->
</div>
<!--slid-cont end-->






<?php get_footer(); ?>