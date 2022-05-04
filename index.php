<?php get_header() ?>

    <div class="container pt-5">
        <div class="white-box col-6 offset-3">
            <!-- TODO: Implement a custom post type named recipe and make a custom Wordpress loop that prints all recipes in the list in stead of this hardcoded dummy list. -->
            <ul class="mb-0">
                <?php $recipeLoop = new WP_Query(array("post_type" => "recipe", "posts_per_page" => -1)) ?>
                    <?php while($recipeLoop->have_posts()): $recipeLoop->the_post() ?>
                        <li>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </li>
                    <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            </ul>
        </div>
    </div>

<?php get_footer() ?>