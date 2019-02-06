<?php
/* Template Name: Accueil
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/template-part', 'mainheader' ); ?>
<main>
    <section id="team" class="container-fluid">
        <div class="container">
            <div class="row">
            <div class="text col-md-5">
                <p>Bienvenue sur le site de la promo Café-inline.<br>
                Nous sommes en formation chez Access Code School pour devenir Développeur Intégrateur Web Junior. Ici deux mots d’ordre Café et Code. Vous retrouverez sur ce blog tous nos articles et une petite description de notre équipe. Explorez, lisez mais faites attention à l’overdose de caféine !</p>
                <p>Bonne Visite !</p>
            </div>

            <div id="team_photo" class="col-md-7">
                <img class="img-fluid" src="/wordpress/wp-content/uploads/2019/02/team_photo1.jpeg" alt="photo de l'équipe" width="6216" height="4170">
            </div>
            </div>
        </div>
    </section>

    <section id="last_articles" class="container-fluid">
        <div class="container ">
            <div class="row d-flex justify-content-between">
        
                <?php
                    $slides = array();
                    $args = array(
                    'tag' => 'slide',
                    'nopaging'=>true,
                    'posts_per_page'=>5 );
                    $slider_query = new WP_Query( $args );
                    if ( $slider_query->have_posts() ) {
                        while ( $slider_query->have_posts() ) {
                        $slider_query->the_post();
                            if(has_post_thumbnail()){
                                $temp = array();
                                //Recupération des images
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                                $thumb_url = $thumb_url_array[0];
                                $temp['title'] = get_the_title();
                                $temp['excerpt'] = get_the_excerpt();
                                $temp['image'] = $thumb_url;
                                $slides[] = $temp;
                            }
                        }
                    }
                    wp_reset_postdata();
                ?>

                <?php if(count($slides) > 0) { ?>

                <div id="carousel" class="carousel slide col-md-6" data-ride="carousel">

                    <ol class="carousel-indicators">
                    <?php for($i=0;$i<count($slides);$i++) { ?>
                    <li data-target="#carousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
                    <?php } ?>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
                        <div style="background-image: url('<?php echo $image ?>');" class="carousel-item <?php if($i == 0) { ?>active<?php } ?>">
                            <div class="carousel_text">
                                <h3><?php echo $title; ?></h3>
                                <p><?php echo $excerpt; ?></p>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a> 
                </div>
                <?php } ?>
                <div class="col-md-5" id="pres-article">
                    <p>Pendant notre formation nous avons écrit quelques articles de veille technologique. Si le web et les nouvelles technologies vous intéresse, trouvez votre bonheur dans notre sélection qui défile ou retrouvez l’ensemble de nos articles en cliquant sur le lien ci-dessous.</p>
                    <a href="/wordpress/les-articles">Voir les articles =></a> 
                </div>
            </div>
        </div>
    </section>
</main> 
<?php get_footer(); ?>