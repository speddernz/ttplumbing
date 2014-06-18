<?php /* Template Name: About */ ?>

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
     About
	
    </div>
    

</div>
</div>


<div class="hcont">
  <div class="slider-fluid">
    <div class="row-fluid hero">
  	
  	<img src="<?php bloginfo("template_url"); ?>/img/tt-plumbing-bathroom.jpg" alt="Plumbing Bathroom" />


	<div class="span8"> 



<?php the_post(); ?>
<?php the_content(); ?>


	


	</div>


	<div class="span2 hidden-phone">

	<div class="fb-like-box" data-href="https://www.facebook.com/pages/TT-Plumbing-Services/652524738109415" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div><br /><br />

	</div>

	</div>
    <!-- row-fluid end-->
  </div>
  <!-- slider-fluid end-->
</div>
<!--slid-cont end-->






<?php get_footer(); ?>