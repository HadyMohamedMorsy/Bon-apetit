<?php /* Template Name: Home */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/Home.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>

    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                    <?php
                        $imageone = get_field('slider-1');
                        if(!empty($imageone)) : ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo esc_url($imageone['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                        </div>
                    <?php endif; ?>
                    <?php
                    $imagetwo = get_field('slider-2');
                    if(!empty($imagetwo)) : ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url($imagetwo['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                        </div>
                    <?php endif; ?>

                    <?php
                        $imagethree = get_field('slider-3');
                        if(!empty($imagethree)) : ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url($imagethree['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                        </div>
                    <?php endif; ?>
                    <?php
                    $imagethree = get_field('slider-4');
                    if(!empty($imagethree)) : ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo esc_url($imagethree['url']); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                        </div>
                    <?php endif; ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <!-- carousel -->
    <!-- story -->
    <div class="story">
        <div class="white-story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 padding-content"> 
                        <h1>Our Story of Success</h1>
                        <?php echo the_content() ?>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center"> 
                        <img src="<?php echo get_theme_file_uri('/assits/images/CATERING1.png') ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- story -->
    <!-- our services -->
    <div class="services">
        <div class="bac-services">
            <h2 class="header-services">Our food section</h2>
            <div class="container">
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'department',
                            'posts_per_page' => 6 
                            );
                            //Preparing the Loop
                            $query = new WP_Query( $args );

                                //In while loop counter increments by one $counter++
                                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="col-lg-4 mt-5 mb-5">
                                        <a href="<?php echo get_permalink();?>" class="overhere">
                                            <div class="over-black">
                                            <?php the_post_thumbnail( '', ['class'  => 'img', 'alt' => get_bloginfo( 'name' )]); ?>
                                                <div class="content-text">
                                                    <div class="content">
                                                        <span class="read_more"> <?php the_title(); ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            endwhile; wp_reset_postdata(); endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- our services -->

<?php get_footer(); ?>
<!-- footer -->