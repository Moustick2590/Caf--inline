<?php
/* Template Name: Articles
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'mainheader' ); ?>

<main>
    <section class="container-fluid">
        <div class="container">
            <div class="post-list">
                <?php $myposts = get_posts('numberposts=-1&offset=$debut');
                foreach( $myposts as $post) : setup_postdata( $post ) ?>
                <h1><?php the_title(); ?></h1>
                <?php echo get_the_post_thumbnail(); ?>

                <!-- Only display part of the post so the user has to click "More!" -->
                <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">Voir plus</a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>