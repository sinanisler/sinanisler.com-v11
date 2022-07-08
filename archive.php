<?php get_header(); ?>

<?php /*
<div class="container index-welcome-post">
  <div class="row">
    <div class="col-12 index-desc a_a a_fadeIn">
        Hello,<br>
        I do <span class="cc">WordPress</span>, Front-End, 
        <br><span class="cc2">SEO</span> Strategy and Video Content Creation. 
    </div>
  </div>
</div>



<div class="container">
  <div class="row services ">
    <div class="col-sm  service">
        <div class="s-icon wp a_a a_fadeIn "> </div>
        <div class="title a_a a_fadeIn ">WordPress Development</div>
        <p  class="a_a a_fadeIn ">
            WordPress Theme Development, Custom Post Types, Taxonomy and Blocks. 
            Corporate, e-Commerce or Community. ACF and Genesis Block API. Design to WP from XD, Photoshop, Sketch and FIGMA.
        </p>
    </div>
    <div class="col-sm  service">
        <div class="s-icon seo a_a a_fadeIn "> </div>
        <div class="title a_a a_fadeIn ">SEO Strategy</div>
        <p  class="a_a a_fadeIn ">
            Website Audit, Analysis, On-Site and Off-Site Analysis and Optimization. 
            Competition Analysis and Planning. On-Site Optimization. Building Authority. Monthly Reporting.
        </p>
    </div>
    <div class="col-sm  service">
        <div class="s-icon youtube a_a a_fadeIn "> </div>
        <div class="title a_a a_fadeIn ">Youtube Optimization</div>
        <p  class="a_a a_fadeIn ">
            Channel and Content Analysis, Optimizations and Recommendations. 
            Giving Directions for Channel, Titles, Thumbnails and Content Creation.
            Teaching how to read Studio Analytics.
        </p>
    </div>
  </div>
</div>


// get categories
$categories = get_categories( array( 'orderby' => 'name', 'parent'  => 0 ) ); $a = 1;
                    foreach ( $categories as $category ) {
                        printf( '<a href="%1$s" class="sinan-post-cat -'.$a.'">%2$s</a> ',
                        esc_url( get_category_link( $category->term_id ) ), esc_html( $category->name ) ); $a++; }



*/ ?>


<div class="container">
    <div class="row ">


        <div class="articles col-12 sinan-posts">
            
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

            <div class="row index-sinan-post">
                <a href="<?php the_permalink(  ); ?>" title="<?php the_title(); ?>" >
                <?php the_post_thumbnail( 'large' ); ?>
                </a>

                <div class="col-1"></div>
                <div class="col-10 index-sinan-post-box">
                    <a href="<?php the_permalink(); ?>" class="sinan-post-title" hreflang="en-us" 
                    date="<?php $d = get_the_date( 'l F j, Y' ); echo $d;?>"><?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                </div>
                <div class="col-1"></div>


            </div>

            <?php } } ?>


        </div>
    </div>
</div>

<?php get_footer(); ?>

