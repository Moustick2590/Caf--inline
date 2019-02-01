<?php get_header(); ?>
<section id="article">
<div class="container-fluid">
 <div>   
    <div class="row">
        <div class="col-md-5 offset-md-1">

            <?php
        if( have_posts() ): 
            while( have_posts() ): the_post(); ?>
            <h3>
                <?php the_title(); ?>
                <h3>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <?php endwhile;
        endif;
        ?>
    
        
        <?php 
       the_author();
        ?> 
         </div>
        <div>
        <?php 
      echo get_the_date();
        ?> 
        </div>
        </div>
        <div class="col-md-4 offset-md-1">
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
</section>

















    <?php get_footer(); ?>