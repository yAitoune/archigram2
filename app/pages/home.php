
<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php get_template_part('partials/navbar'); ?>


<!-- landing -->

<section class="h-[900px] bg-cover bg-center bg-no-repeat relative" style="background-image: url('https://www.archigram.ma/wp-content/themes/archigram-v2/assets/v2/images/Devink.webp');">
    <div class="absolute  top-0 left-0 w-full h-full bg-[#0000007b] hidden "></div>
        <div class="main-container relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div>
                    <h1>

                    </h1>
                    <p>

                    </p>
                    <div class="flex ">
                        <a href="/estimation" class="rounded-full bg-[#CAEB4F]  py-3 px-6  flex gap-2 items-center group hover:scale-105 duration-1000  ">
                            Estimation
                            <div class="w-8 ">
                                <img class="transition-transform duration-1000 group-hover:rotate-y-360 " src="<?= get_template_directory_uri() . '/assets/images/dollar.svg' ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>  
                <div></div>
        </div>
    
    </div>


</section>





<?php get_template_part('partials/foot'); ?>

<?php get_footer(); ?>