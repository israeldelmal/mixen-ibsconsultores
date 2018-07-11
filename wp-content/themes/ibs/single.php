<?php
get_header();
the_post();
?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* TOP-INFO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="top-info" id="top-info">
        <div class="container">
            <div class="vertical-align">
                <div class="row no-margin">
                    <p class="hidden-xs">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> GONZÁLEZ COSSIO 3703, COL. LAS GRANJAS, CHIHUAHUA, CHIHUAHUA
                    </p>
                    <a class="phone" href="tel:016144148936">
                        <i class="fa fa-mobile" aria-hidden="true"></i> TEL. (614)414.8936
                    </a>
                    <a class="social" target="_blank" href="https://www.facebook.com/ibsconsultores/">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
		<div class="article-header" style="background-image: url(<?php echo bloginfo('template_url').'/';?>img/articulos/bg.jpg)"></div>
    <!-- Noticias -->
    <div class="container news-padding">
        <div id="article">
        	<article>
                <header style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
                    <h1><?php echo single_post_title();?></h1>
                    <time><?php the_time('d | F'); ?></time>
                </header>
                <?php the_content(); ?>
            </article>
        </div>
        <main>
            <?php
            $PostID = get_the_id();
            $args = array(
                'posts_per_page'   => 3,
                'offset'           => 0,
                'category_name'    => 'noticias',
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );
            $the_query = new WP_Query($args);

            if($the_query->have_posts())
            {
                $counter = 0;
                while($the_query->have_posts())
                {
                    $the_query->the_post();

                    if ($PostID != get_the_id()) {
                    ?>
                    
                    <article>
                        <header style="background-image: url(<?php echo the_post_thumbnail_url();?>);"></header>
                        <section>
                            <h5><?php echo get_the_title();?></h5>
                            <p><?php echo get_the_excerpt();?></p>
                        </section>
                        <footer>
                            <a href="<?php echo get_permalink();?>">Leer más</a>
                        </footer>
                    </article>

                    <?php
                    }
                    $counter++;
                }
            }
            wp_reset_query();
            ?>
        </main>
    </div>
    <!-- /Noticias -->
</div>

<?php get_footer(); ?>