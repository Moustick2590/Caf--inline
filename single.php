

<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'secondaryheader' ); ?>
<main>
<section id="article">
    <div class="container-fluid">
        <div class="container"> 
              
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <?php
                        if( have_posts() ): 
                            while( have_posts() ): the_post(); ?>
                                <h2><?php the_title(); ?><h2>
                                <p><?php the_content(); ?></p>
                        <?php endwhile; endif; ?>          
                    
                    <?php the_author(); ?> 
                </div>

                <div>
                    <?php echo get_the_date(); ?> 
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
    </div>
</section>


</main>


    <?php get_footer(); ?>