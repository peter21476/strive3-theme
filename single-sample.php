<?php get_header(); ?>

<?php if (function_exists('yoast_breadcrumb')) : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php yoast_breadcrumb('<div id="breadcrumbs">','</div>'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container strive3-sample__container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="strive3-sample__title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="strive3-sample__image">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="strive3-sample__content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

        <?php endwhile; else : ?>

        <h2><?php esc_html_e('404 Error', 'phpform'); ?></h2>
                <p><?php esc_html_e('Sorry, content not found', 'phpform'); ?></p>

    <?php endif; ?>

</div>

<?php get_footer(); ?>