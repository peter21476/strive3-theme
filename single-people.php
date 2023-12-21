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

<div class="container strive3-people__container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="row">
        <div class="col-lg-6">
            <div class="strive3-people__name--inner">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_field('job_title') ?></p>
                <div class="strive3-people__social">
                <?php if (get_field('linkedin_profile')) : ?>
                    <a href="<?php echo get_field('linkedin_profile') ?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <?php endif; ?>
                <?php if (get_field('person_email')) : ?>
                    <a href="mailto:<?php echo get_field('person_email') ?>"><i class="fa-solid fa-envelope"></i></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="strive3-people__image--inner">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="strive3-people__content">
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