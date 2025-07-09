<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<!-- Page Header -->
<div class="page-title-wrap typo-white">
    <div class="page-title-wrap-inner section-bg-img" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/images/page-title.jpg">
        <span class="theme-overlay"></span>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="page-title-inner">
                        <div id="breadcrumb" class="breadcrumb margin-bottom-10">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                            <span class="current" style="font-weight:bold">Get in Touch</span>
                        </div>
                        <h1 class="page-title mb-0">Get in Touch</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Content -->
<div class="content-wrapper pad-none">
    <div class="content-inner">
        <section class="contact-form-section py-5">
          <div class="container">
            <div class="row g-4 align-items-stretch">
              <!-- Contact Info -->
              <div class="col-lg-5" >
                <div class="bg-white shadow rounded p-4 pe-5 h-65 d-flex flex-column">
                  <h2 class="mb-3 fw-bold" style="margin-top:50px;">GET IN TOUCH</h2>
                  <p class="text-muted mb-4">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.!</p>
                  <div class="d-flex mb-4">
                    <div class="me-3">
                      <i class="ti-headphone-alt fs-3 text-danger"></i>
                    </div>
                    <div>
                      <h6 class="mb-1 fw-bold">Call Us</h6>
                      <p class="mb-0"><a href="tel:+447401099953">+44 7401 099953</a></p>
                    </div>
                  </div>
                  <div class="d-flex mb-4">
                    <div class="me-3">
                      <i class="ti-email fs-3 text-danger"></i>
                    </div>
                    <div>
                      <h6 class="mb-1 fw-bold">Email Us</h6>
                      <p>
                          <a href="mailto:info@winnerschapelbournemouth.org.uk" style="display:inline-block; padding-right: 50px;">
                            bournemouth@winnerschapel.org.uk
                          </a>
                     </p>

                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <i class="ti-location-pin fs-3 text-danger"></i>
                    </div>
                    <div>
                      <h6 class="mb-1 fw-bold">Visit Us</h6>
                      <p class="mb-0">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Townsend+Community+Centre+Jewell+Rd,+Bournemouth+BH8+0LT" target="_blank">
                          Townsend Community Centre, Jewell Rd, Bournemouth BH8 0LT
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Contact Form -->
              <div class="col-lg-7">
                <div class="bg-white shadow rounded p-4 ">
                  <iframe
                    src="https://link.winnerschapelbournemouth.org.uk/widget/form/Syo9gDOazoqh3055JD2b"
                    style="width:100%; height:700px; border:none; border-radius:8px;"
                    id="inline-Syo9gDOazoqh3055JD2b"
                    title="Contact us form">
                  </iframe>
                  <script src="https://link.winnerschapelbournemouth.org.uk/js/form_embed.js"></script>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Google Map -->
        <section class="contact-map py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="width: 100%; max-width: 100%; border-radius: 12px; overflow: hidden;">
                          <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.2649522470924!2d-1.83171592388325!3d50.752120665597644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487399df4ca339bd%3A0x4d0a4432d586d68a!2sWinner&#39;s%20Chapel%20International%20Bournemouth.!5e0!3m2!1sen!2suk!4v1750169034143!5m2!1sen!2suk" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                          </iframe>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
