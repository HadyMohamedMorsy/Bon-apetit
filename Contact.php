<?php /* Template Name: Contact */ ?>
<!-- create header -->
<?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('/assits/css/contact.css') ?>" />
</head> 
<!-- create header -->
<body>
    <?php require_once(__DIR__.'/inc/nav.php'); ?>

    <!-- Contact bonabeteh -->
    <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-form">
                    <div class="content-header">
                        For Suggestions and Copmplaints
                    </div>
                    <p class="Adress"> 21 Wadi ELNIL Gazirat Mit Oqbah , Aqouza , Giza Governorate</p>

                    <h2 class="header-contact">Fast Delivery</h2>
                    <h2 class="header-contact"> <a href="#"> 19101 </a></h2>
                    <?php echo do_shortcode('[contact-form-7 id="168" title="Contact Form-2"]'); ?>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo get_theme_file_uri('/assits/images/ghh.png') ?>" alt="" class="img">
                        </div>
                        <div class="col-lg-6">
                            <img src="<?php echo get_theme_file_uri('/assits/images/g.png') ?>" alt="" class="img">
                        </div>
                    </div>
                    <div class="map-google">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13813.053637267642!2d31.2014061!3d30.0579832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8a97ebbeae7285!2z2KjZiNmGINin2KjZitiq2Yo!5e0!3m2!1sar!2seg!4v1644162047061!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact bonabeteh -->

<?php get_footer(); ?>
<!-- footer -->