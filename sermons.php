<?php
/* Template Name: Sermons */
get_header();
?>

<div class="page-wrapper">
  <div class="page-wrapper-inner">
    <div class="page-title-wrap typo-white">
      <div class="page-title-wrap-inner section-bg-img" data-bg="">
        <span class="theme-overlay"></span>
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="page-title-inner">
                <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                  <a href="<?php echo home_url(); ?>">Home</a>
                  <span class="current" style="font-weight:bold"><?php the_title(); ?></span>
                </div>
                <h1 class="page-title mb-0"><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sermon Cards -->
  <div class="container py-5 sermon-card-container">
    <div class="row">
      <?php
        $sermons = get_field('sermons');

        if ($sermons):
          // Sort by date descending (format is d/m/Y)
          usort($sermons, function($a, $b) {
            $dateA = DateTime::createFromFormat('d/m/Y', $a['date']);
            $dateB = DateTime::createFromFormat('d/m/Y', $b['date']);
            return $dateB->getTimestamp() - $dateA->getTimestamp();
          });
      ?>
        <div class="container py-5 sermon-card-container">
          <div class="row">
            <?php foreach ($sermons as $sermon):
              $title = $sermon['title'];
              $speaker = $sermon['speaker'];
              $date = $sermon['date'];
              $audio = $sermon['audio'];
            ?>
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow h-100">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                    <p class="card-subtitle mb-1"><strong>Speaker:</strong> <?php echo esc_html($speaker); ?></p>
                    <p class="text-muted mb-2"><i class="fa fa-calendar"></i> <?php echo esc_html($date); ?></p>

                    <?php if ($audio): ?>
                      <audio controls class="w-100 mt-auto">
                        <source src="<?php echo esc_url($audio['url']); ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                      </audio>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <p class="text-center">No sermons available at the moment.</p>
      <?php endif; ?>


    </div>
  </div>

  </div>
</div>

<?php get_footer(); ?>
