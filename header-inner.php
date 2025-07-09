<div class="zmm-wrapper">
  <a href="#" class="zmm-close close"></a>
  <div class="zmm-inner bg-white typo-dark">
    <div class="text-center mobile-logo-part margin-bottom-30">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="img-before">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" class="img-fluid" style="max-width: 60px; height:60px" alt="Logo">
      </a>
    </div>
    <div class="zmm-main-nav"></div>
  </div>
</div>

<!-- Top Info Bar -->
<div class="topbar text-white py-2" style="background-color:#BF0A30;">
  <div class="container d-flex justify-content-between align-items-center">
    
    <!-- Left Side: Contact Info -->
    <div class="d-flex align-items-center gap-3">
      <span><i class="fa fa-phone me-1"></i> 07401099953</span>
      <span><i class="fa fa-envelope ms-3 me-1"></i> bournemouth@winners-chapel.org.uk</span>
    </div>

    <!-- Right Side: Social Icons -->
    <div class="d-flex align-items-center gap-2">
      <a href="https://www.instagram.com/winnerschapelbournemouth" target="_blank" class="text-white"><i class="fa fa-instagram"></i></a>
      <a href="https://www.facebook.com/people/Winners-Chapel-International-Bournemouth/100086057989378" target="_blank" class="text-white"><i class="fa fa-facebook"></i></a>
      <a href="https://x.com/Wcibournemouth" target="_blank" class="text-white"><i class="fa fa-times"></i></a>
    </div>

    
    
  </div>
</div>

<header>
  <!-- Mobile Menu Wrapper for JS -->
<div class="zmm-wrapper">
  <a href="#" class="zmm-close close"></a>
  <div class="zmm-inner bg-white typo-dark">
    <div class="zmm-main-nav">
      
    </div>
  </div>
</div>

  <!-- Mobile Header Toggle -->
  <div class="mobile-header bg-white typo-dark">
    <div class="mobile-header-inner">
      <div class="sticky-outer">
        <div class="sticky-head">
          <div class="basic-container clearfix">
            <ul class="nav mobile-header-items pull-left">
              <li class="nav-item">
                <a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a>
              </li>
            </ul>
            <ul class="nav mobile-header-items pull-center">
              <li>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="img-before">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" style="max-width: 70px; height:65px" alt="Logo">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Desktop Header -->
  <div class="header-inner header-1">
    <div class="sticky-outer">
      <div class="sticky-head">
        <nav class="navbar nav-shadow">
          <div class="basic-container clearfix">
            <div class="navbar-inner">
              <ul class="nav navbar-items pull-left">
                <li class="list-item">
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-general">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" style="max-width:100px;height:80px" alt="Logo" />
                  </a>
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-sticky">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" class="img-fluid" style="width:50px;height:50px" alt="Logo" />
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-items pull-right">
                <li class="list-item">
                  <ul class="nav navbar-main menu-dark">
                    <li class="<?php echo is_front_page() ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">WELCOME</a>
                      <ul class="dropdown-menu">
                        <li><a href="new-member">I am New</a></li>
                        <li><a href="prayer">Prayer Request</a></li>
                        <li><a href="testimony">Testimonies</a></li>
                      </ul>
                    </li>
                    <li class="<?php echo is_page('about-us') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/about-us/')); ?>">ABOUT US</a></li>
                   
                   
                    
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">RESOURCES</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/announcement/')); ?>">Announcements</a></li>
                        <li><a href="<?php echo esc_url(home_url('/sermons/')); ?>">Sermons</a></li>
                        <li><a href="<?php echo esc_url(home_url('/downloads/')); ?>">Downloads</a></li>
                        <li>
                          <a href="https://wa.me/447438333997?text=Transport%20Request%0A%0AName%20%2F%20Family%20name%20%3A%20%0ANumber%20of%20people%3A%20%0AFirst%20line%20of%20address%20%3A%20%0APost%20code%20%3A%20%0ALandmark%20Area%20(if%20known)%3A%20%0AEstimated%20time%20to%20be%20picked%20up%3A%20" 
                             target="_blank" rel="noopener">
                             Request Transportation
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="<?php echo is_page('wsf') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/wsf/')); ?>">WSF</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">MINISTRIES</a>
                      <ul class="dropdown-menu">
                        <li><a href="winners-kids">Winners Kids</a></li>
                        <li><a href="teens-church">Teen Church</a></li>
                        <li><a href="youth-alive">Youth Alive</a></li>
                        <li><a href="wofbi">Wofbi</a></li>
                         <li><a href="service-units">Service Units</a></li>
                      </ul>
                    </li>
                    <li class="<?php echo is_page('contact') ? 'active' : ''; ?>"><a href="<?php echo esc_url(home_url('/contact/')); ?>">GET IN TOUCH</a></li>
                    
                  </ul>
                </li>
                <li class="list-item">
                  <div class="header-navbar-text-1">
                    <a href="https://giving.winners-chapel.org.uk" class="h-donate-btn">Give</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
