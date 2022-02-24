<?php /* Template Name: Menu */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/Menu.css') ?>" />
</head> 
<!-- create header -->
<?php require_once(__DIR__.'/inc/nav.php'); ?>

    <!-- Menu bonabeteh -->
    <div class="container">
            <div class="row justify-content-center menu-categroy">
                <?php
                    $terms = get_terms( 'categories' );
                    foreach ( $terms as $term ) {
                        echo '<span  data-items=".'.$term->name.'">' . $term->name . '</span>';
                    }
                ?>
            </div>
        </div>
        <div class="menu">
            <div class="container ">
                <!-- single loop -->
                <?php
                $args = array(
                        'post_type' => 'menu-bon',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categories',
                                'field'    => 'slug',
                                'terms'    => array('DESERTS','HOT-DRINKS','HOT-MEALS','ICE-CREAM','JUICE-COCKTAILS','Salad','SANDWITHCH')
                            ),
                        ),
                    );
             //Set up a counter
                $counter = 0;
                //Preparing the Loop
                $query = new WP_Query( $args );

                //In while loop counter increments by one $counter++
                if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); $counter++;

                //We are in loop so we can check if counter is odd or even
                
                    if($counter % 2 == 0 ) : ?>
                    <?php 
                        $cats = get_the_terms(get_the_id() , 'categories');
                        $all_cat = array();
                        foreach($cats as $cat){
                            $all_cat [] = $cat->name;
                        }
                    ?>
                    <div class="row position-relative padding-items <?php echo implode(",",$all_cat); ?>">
                        <div class="border-menu-single">
                            <img src="<?php echo  get_theme_file_uri('/assits/images/Rectangle 77.png')?>" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="images-product">
                                <?php the_post_thumbnail( '', ['class'  => 'img left-margin-single', 'alt' => get_bloginfo( 'name' )]); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <h3 class="header-items-product"><?php the_title(); ?></h3>
                            <div class="d-flex justify-content-center padding-detealis row">
                                <?php 
                                    $existsingle = get_field('single');
                                    $existcombo = get_field('single');
                                    $existcombok = get_field('k-single');
                                    $existcombok = get_field('k-combo');
                                ?> 
                                <?php if($existsingle || $existcombo || $existcombok || $existcombok) :  ?>
                                <?php if(!empty($existsingle) ) : ?>
                                <div class="deteails">
                                    <h6> R-Single</h6>
                                    <p class="price"><?php echo the_field('single') ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombo) ) :?>
                                <div  class="deteails">
                                    <h6> R-Combo</h6>
                                    <p class="price"><?php echo the_field('combo')?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombok) )  :?>
                                <div class="deteails">
                                    <h6> K-Single</h6>
                                    <p class="price"><?php echo the_field('k-single') ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombok) ) :?>
                                <div  class="deteails">
                                    <h6> K-Combo</h6>
                                    <p class="price"><?php echo the_field('k-combo')?></p>
                                </div>
                                <?php endif; ?>
                                <?php else : ?>
                                <div  class="deteails">
                                    <p class="price-another price special"><?php echo the_field('another_price')?></p>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php else: //It's odd ?>
                        <?php 
                            $cats = get_the_terms(get_the_id() , 'categories');
                            $all_cat = array();
                            foreach($cats as $cat){
                                $all_cat [] = $cat->name;
                            }
                        ?>
                    <div class="row position-relative padding-items <?php echo implode(",",$all_cat); ?>">
                        <div class="border-menu-double">
                        <img src="<?php echo  get_theme_file_uri('/assits/images/Rectangle 77.png')?>" alt="">
                        </div>
                        <div class="col-lg-4 order-effetct-first">
                            <h3 class="header-items-product"><?php the_title(); ?></h3>
                            <div class="d-flex justify-content-center padding-detealis row">
                            <?php 
                                    $existsingle = get_field('single');
                                    $existcombo = get_field('single');
                                    $existcombok = get_field('k-single');
                                    $existcombok = get_field('k-combo');
                               
                               ?> 
                               <?php if($existsingle || $existcombo || $existcombok || $existcombok) :  ?>
                                <?php if(!empty($existsingle) ) :?>
                                <div class="deteails">
                                    <h6> R-Single</h6>
                                    <p class="price"><?php echo the_field('single') ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombo) ) :?>
                                <div  class="deteails">
                                    <h6> R-Combo</h6>
                                    <p class="price"><?php echo the_field('combo')?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombok) ) :?>
                                <div class="deteails">
                                    <h6> K-Single</h6>
                                    <p class="price"><?php echo the_field('k-single') ?></p>
                                </div>
                                <?php endif; ?>
                                <?php if(!empty($existcombok) ) :?>
                                <div  class="deteails">
                                    <h6> K-Combo</h6>
                                    <p class="price"><?php echo the_field('k-combo')?></p>
                                </div>
                                <?php endif; ?>
                                <?php else : ?>
                                    <div  class="deteails">
                                        <p class="price-another price special"><?php echo the_field('another_price')?></p>
                                    </div>                                
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-8 order-effetct-secound">
                            <div class="images-product">
                                <?php the_post_thumbnail( '', ['class'  => 'img right-margin-Double', 'alt' => get_bloginfo( 'name' )]); ?>
                            </div>
                        </div>
                    </div>
                    <?php  endif;

                    endwhile; wp_reset_postdata(); endif;
                ?>
        </div>
    <!-- Menu bonabeteh -->


<script src="<?php echo get_theme_file_uri('/assits/js/menu.js') ?>"></script>
<?php get_footer(); ?>
<!-- footer -->