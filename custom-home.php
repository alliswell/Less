<?php
/*
Template Name: Custom home
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="post">
        <h1 class="title">
            <?php the_title() ?>
        </h1>
        <div class="the-content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

