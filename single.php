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




<?php
    $query = new WP_Query(array(
                        'post_status'   => 'publish',
                        'orderby'       => 'title',
                        'order'         => 'ASC',
                        'posts_per_page'    => -1
                        ));

$post_count = $query->post_count;
$posts_per_column = ceil($post_count / 2);      

$rows = array();                                            
$count = 0;
while ($query->have_posts())
{ $query->the_post(); 
    if($rows[$count] == ""){ $rows[$count] = '<div id="allposts" class="row justify-content-around">'; }
    $rows[$count] = $rows[$count] . '<div class="col-sm-4">' .
            '<div class="post-title">
             <a href="'.get_permalink().'">'.get_the_title().'</a></div>' .
            '<div class="post-author"> '. get_the_post_thumbnail() . get_the_excerpt() .  get_the_author() . get_the_date() .'</div></div>';
    $count++;                           
    if ($count == $posts_per_column ) { $count = 0; }   
}

foreach ($rows as $row) { echo $row . '</div>'; } ?>





<?php get_footer(); ?>

