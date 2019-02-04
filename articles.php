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


<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 Si l'Article est dans la Catégorie que nous souhaitons exclure, nous passons à l'Article suivant. 
<?php if (in_category('')) continue; ?>

<div class="post">

 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

 <small><?php the_time('F jS, Y'); ?></small>

 <div class="entry">
   <?php the_content(); ?>
 </div>

 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
</div> fin du premier bloc div 

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?> -->

<section>
<div class="container">

// wp-query récupère tous les articles
<?php $articles = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

// si les articles existent
<?php if ( $articles->have_posts() ) : ?>
//tant qu'il y a des articles on répète le code
<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
<div class="col-xs-12 col-sm-5">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_post_thumbnail();?>
<p>Date : <?php the_time('d F Y'); ?></p>
<p>Auteur : <?php the_author(); ?></p>
<p><?php the_excerpt();?></p>
<a href="<?php the_permalink(); ?>">Voir l'article</a>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Aucun article.' ); ?></p>
<?php endif; ?>
</div>
</section>
