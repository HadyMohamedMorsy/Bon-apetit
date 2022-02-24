<?php /* Template Name: Catring */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/Catring.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>


    <!-- Catring bonabeteh -->
        <div class="container Catring pt-5">
        <div class="col-lg-12">
            <h2 class="main-header">About Catering</h2>
            <video  data-object-fit="cover" data-object-position="center center" poster="<?php echo get_theme_file_uri('/assits/images/YASS8209.png') ?>" id="autoVideo">
                <source src="<?php echo get_theme_file_uri('/assits/images/web.mkv') ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img src="<?php echo get_theme_file_uri('/assits/images/Untitled-3.png') ?>" alt="" id="video" class="img-video">
        </div>
        <div class="menu">
            <h2 class="main-header pt-5 text-center">Menu</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="first">
                            <li><?php echo  the_field('first'); ?></li>
                            <li><?php echo  the_field('secound'); ?></li>
                            <li><?php echo  the_field('thired'); ?></li>
                            <li><?php echo  the_field('forth'); ?></li>
                            <li><?php echo  the_field('five'); ?></li>
                            <li><?php echo  the_field('six'); ?></li>
                            <li><?php echo  the_field('seven'); ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="secound">
                            <li><?php echo  the_field('eight'); ?></li>
                            <li><?php echo  the_field('nine'); ?></li>
                            <li><?php echo  the_field('ten'); ?></li>
                            <li><?php echo  the_field('eleven'); ?></li>
                            <li><?php echo  the_field('twilve'); ?></li>
                            <li><?php echo  the_field('thieteen'); ?></li>
                            <li><?php echo  the_field('forteen'); ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <a href="http://localhost/Bon/wp-content/uploads/2022/02/catering-menu.pdf">
                            <img src="<?php echo get_theme_file_uri('/assits/images/Vector-Smart-Object.png') ?>" alt="" class="img order-1">
                            <p class="order-2">Tap Here To Get Full Menu</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="main-header pt-5 text-center">Order</h2>
                
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>

            </div>
        </div>

    </div>

    <!-- Catring bonabeteh -->

<script src="<?php echo get_theme_file_uri('/assits/js/catring.js') ?>"></script>
<?php get_footer(); ?>
<!-- footer -->