<?php
/**
 * Template Name: Events Page
 */
get_header(); ?>

<!-- page-header -->
<div class="page-title-wrap typo-white">
    <div class="page-title-wrap-inner section-bg-img" data-bg="">
        <span class="theme-overlay"></span>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="page-title-inner">
                        <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="">Home</a>
                            <span class="current" style="font-weight:bold">Events</span>
                        </div>
                        <h1 class="page-title mb-0">Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page-header -->

<div class="content-wrapper pad-none">
    <div class="content-inner">
        <!-- Events Section -->
        <section id="events-section" class="events-section pad-top-120 pad-bottom-70">
            <h2 class="screen-reader-text">Events</h2>
           <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="events-main-wrapper events-grid events-style-2">
                            <div class="row">

                                <?php if (have_rows('event_grid')): ?>
                                    <?php while (have_rows('event_grid')): the_row(); 
                                        $inputdate  = get_sub_field('event_date');
                                        $time  = get_sub_field('event_time');
                                        $image = get_sub_field('event_image');
                                        $title = get_sub_field('event_title');
                                        $date = date('M j', strtotime($inputdate));
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="events-inner margin-bottom-30">
                                            <div class="events-thumb mb-0 relative">
                                                <?php if ($image): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" 
                                                         class="img-fluid thumb w-100" 
                                                         alt="<?php echo esc_attr($image['alt'] ?: $title); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="events-details pad-lr-30 pad-bottom-35">
                                                <div class="event-date margin-bottom-30">
                                                    <?php echo esc_html($date); ?>
                                                    <span class="event-time"><?php echo esc_html($time); ?></span>
                                                </div>
                                                <div class="event-title mb-3">
                                                    <h5><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h5>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <p class="text-center">No upcoming events found. Please check back soon.</p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    </section>
        <!-- /Events Section -->
    </div>
</div>

<?php get_footer(); ?>
