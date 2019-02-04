<?php get_header(); ?>

<div id="article" class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
        if( have_posts() ): 
            while( have_posts() ): the_post(); ?>

            <h2 id="posttitle">
                <?php the_title(); ?>
            </h2>
        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">


            <p>
                <?php the_content(); ?>
            </p>
            <?php endwhile;
        endif;
        ?>


            <p id="postedby">Posté par
                <?php 
       the_author(); 
                    ?>,
                le
                <?php
       echo get_the_date();
        ?>
            </p>

        </div>
        <div id="rightblock" class="col-md-4  offset-md-1">
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



<?php get_footer(); ?>
