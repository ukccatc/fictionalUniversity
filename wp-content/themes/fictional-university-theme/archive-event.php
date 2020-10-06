<?php
get_header(); ?>

    <?php pageBanner(array(
            'title' => 'All Events',
            'subtitle' => 'What is going on'
)); ?>

    <div class="container container--narrow page-section">
        <?php
        while(have_posts()) {
            the_post();
            get_template_part('/template-parts/content', get_post_type());
         }
        echo paginate_links();
        ?>
    <hr class="section-break">
    <p>Looking for past events
    <a href="<?php echo site_url('/past-events') ?>">Click here</a>
    </p>
    </div>

<?php get_footer();
?>