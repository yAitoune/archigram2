<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php get_template_part('partials/navbar'); ?>


<!-- landing -->

<section class="min-h-[900px] bg-cover bg-top-left bg-no-repeat relative pt-9 lg:pt-0"
    style="background-image: url('https://www.archigram.ma/wp-content/themes/archigram-v2/assets/v2/images/Devink.webp');">
    <div class="absolute z-10 top-0 left-0 w-full h-full bg-[#000000b5]"></div>
    <div class="w-full relative z-20  ">
        <div class="main-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-14 gap-y-1 items-center">
                <div class="flex flex-col gap-7 text-balance">
                    <h1 class="text-5xl text-white font-semibold">
                        Transformez vos idées en lieux iconiques!
                    </h1>
                    <p class="text-gray-200 text-[18px]">
                        Créez des expériences mémorables grâce à des espaces immersifs pensés pour marquer durablement
                        vos client

                    </p>
                    <div class="flex gap-2 mt-8">
                        <a href="/estimation"
                            class="rounded-full bg-[#CAEB4F]  py-3 px-6  flex gap-2 items-center group hover:scale-105 duration-1000 text-black ">
                            Voir nos réalisations
                            <div class="w-8 ">
                                <img src="<?= get_template_directory_uri() . '/assets/images/realisations.svg' ?>"
                                    alt="">
                            </div>
                        </a>
                        <a href="/estimation"
                            class="rounded-full bg-[#CAEB4F]  py-3 px-3  flex gap-2 items-center group hover:scale-105 duration-1000  ">
                            <div class="w-8 ">
                                <img class="transition-transform duration-1000 group-hover:rotate-y-360 "
                                    src="<?= get_template_directory_uri() . '/assets/images/dollar.svg' ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="pt-20 flex justify-center">
                    <img class="w-[501px]" src="<?= get_template_directory_uri() . '/assets/images/archigram-smartphone.webp' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>





<?php get_template_part('partials/foot'); ?>

<?php get_footer(); ?>