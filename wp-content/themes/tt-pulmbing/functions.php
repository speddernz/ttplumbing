<?php 


	function get_nav(){
	include('nav.php');
}


	function get_header_home(){
	include('header-home.php');
}

	function get_home_mob_nav(){
	include('home-mob-nav.php');
}

function get_header_no_follow(){
	include('header-no-follow.php');
}

	function get_mob_nav(){
	include('mob-nav.php');	
}
	function get_mob_rotator(){
	include('mob-rotator.php');	
}

	function get_sidebard(){
	include('sidebar.php');	
}

		
	

function get_nav_link($text, $pageId){
	
	$selected = (is_page($pageId))? ' class="selected" ': ' ';
	
	return '<a'.$selected.'href="'.get_page_link($pageId).'">'.$text.'</a>';
}

function get_dropdown_menu($podName){
	
	  //create pods for brands and product categories
		$thePod = new Pod($podName);
		$thePod->findRecords('name ASC', -1);
		$totalItems = $thePod->getTotalRows();
		$menu = "";
							
		if($totalItems>0):
		
				$menu = '<ul class="dropdown">';
				
				while($thePod->fetchRecord()) :
					
					$name = $thePod->get_field('name');
					$slug = $thePod->get_field('slug');
					 
				$menu	.= '<li><a href="'.get_bloginfo('home')."/".$podName."/".$slug.'">'.$name.'</a></li>';

				endwhile;
				
				$menu .= '</ul>';

      endif;
			
			return $menu;
}



?>