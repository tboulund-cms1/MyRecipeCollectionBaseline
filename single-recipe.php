<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>
        <h2 class="pt-5 pb-2"><?php the_title() ?></h2>
        <div class="container">
            <div class="row">
                <div class="white-box col-8 p-3">
                    <h3>Approach</h3>
                    <p>
                        <?php the_field("approach") ?>
                    </p>
                </div>
                <div class="white-box col-3 offset-1 p-0">
                    <img src="<?php the_field("image") ?>" alt="dish" class="w-100 border-0">
                    <div class="p-3">
                        <h3>Ingredients</h3>
                        <p>
                            <?php the_field("ingredients") ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php get_footer() ?>