<head></head>

<div id = "container">
<?php get_header() ?>

<body>
<div class = "content">

<div id = "front-page-carousel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php $latest_cat_post = new WP_Query( array('category__in' => array(5), 'posts_per_page' => 4)); 
	if( $latest_cat_post->have_posts() ) :
	while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
      	<div class = "item"> <div class = "excerpt"> <h3> <?php the_title() ?></h3><p> <?php the_content() ?> </p> </div><div id = "image"> <?php the_post_thumbnail(); ?> </div> </div>
	<?php endwhile;
	endif; ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class = "post-feed" id = "cat-feed">
<?php $menu = wp_get_nav_menu_object( 'Main_Cat' );
   	$menu_items = wp_get_nav_menu_items($menu);
    	foreach ($menu_items as $obj) {
        	$objid = $obj->object_id;
		$latest_cat_post = new WP_Query( array('category__in' => array($objid), 'posts_per_page' => 1)); 
	if( $latest_cat_post->have_posts() ) :
	while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  
      	?> <div class = "post"><h1> <?php echo get_cat_name(get_category($objid)->category_parent); ?> </h1><?php echo get_the_post_thumbnail($postobj);?></div><?php
   	 endwhile;
	endif; }?>
</div>

</div>
</body>

<?php get_footer() ?>
</div>
<script>
$('.item:first').addClass('active');
</script>