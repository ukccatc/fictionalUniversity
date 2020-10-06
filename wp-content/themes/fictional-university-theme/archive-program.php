<?php
get_header(); ?>
<?php pageBanner(array(
        'title' => 'All Programs',
        'subtitle' => 'Programs for everybody',
)); ?>

    <div class="container container--narrow page-section">
        <ul class="link-list min-list">
        <?php
        while(have_posts()) {
            the_post(); ?>
            <li><a href="<?= the_permalink() ?>"><?php the_title()?></a></li>
        <?php }
        echo paginate_links();
        ?>
        </ul>
        <hr class="section-break">
    </div>

<?php get_footer();
?>