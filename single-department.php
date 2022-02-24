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
        <div class="testemonial">
                <?php
                    $imageone = get_field('image_slider_1');
                    $imageTwo=  get_field('image_slider_2');
                    $imageThree = get_field('image_slider_3');
                    $imageFor = get_field('image_slider_4');
                    $imageFive = get_field('image_slider_5');
                    $imageSixth = get_field('image_slider_6');
                    $imageSeven = get_field('image_slider_7');
                    $imageeight = get_field('image_slider_8');
                    $imagenine = get_field('image_slider_9');
                    $imageten = get_field('image_slider_10');
                ?>
                <div class="flex">
                    <div class="per-image-tes">
                        <?php
                            for($i = 1; $i <= 10; $i++){
                                $loopall = "image_slider_".$i;
                                if(!empty(get_field($loopall))){
                                ?>
                                <div class="cont-flex-test">
                                    <div class="d-flex justify-content-center">
                                        <img class="d-block w-100" src="<?php echo esc_url(get_field($loopall)['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                                    </div>
                                    <p class="p-image"> <?php   echo the_field('text-'.$i); ?></p>
                                </div>
                                <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left  arrows-all"> <i class="fas fa-chevron-left"></i></div>
                    <div class="right arrows-all"> <i class="fas fa-chevron-right"></i> </div>
                </div>
        </div>
    </div>
<?php	} // end while
} // end if
?>

    <script src="<?php echo get_theme_file_uri('/assits/js/single-department.js') ?>"></script>
    <script src="<?php echo get_theme_file_uri('/assits/js/carousel.js') ?>"></script>

    <?php get_footer(); ?>



