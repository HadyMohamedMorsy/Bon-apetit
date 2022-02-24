<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/single-branche.css') ?>" />
</head> 
<!-- create header -->
<body>
<?php require_once(__DIR__.'/inc/nav.php'); ?>

<?php 

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
    <!-- single Blog bonabeteh -->
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php $eVideo = get_field('video'); ?>
                <div class="cover-panner">
                    <?php if($eVideo) : ?>
                    <video  data-object-fit="cover" data-object-position="center center" poster="<?php echo get_theme_file_uri('/assits/images/YASS8209.png') ?>" id="autoVideo">
                        <source src="<?php echo get_theme_file_uri('/assits/images/web.mkv') ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <img src="<?php echo get_theme_file_uri('/assits/images/Untitled-3.png') ?>" alt="" class="img-video">
                    <?php else : ?>
                        <img src="<?php echo get_theme_file_uri('/assits/images/YASS8209.png') ?>" alt="" class="img radiues">

                    <?php endif;?>
                </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-6 branch">
                    <div class="content-branches"></div>
                        <div class="content-bra">
                            <h2> <?php the_title(); ?></h2>
                            <span> <?php echo  the_field('Phone'); ?></span>
                        </div>
                        <p class="header-details"><?php the_field('header-details'); ?></p>
                        <p class="Adress">
                            <?php the_field('details'); ?>
                        </p>
                </div>
                <div class="col-lg-6 img-branch">
                    <div class="content-branches">
                        <?php the_post_thumbnail( '', ['class'  => 'img radiues', 'alt' => get_bloginfo( 'name' )]); ?>
                    </div>
                </div>
            </div>
            <h2 class="main-header">Gallary</h2>
            <?php
                $imageone = get_field('image_1');
                $imagetwo = get_field('image_2');
                $imagethree = get_field('image_3');
                $imagefor = get_field('image_4');
                $imagefive = get_field('image_5');
                $imagesix = get_field('image_6');
                $imagesiven = get_field('image_7');
                $imageeight = get_field('image_8');
                $imagenine = get_field('image_9');
                $imageten = get_field('image_10');
                $imageele = get_field('image_11');
                $imagetwe = get_field('image_12');
            ?>
            <div class="row pt-5">

                    <?php
                        if(!empty($imageone)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imageone['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>

                    <?php
                        if(!empty($imagetwo)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagetwo['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagethree)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagethree['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagefor)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagefor['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>

                    <?php
                        if(!empty($imagefive)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagefive['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagesix)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagesix['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagesiven)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagesiven['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imageeight)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imageeight['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagenine)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagenine['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imageten)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imageten['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imageele)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imageele['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>


                    <?php
                        if(!empty($imagetwe)) : ?>
                        <div class="col-lg-4">
                            <img src="<?php echo esc_url($imagetwe['url']); ?>" alt="" class="img mb-2">
                        </div>
                    <?php endif; ?>

            </div>
    </div>
    <!-- single Blog bonabeteh -->
<?php	} // end while
} // end if
?>
<script src="<?php echo get_theme_file_uri('/assits/js/single_branche.js') ?>"></script>
<?php get_footer(); ?>



