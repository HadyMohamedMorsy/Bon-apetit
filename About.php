<?php /* Template Name: About */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/About.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>

    <!-- about bonabeteh -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-justify">
                    <?php echo the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6">
            <img src="<?php echo get_theme_file_uri('/assits/images/photo1.png') ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="img">
            </div>
        </div>
    </div>
    <!-- about bonabeteh -->

<?php get_footer(); ?>
<!-- footer -->