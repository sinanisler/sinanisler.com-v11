<?php get_header(); ?>



<div class="container" style="">
    <div class="row ">
        <div class="col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="sinan-post">
                <div class="sinan-post-category"><?php /*  
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'parent'  => 0
                    ) );
                    $a = 1;
                    foreach ( $categories as $category ) {
                        printf( '<a href="%1$s" class="sinan-post-cat -'.$a.'">%2$s</a>
                            ',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_html( $category->name )
                        );

                        $a++;
                    }*/
                 ?></div>
                <h1 class="sinan-post-title"><?php the_title(); ?></h1>
                <time class="sinan-post-date"><?php $d = get_the_date( 'l F j, Y' ); echo $d;?></time>
                <div>
                	<?php the_post_thumbnail( 'full' ); ?>
                </div>
            </div>


            <div class="sinan-post-content">
            

            <?php the_content(); ?>

            </div>




            <?php } } ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>