<?php
if(have_posts()){

    the_post();

    rewind_posts();

    if('branches-bon' == get_post_type()){

        require_once(__DIR__.'/single-branche.php');
        
    }elseif('department' == get_post_type()){

        require_once(__DIR__.'/single-department.php');

    }else{

        require_once(__DIR__.'/single-blog.php');
    }


};