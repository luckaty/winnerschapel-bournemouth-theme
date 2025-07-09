<?php
/* Template Name: Downloads */
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
                  <span class="current" style="font-weight:bold"><?php the_title(); ?></span>
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
        <!-- Download Section -->
          <section id="section-downloads" class="custom-download-section">
            <div class="container">
              <div class="row">
                <?php if( have_rows('downloads') ): ?>
                  <?php while( have_rows('downloads') ): the_row(); 
                    $title = get_sub_field('title');
                    $date = get_sub_field('date');
                    $file = get_sub_field('file');
                  ?>
                  <div class="col-md-12 mb-3">
                    <div class="download-item d-flex justify-content-between align-items-center">
                      <div class="content">
                        <h3><?php echo esc_html($title); ?></h3>
                        <p><i class="fa fa-calendar"></i> <?php echo esc_html($date); ?></p>
                      </div>
                      <?php if ($file): ?>
                      <div class="icon">
                        <a href="<?php echo esc_url($file['url']); ?>" class="download-link" title="Download" target="_blank">
                          <i class="fa fa-download"></i>
                        </a>
                      </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endwhile; ?>
                <?php else: ?>
                  <p>No downloads available at the moment.</p>
                <?php endif; ?>
              </div>
            </div>
          </section>

        <!-- Download Section End -->
      </div><!-- content-inner -->
    </div><!-- content-wrapper -->
  </div><!-- page-wrapper-inner -->
</div><!-- page-wrapper -->

<?php get_footer(); ?>