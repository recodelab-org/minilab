<?php get_header(); ?>

    <main>


        <!--The Loop-->
        <?php while( have_posts() ) : the_post(); ?>

        <?php if ( is_singular() ) { ?>
        <article>
            <section class="content ehy-article-content">
                <?php the_content(); ?>
            </section>
        </article>
            <?php } else { ?>
        <article>

            <figure class="image my-featured-image">
                <?php echo the_post_thumbnail()?>

                <?php 
                if (my_post_thumbnail_caption()) { 
                 my_post_thumbnail_caption(); 
                }
                ?>


            </figure>

            <section class="content ehy-article-content">
                <h3><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            </section>

        </article>

        <?php } 
        ?>

        <?php endwhile; ?>
        <!--Loop ends-->


    </main>

    <?php get_footer(); ?>