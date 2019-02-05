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
    if($rows[$count] == ""){ $rows[$count] = '<div class="row justify-content-around">'; }
    $rows[$count] = $rows[$count] . '<div class="col-sm-4">' .
            '<div class="post-title">
             <a href="'.get_permalink().'">'.get_the_title().'</a></div>' .
            '<div class="post-author"> '. get_the_post_thumbnail() . get_the_excerpt() .  get_the_author() . get_the_date() .'</div></div>';
    $count++;                           
    if ($count == $posts_per_column ) { $count = 0; }   
}

foreach ($rows as $row) { echo $row . '</div>'; } ?>
