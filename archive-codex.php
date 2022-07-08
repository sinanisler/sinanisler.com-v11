<?php get_header(); ?>


<div class="container">
    <div class="row ">


        <div class="articles col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="row index-sinan-post">

                <div class=" index-sinan-post-box">
                    <a href="<?php the_permalink(); ?>" class="sinan-post-title" hreflang="en-us" 
                    date="<?php $d = get_the_date( 'l F j, Y' ); echo $d;?>"><?php the_title(); ?>
                    </a>
                </div>


            </div>

            <?php } } ?>


        </div>
    </div>
</div>

<?php get_footer(); ?>

