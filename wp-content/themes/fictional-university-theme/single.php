<?php

get_header();

while(have_posts()) {
    the_post(); ?>

	<?php pageBanner( array(
		'title'    => get_the_title(),
		'subtitle' => 'Here we go blog'
	) )
	?>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
                <span class="metabox__main">Created by <?php the_author_posts_link() ?> in <?php the_date('y-m-d') ?> in <?echo get_the_category_list(', '); ?></span>
            </p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
}

get_footer();
?>