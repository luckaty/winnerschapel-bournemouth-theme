<?php get_header()?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
?>


<!-- Revolution Slider Section -->
<!-- START Zegen Home 8 REVOLUTION SLIDER -->
<p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_10_1_wrapper" data-alias="zegen-home-8" data-source="gallery"
    style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">

    <rs-module id="rev_slider_10_1" style="" data-version="6.6.5">
        <rs-slides style="overflow: hidden; position: absolute;">
            <rs-slide style="position: absolute;" data-key="rs-43" data-title="Web Show"
                data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:0;x:(100%);" data-out="a:false;">

              <?php 
				$slider_bg = get_field('slider_background') ?: get_template_directory_uri() . '/images/bgimage2.jpg';
				?>
				
					<img src="<?php echo esc_url($slider_bg); ?>" alt="Slider Background"
						 class="rev-slidebg tp-rs-img rs-lazyload"
						 width="1920" height="1080"
						 data-no-retina
						 data-lazyload="<?php echo esc_url($slider_bg); ?>" 
						 data-parallax="5">
				
				<rs-layer
					id="overlay-dark"
					data-type="shape"
					data-rsp_ch="on"
					data-xy="x:c;yo:0;"
					data-text="w:normal;s:20;l:25;"
					data-dim="w:100%;h:100%;"
					data-basealign="slide"
					data-frame_1="st:0;sp:500;"
					data-frame_999="o:0;st:w;sR:8700;"
					style="z-index:1;background-color:rgba(0,0,0,0.5);">
				</rs-layer>




                <!-- Main title -->
                <h1
					id="slider-10-slide-43-layer-2" 
					class="rs-layer Concept-Title"
					data-type="text"
					data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
					data-rsp_ch="on"
					data-xy="x:l,l,l,c;xo:49px,30px,18px,0;y:m;yo:-60px,-120px,-76px,-127px;"
					data-text="w:normal;s:65,50,45,30;l:74,55,50,40;ls:3px,3px,3px,1px;fw:700;a:left,left,left,center;"
					data-dim="w:754px,699px,546px,400px;"
					data-padding="b:10;"
					data-frame_0="sX:2;sY:2;"
					data-frame_0_mask="u:t;"
					data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;"
					data-frame_1_mask="u:t;"
					data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
					data-frame_999_reverse="x:true;"
					style="z-index:12;font-family:'Poppins';">
                    Welcome to Winners Chapel International Bournemouth
                </h1>

                <!-- Description -->
                <rs-layer id="slider-10-slide-43-layer-14" 
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,l,c;xo:49px,30px,22px,7px;y:m,t,t,t;yo:68px,236px,242px,169px;"
								data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:left,left,left,center;"
								data-dim="w:636px,608px,492px,364px;h:auto,auto,auto,89px;"
								data-frame_0="y:100%;"
								data-frame_0_mask="u:t;"
								data-frame_1="st:2680;sp:1360;sR:2680;"
								data-frame_1_mask="u:t;"
								data-frame_999="o:0;st:w;sR:4960;"
								style="z-index:11;font-family:'Open Sans';">
                    Liberating the world through the preaching of the Word of Faith
                </rs-layer>

                <!-- About us Button -->
                <a
					id="slider-10-slide-43-layer-16" 
					class="rs-layer res-slide-btn pop rev-btn"
					href="about-us.html" target="_self"
					data-type="button"
					data-color="rgba(255,255,255,1)"
					data-xy="x:l,l,l,c;xo:49px,30px,22px,-3px;y:m;yo:126px,81px,99px,65px;"
					data-text="s:16,16,14,14;l:17;fw:500;a:center;"
					data-rsp_bd="off"
					data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
					data-border="bor:3px,3px,3px,3px;"
					data-frame_0="rX:-70deg;oZ:-50;"
					data-frame_1="oZ:-50;e:power4.inOut;st:3160;sp:1750;"
					data-frame_999="o:0;st:w;sR:4640;"
					data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
					style="z-index:10;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
							
                    About Us
                </a>

            </rs-slide>
        </rs-slides>
    </rs-module>

</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->
   
		<!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">					
					<!-- Events Section -->
                    <section class="events-section pad-tb-0 broken-top-50 pt-sm-5 pt-xl-0 pad-bottom-md-none">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
								<!--Events Main Slider-->
								<div class="owl-carousel events-main-wrapper events-style-1" data-loop="1" data-nav="0" data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="2" data-items-tab="1" data-items-mob="1">
									<?php if (have_rows('events')) : ?>
										<?php while (have_rows('events')) : the_row(); 
											$title = get_sub_field('event_title');
											$date = get_sub_field('event_date'); // YYYY-MM-DD
											$time = get_sub_field('event_time'); // 08:00 am
											$countdown = get_sub_field('countdown_datetime'); // full ISO datetime e.g. 2025-07-01T10:00:00
											$month_day = date('M j', strtotime($date)); // e.g. Jun 29
										?>
										<!--Item-->
										<div class="item">
											<!--Events Inner-->
											<div class="events-inner">
												<div class="events-item">
													<div class="media">
														<div class="event-date me-4">
															<?php echo esc_html($month_day); ?>
															<span class="event-time"><?php echo esc_html($time); ?></span>
														</div>
														<div class="media-body">
															<!-- Event Content -->
															<div class="event-content">
																<div class="event-title">
																	<h5><?php echo esc_html($title); ?></h5>
																</div>
																<?php if (!empty($countdown)) : ?>
																	<div class="event-countdown" data-countdown="<?php echo esc_attr($countdown); ?>"></div>
																<?php endif; ?>
																<!--<div class="read-more"><a href="#">Event Details</a></div> -->
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--Events Inner Ends-->
										</div>
										<!--Item Ends-->
										<?php endwhile; ?>
									<?php endif; ?>

								</div>
								<!--Events Owl Slider-->
							</div>
							<!-- Row -->
						</div>
						<!-- Container -->
                    </section>
                    <!-- Events Section End -->
					
					<!-- Welcome to church  -->
					<section class="text-center mt-3 pt-2">
							<div class="container">
								<p class="theme-color sub-title">SERVING GOD PAYS: WE KNOW IT BY EXPERIENCE…</p>								
							</div>
						
							<div class="container">
								<h2 class=""><b>WELCOME TO THE FAMILY OF WINNERS.</b><br> WE WELCOME YOU AND WE EXPECT YOUR<br>  TESTIMONY!</h2>				
							</div>
						
							<div class="container">
								<p>Wecome to Winners Chapel International Bournemouth. We are delighted that you have chosen to visit our website!. We are committed to providing a place of spiritual growth, empowerment, and community. We believe in a life of abundance, guided by the Word of God. Whether you are visiting for the first time or looking for a place to call home, we are here to support you on your faith journey.  We welcome you and pray the Word of God delivered from this ministry becomes a testimony. God bless you.</p>								
							</div>
					</section>
					
							<!--  Church Information-->
                      <section class="church-information mt-1">
						<div class="container">
							<div class="title text-center">
								<h6>Church Updates </h6>
							 	<h2>Stay informed with our services and programs</h2>
							 	<p>We provide weekly updates about all our recent special services, events and programs to ensure that you are current with the latest faith news. </p>
							 	<hr class="custom-hr">
							</div>
								<?php if( have_rows('ministries') ): ?>
									  <div class="ministry-slider owl-carousel owl-theme" style="background-color:#fff; padding: 60px 20px;">
										<?php while( have_rows('ministries') ): the_row(); 
										  $title = get_sub_field('title');
										  $description = get_sub_field('description');
										  $image = get_sub_field('image');
										  $button_text = get_sub_field('button_text');
										  $button_link = get_sub_field('button_link');
										?>
										<div class="item">
										  <div class="ministry-layout d-md-flex align-items-center">
											<div class="ministry-image col-md-6">
											  <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" class="img-fluid rounded shadow w-100">
											</div>
											<div class="ministry-text col-md-6 px-4">
											  <h2><?php echo esc_html($title); ?></h2>
											  <p><?php echo $description; ?></p>
											  <?php if($button_text && $button_link): ?>
												<a href="<?php echo esc_url($button_link); ?>" class="btn btn-danger mt-2"><?php echo esc_html($button_text); ?></a>
											  <?php endif; ?>
											</div>
										  </div>
										</div>
										<?php endwhile; ?>
									  </div>
									<?php endif; ?>

							 </div>
					</section>
					<!--  Church information End-->
	
					
					<!-- CSR Section -->
                    <section class="mt-0 pt-2 mb-0">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                <div class="col-xl-6 align-self-center">
                                    <!-- about wrap -->
                                    <div class="about-wrap relative">
                                        <div class="about-wrap-inner">
                                            <!-- about details -->
                                            <div class="about-wrap-details">
                                                <!-- about button -->
                                                <div class="text-center">
                                                    <div class="">
                                                        <video class="" src="https://winnerschapelbournemouth.org.uk/wp-content/uploads/2024/05/9ea4887b-1ed5-4995-af2c-dac88217dc7d.mp4" controls="" preload="metadata" controlslist="nodownload"></video>
                                                    </div>
                                                    <!-- .col -->
                                                </div>
                                            </div>
                                            <!-- about details End-->
                                        </div>
                                    </div>
                                    <!-- about wrap end -->
                                </div>
                                <!-- .col -->
								<!-- Col -->
                                <div class="col-xl-6 px-3 ps-xl-0">
                                    <div class="title-wrap margin-bottom-30">
                                        <div class="section-title">
                                            <span class="sub-title theme-color text-uppercase">Making a positive difference in the society</span>
                                            <h2 class="section-title margin-top-5">Corporate Social Responsibility</h2>
                                            <span class="border-bottom"></span>
                                        </div>
                                        <div class="container">
											  <p>The Corporate Social Responsibility (CSR) was formed over 10 years ago as a community development arm of Winners Chapel International UK, to impact our local community as a way of giving back to the communities where our churches are situated in the UK.</p>
											  <p>Our aim is to support the communities we serve and promote their inspiring stories of change by investing in 5 core areas:</p>
												<ul class="csr-list">
												<li >Skills development through education, enterprise and employability training</li>
												<li>Food Bank and Poverty Alleviation</li>
												<li>Tackling Homelessness</li>
												<li>Improving Health, Safety and the Environment</li>
												<li>Improving Collaboration&nbsp;and Partnership</li>
												</ul>
											   <p style="text-align: justify;">Since our inauguration, we have carried out various projects in our communities and an example is the picture reference. For more information <span style="font-size: 18px;"><span style="font-size: 20px; color: #ff0000;"><strong><a style="color: #ff0000;" href="http://www.winnersinthecommunity.com/" data-auth="NotApplicable" data-linkindex="0" data-ogsc="">CLICK HERE</a></strong></span>&nbsp;</span>to access our Community Development website.</p>

										</div>
                                        
                                    </div>
									
                                </div>
                                <!-- Col -->
                            </div>
                            <!-- Row -->
                        </div>
                        <!-- Container -->
                    </section>
                   <!--  CSR End-->
					
			
					<!-- Ministries Section -->
                    <section id="ministries-section" class="ministries-section mt-3 pt-2">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
								<div class="offset-md-2 col-md-8">
								    <div class="title-wrap text-center">
								        <div class="section-title">
								            <span class="sub-title theme-color text-uppercase">Ministries</span>
                                            <h2 class="section-title margin-top-5">Our Ministries</h2>
								            <span class="border-bottom center"></span>											
								        </div>
								    </div>
								</div>
								<!--Ministries Main Slider-->
								<div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1" data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
									<!--Item-->
									<div class="item">
										<div class="ministries-box-style-2">
											<!-- Ministries Inner -->
											<div class="ministries-inner">
												<div class="ministries-thumb">
													<img class="img-fluid squared w-100" src="<?php echo get_template_directory_uri(); ?>/images/winners-kid.jpeg" style="height: 150px; " alt="kids-church">
												</div>
												<!-- Ministries Content -->
												<div class="ministries-content pad-30">
													<div class="ministries-title margin-bottom-15">													
														<h4><a href="winners-kids" class="ministries-link">Winners Kids</a></h4>
													</div>
													<div class="ministries-desc">
														<p>Our Children’s church where we teach children in the way of the Lord holds every sunday 9am and 11am. Need more info? contact us.</p>
													</div>
													<div class="ministries-link margin-top-20">
														<a target="_blank" href="winners-kids" class="link">Read More</a>
													</div>
												</div>
											</div>
											<!-- Ministries Inner Ends -->
										</div>
									</div>
									<!--Item Ends-->
									<!--Item-->
									<div class="item">
										<div class="ministries-box-style-2">
											<!-- Ministries Inner -->
											<div class="ministries-inner">
												<div class="ministries-thumb">
													<img class="img-fluid squared w-100" src="<?php echo get_template_directory_uri(); ?>/images/teenschurch.jpg" style="max-height: 150px; " alt="Teens church">
												</div>
												<!-- Ministries Content -->
												<div class="ministries-content pad-30">
													<div class="ministries-title margin-bottom-15">													
														<h4><a href="teens-church" class="ministries-link">Teen Church</a></h4>
													</div>
													<div class="ministries-desc">
														<p>Our vibrant Teens church holds every sunday with two services 9am and 11am. If you need more information, please contact us.</p>
													</div>
													<div class="ministries-link margin-top-20">
														<a target="_blank" href="teens-church" class="link">Read More</a>
													</div>
												</div>
											</div>
											<!-- Ministries Inner Ends -->
										</div>
									</div>
									<!--Item Ends-->
									<!--Item-->
									<div class="item">
										<div class="ministries-box-style-2">
											<!-- Ministries Inner -->
											<div class="ministries-inner">
												<div class="ministries-thumb">
													<img class="img-fluid squared w-100" src="<?php echo get_template_directory_uri(); ?>/images/youth-alive.jpg" style="max-height: 150px; " alt="Youth alive">
												</div>
												<!-- Ministries Content -->
												<div class="ministries-content pad-30">
													<div class="ministries-title margin-bottom-15">													
														<h4><a href="youth-alive" class="ministries-link">Youth Alive</a></h4>
													</div>
													<div class="ministries-desc">
														<p>Our Youths are burning for the Lord and equipped with relevant skills for the future. Contact us for more information.<br></p>
													</div>
													<div class="ministries-link margin-top-20">
														<a target="_blank" href="youth-alive" class="link">Read More</a>
													</div><br>
												</div>
											</div>
											<!-- Ministries Inner Ends -->
										</div>
									</div>
									<!--Item Ends-->
									<!--Item-->
									<div class="item">
										<div class="ministries-box-style-2">
											<!-- Ministries Inner -->
											<div class="ministries-inner">
												<div class="ministries-thumb">
													<img class="img-fluid squared w-100" src="<?php echo get_template_directory_uri(); ?>/images/wofbi.jpeg" style="height: 150px; " alt="Wofbi">
												</div>
												<!-- Ministries Content -->
												<div class="ministries-content pad-30">
													<div class="ministries-title margin-bottom-15">													
														<h4><a href="wofbi" class="ministries-link">WOFBI</a></h4>
													</div>
													<div class="ministries-desc">
														<p>Word of Faith Bible Institute holds every year with our 3 tiers i.e WOFBI BCC, LCC & LDC. To register, please call or email us for more information.</p>
													</div>
													<div class="ministries-link margin-top-20">
														<a target="_blank" href="wofbi" class="link">Read More</a>
													</div>
												</div>
											</div>
											<!-- Ministries Inner Ends -->
										</div>
									</div>
									<!--Item Ends
										<!--Item-->
									<div class="item">
										<div class="ministries-box-style-2">
											<!-- Ministries Inner -->
											<div class="ministries-inner">
												<div class="ministries-thumb">
													<img class="img-fluid squared w-100" src="<?php echo get_template_directory_uri(); ?>/images/wofbi.jpeg" style="height: 150px; " alt="Wofbi">
												</div>
												<!-- Ministries Content -->
												<div class="ministries-content pad-30">
													<div class="ministries-title margin-bottom-15">													
														<h4><a href="service-units" class="ministries-link">Service Units</a></h4>
													</div>
													<div class="ministries-desc">
														<p>We have many opportunities for every person to minister and in turn, be ministered to. Take the time to explore the different ministry opportunities.</p>
													</div>
													<div class="ministries-link margin-top-20">
														<a target="_blank" href="service-units" class="link">Read More</a>
													</div>
												</div>
											</div>
											<!-- Ministries Inner Ends -->
										</div>
									</div>
									<!--Item Ends-->
								</div>
								<!--Ministries Owl Slider-->
							</div>
							<!-- Row -->
						</div>
						<!-- Container -->
                    </section>
                    <!-- Ministries Section End -->
					<!--review section-->
					<section class="mt-0 pt-2">
						<div class="container">
						<script type='text/javascript' src='https://link.winnerschapelbournemouth.org.uk/reputation/assets/review-widget.js'></script><iframe class='lc_reviews_widget' src='https://link.winnerschapelbournemouth.org.uk/reputation/widgets/review_widget/qBALPrDtOy9lAHSW1kIj' frameborder='0' scrolling='no' style='min-width: 100%; width: 100%;'></iframe>
						</div>
					
					</section>
					

				</div>
            </div>
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

<?php get_footer()?>
