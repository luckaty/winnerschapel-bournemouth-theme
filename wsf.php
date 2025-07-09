<?php
/* Template Name: wsf */
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
                  <span class="current" style="font-weight:bold" >Wsf</span>
                </div>
                <h1 class="page-title mb-0">Winners Satellite Fellowship</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Winners Satellite Fellowship Title Section -->
        <section class="wsf-header-section py-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 text-center">
                <h2 class="fw-bold" style="font-size: 2rem;">Winners Satellite Fellowship</h2>
                <hr class="custom-hr" style="width: 60px; border-top: 2px solid #BF0A30;">
              </div>
            </div>
          </div>
        </section>

        <section class="wsf-section py-5">
          <div class="container">
            <div class="row">
              <!-- Left Content -->
              <div class="col-md-8">
                <h2 class="mb-3 fw-bold" style="font-size: 21px;">Creating A Forum For A Caring Christian Fellowship</h2>
                <p class="fst-italic text-justify">Acts 2:46 (KJV): "And they, continuing daily with one accord in the temple, and breaking bread from house to house, did eat their meat with gladness and singleness of heart."</p>
                <p class="text-justify">The advent of megachurches and the busyness of the times have resulted in a church with faceless members where people are being taught but not being touched. The Church has consequently become a large ocean with drowning members.</p>
                <p class="text-justify">The Winners Satellite Fellowship (WSF) is set to create a forum for a caring fellowship where every member of the Church is adequately cared for.</p>

                <h2 class="mt-4 fw-bold" style="font-size: 21px;">Meeting Times</h2>
                <p><strong>Date:</strong> Every Saturday of the month</p>
                <p><strong>Time:</strong> 5:00pm – 6:00pm</p>
                
               
              </div>

              <!-- Right Sidebar -->
              <div class="col-md-4">
                <h2 class="fw-bold" style="font-size: 21px;">Winners Satellite Fellowship Objectives</h2>
                <ol class="mb-3">
                  <li><strong>To Care</strong> – <em>Hearts of compassion</em></li>
                  <li><strong>To Feed</strong> – <em>Nourished and balanced saints</em></li>
                  <li><strong>To Teach</strong> – <em>Knowledge and enlightenment</em></li>
                  <li><strong>To Lead</strong> – <em>Leading leaders</em></li>
                </ol>
                <p class="text-justify">After the order of the 1st century New Testament church, the WSF is out to care, feed and nourish the members.</p>
                <p class="text-justify">The WSF brings Jesus to your doorstep with the following results:</p>
                <ol>
                  <li>Undeniable signs and wonders</li>
                  <li>Life-changing experiences</li>
                  <li>Christian care and loving interactions</li>
                  <li>Destiny moulding teaching and much more in a non-denominational environment</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
      
        <section class="wsf-map-section py-5">
          <div class="container">
            <div class="text-center mb-4">
              <h2>Join a Fellowship Near You</h2>
              <p class="lead">Enter preferred Location or Postcode and click search. Call the Province Minister on the phone number displayed with the chosen fellowship address for further guidance before attending.</p>
            </div>
            <?php echo do_shortcode('[wpsl]'); ?>
          </div>
        </section>


    <!-- Content -->
    <div class="content-wrapper pad-none">
      <div class="content-inner">
      
          
     </div><!-- content-inner -->
    </div><!-- content-wrapper -->
  </div><!-- page-wrapper-inner -->
</div><!-- page-wrapper -->

<?php get_footer(); ?>