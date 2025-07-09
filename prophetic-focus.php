<?php
/* Template Name: Prophetic-focus */
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
                <div id="breadcrumb" class="breadcrumb">
                  <a href="<?php echo home_url(); ?>" class="">Home</a>
                  <span class="current" style="font-weight:bold" >Prophetic Focus</span>
                </div>
                <h1 class="page-title mb-0">Prophetic Focus</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="prophetic-focus-content container py-5">
  <?php
  if (function_exists('get_field')) {
      $content = get_field('prophetic_focus_content');
      if ($content) {
          echo wp_kses_post($content);
      } else {
          echo '<p>No Prophetic Focus content available yet.</p>';
      }
  }
  ?>
</div>

<?php get_footer(); ?>