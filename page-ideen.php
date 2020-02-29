<?php get_header(); ?>
<h1>Eingereichte Ideen</h1>
<section>


<?php
    // Selecting Custom Post Type

        $args = array(
            'post_type' => 'ideen',
            'posts_per_page' => '10',
        );

        $blogposts1 = new WP_Query($args);

    // Displaying Posts
        while($blogposts1->have_posts()) {
                $blogposts1->the_post();
    ?>

    <div class="card">

        <div class="card-heading">
            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3>
            </a>
        </div>

        <div class="card-foto">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Selfhtml">
        </div>

        <div class="card-text">
            <?php the_excerpt();?>
        </div>

    </div>


    <?php
        }
    ?>

</section>

<?php get_footer(); ?>