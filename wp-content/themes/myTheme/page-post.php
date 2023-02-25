
<main>

    <h1><?php the_title(); ?></h1>
    <hr>
    <br>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
                <article class="placeholder">
                    <?php the_post_thumbnail("XS"); ?>
                    <div>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </article>
            <?php else : ?>
                <article>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>">Read more here</a>
                </article>
            <?php endif; ?>
    <?php endwhile;
        echo paginate_links(array(
            'next_text' => 'Next',
            'prev-text' => 'Previous'
        ));
    endif; ?>


</main>