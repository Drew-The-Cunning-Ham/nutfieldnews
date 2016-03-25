<head>
<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<title> Nutfield News </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<div id = "header">
<div id = "header-top">
<?php $latest_cat_post = new WP_Query( array('category__in' => array(3), 'posts_per_page' => 1)); 
if( $latest_cat_post->have_posts() ) :
while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();
the_post_thumbnail(); endwhile; endif; ?>
</div>
<div id = "header-nav">
<?php wp_nav_menu( array( 'menu' => 'nav' ) ); ?>
</div>
</div>