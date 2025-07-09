<?php
/* Template Name: Announcement */
get_header();
?>

<!-- Start Main Content -->
<div class="page-wrapper">
  <div class="page-wrapper-inner">
    <!-- Page Header -->
    <div class="page-title-wrap typo-white">
      <div class="page-title-wrap-inner section-bg-img" data-bg="">
        <span class="theme-overlay"></span>
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="page-title-inner">
                <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                  <a href="<?php echo home_url(); ?>" class="">Home</a>
                  <span class="current" style="font-weight:bold">Announcement</span>
                </div>
                <h1 class="page-title mb-0"><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="content-wrapper pad-none">
      <div class="content-inner">
        <section class="section-accordion">
          <div class="container">
            <div class="pillars-accordion accordion" id="churchAccordion">

              <?php if( have_rows('accordion_items') ): ?>
                <?php $i = 0; while( have_rows('accordion_items') ): the_row(); 
                  $title = get_sub_field('title');
                  $content = get_sub_field('content');
                  $collapse_id = 'collapse' . $i;
                  $heading_id = 'heading' . $i;
                  $is_first = ($i === 0);
                ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                    <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                            aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>"
                            aria-controls="<?php echo esc_attr($collapse_id); ?>">
                      <?php echo esc_html($title); ?>
                    </button>
                  </h2>
                  <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>"
                       aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#churchAccordion">
                    <div class="accordion-body">
                      <?php echo wp_kses_post($content); ?>
                    </div>
                  </div>
                </div>
                <?php $i++; endwhile; ?>
              <?php else: ?>
                <p>No announcement at the moment.</p>
              <?php endif; ?>

            </div>
          </div>
        </section>

    </div><!-- content-inner -->
    </div><!-- content-wrapper -->
  </div><!-- page-wrapper-inner -->
</div><!-- page-wrapper -->

<?php get_footer(); ?>