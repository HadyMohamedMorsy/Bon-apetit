<?php /* Template Name: Branches */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/Branches.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>


    <!-- Branches bonabeteh -->
    <div class="container">
            <?php
                $args = array(
                    'post_type' => 'branches-bon',
                    );
                    //Preparing the Loop
                    $query = new WP_Query( $args );

                        //In while loop counter increments by one $counter++
                        if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="row pt-5">
                                <div class="col-lg-6 branch">
                                    <div class="content-branches"></div>
                                        <div class="content-bra">
                                            <h2>
                                                <?php  the_title(); ?>
                                            </h2>
                                            <span><?php echo  the_field('Phone'); ?></span>
                                        </div>
                                        <div>
                                            <p class="header-details"> <?php echo  the_field('header-details'); ?> </p>
                                            <p class="Adress"> <?php echo  the_field('details'); ?> </p>
                                        </div>
                                        
                                </div>
                                <div class="col-lg-6 img-branch">
                                    <div class="content-branches">
                                        <a href="<?php echo get_permalink();?>">
                                            <?php the_post_thumbnail( '', ['class'  => 'img radiues', 'alt' => get_bloginfo( 'name' )]); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endwhile; wp_reset_postdata(); endif;
                ?>
        </div>
    <!-- Branches bonabeteh -->

<?php get_footer(); ?>
<!-- footer -->