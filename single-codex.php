<?php get_header(); ?>



<div class="container" style="">
    <div class="row ">
        <article class="col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="sinan-post">
                

                <h1 class="sinan-post-title"><?php the_title(); ?></h1>


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