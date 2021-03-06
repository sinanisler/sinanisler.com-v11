<?php get_header(); ?>



<div class="container" style="">
    <div class="row ">
        <article class="col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="sinan-post">
                
                <div class="row index-sinan-post-single p-0 m-0">
                    <?php the_post_thumbnail( 'large' ); ?>

                    <div class="col-1"></div>
                    <div class="col-10 index-sinan-post-box">
                        <a href="<?php the_permalink(); ?>" class="sinan-post-title" hreflang="en-us" 
                        date="<?php $d = get_the_date( 'l F j, Y' ); echo $d;?>"><?php the_title(); ?></a>
                    </div>
                    <div class="col-1"></div>


                </div>

                <time class="sinan-post-date"><?php $d = get_the_date( 'l F j, Y' ); echo $d;?></time>


            </div>


            <div class="sinan-post-content">
            

            <?php the_content(); ?>

            </div>

            <div class="sinan-post-content-comments">
				<?php comments_template(); ?>
            </div>



            <?php } } ?>

        </article>
    </div>
</div>

<?php get_footer(); ?>