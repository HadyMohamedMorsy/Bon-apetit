<?php /* Template Name: daepartment */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/blogs.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>
    <!-- our services -->
    <div class="container-fluid">
            <div class="blog-cover row justify-content-center">
                <div class="col-lg-12">
                    <div class=" position-relative">
                        <img src="<?php echo get_theme_file_uri('/assits/images/blogs.png') ?>" alt="" class="img radiues">
                        <div class="Blogs"> Our food section </div>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="bac-services">
                    <div class="container">
                        <div class="row">
                            <?php
                                $args = array(
                                    'post_type' => 'department',
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
                                                            <span class="read_more"> <?php the_title(); ?> </span>                                                            </div>
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
    </div>

    <!-- our services -->

<?php get_footer(); ?>
<!-- footer -->