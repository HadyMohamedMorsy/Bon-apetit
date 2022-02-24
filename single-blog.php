<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/single-blog.css') ?>" />
</head> 
<!-- create header -->
<body>
<?php require_once(__DIR__.'/inc/nav.php'); ?>


<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
        <div class="container">
            <div class="blog-cover row justify-content-center">
                <div class="col-lg-12">
                    <div class=" position-relative">
                        <?php the_post_thumbnail( '', ['class'  => 'img radiues', 'alt' => get_bloginfo( 'name' )]); ?>
                    </div>
                </div>
                <div class="col-lg-12 pt-5 pb-5 text-blog">
                    <h2 class="text-center mb-5"><?php the_title(); ?></h2>
                    <div class="text">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
<?php	} // end while
} // end if
?>

    <?php get_footer(); ?>



