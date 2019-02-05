

<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'secondaryheader' ); ?>
<main>
<section id="article" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                    <h2 id="posttitle"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xs-10 col-md-7">
                <p>
                    <?php the_content(); ?>
                </p>
                <?php endwhile; endif; ?>
                <p id="postedby">Posté par <?php the_author(); ?>, le <?php echo get_the_date(); ?>
                </p>
            </div>
            <div  class="col-xs-10 col-md-4">
                <div id="rightblock">
                <p id="recentspost">Articles récents</p>
                <ul>
                    <?php
                        $recent_posts = wp_get_recent_posts();
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                        }
                        wp_reset_query();
                    ?>
                </ul>
                <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

</main>





<?php get_footer(); ?>

