<?php
/* Template Name: Articles
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'mainheader' ); ?>

<main>
    <section class="container-fluid">
        <div class="container">
<?php
$query = new WP_Query(array(
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => -1
));

$post_count = $query->post_count;
$posts_per_column = ceil($post_count / 2);

$rows = array();
$count = 0;
while ($query->have_posts()) {
    $query->the_post();
    if ($rows[$count] == "") {
        $rows[$count] = '<div class="row justify-content-around">';
    }
    $rows[$count] = $rows[$count] . 
    '<div class="col-xs-12 col-sm-8 col-md-5 preview-articles">' .
        '<div class="post-title">
            <h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>
        </div>' .
        '<div class="post-author"> ' . 
            '<img src="' .get_the_post_thumbnail_url(). '" class="img-fluid post-image" alt="image de l\'article">'  . 
            '<div class="d-flex justify-content-between">
                <p class="auteur_date">' .get_the_author().'</p><p class="auteur_date">' . get_the_date(). '</p>
            </div> 
            <div class="resume">' .
            get_the_excerpt() .
            '</div>
            <div class="d-flex justify-content-end">
                <a href="' . get_permalink() . '" class="lien_single"><img src="/wordpress/wp-content/uploads/2019/02/services-icon1.png" alt="grains de café" width="63" height="56" class="img-fluid grains">Voir l\'article</a>
            </div>
        </div>
    </div>';
    $count++;
    if ($count == $posts_per_column) {
        $count = 0;
    }
}

foreach ($rows as $row) {
    echo $row . '</div>';
} ?>
</div>
</section>
</main>

<?php get_footer(); ?>