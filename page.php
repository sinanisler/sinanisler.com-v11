<?php get_header(); ?>



<div class="container" style="">
    <div class="row ">
        <article class="col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="sinan-post">
                
                <div>
                	<?php the_post_thumbnail( 'full' ); ?>
                </div>

                <h1 class="sinan-post-title"><?php the_title(); ?></h1>
                <time class="sinan-post-date"><?php $d = get_the_date( 'l F j, Y' ); echo $d;?></time>


            </div>


            <div class="sinan-post-content">
            

            <?php the_content(); ?>

            </div>




            <?php } } ?>

        </article>
    </div>
</div>

<?php get_footer(); ?>