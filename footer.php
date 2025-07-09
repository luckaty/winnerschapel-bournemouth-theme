<?php
/**
 * The template for displaying the footer
 */
?>

<!-- Footer -->
<footer id="footer" class="footer footer-1 footer-bg-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/footer-bg-image.jpg' ); ?>');">
    <!-- Footer Widgets -->
    <div class="footer-widgets">
        <div class="footer-middle-wrap footer-overlay-dark">
            <div class="container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-lg-3 widget text-widget">
                        <div class="widget-title">
                            <img class="footer-logo-img" src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-light.png' ); ?>" alt="Logo">
                        </div>
                        <div class="widget-text margin-bottom-30">
                            <p>Join us every Sunday and Wednesday for worship at our faith-based, Bible-believing church in Bournemouth.</p>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/people/Winners-Chapel-International-Bournemouth/100086057989378/" class="social-fb"><span class="ti-facebook"></span></a>
                            <a href="https://x.com/Wcibournemouth" class="social-twitter"><span class="ti-twitter"></span></a>
                            <a href="https://www.instagram.com/winnerschapelbournemouth/" class="social-instagram"><span class="ti-instagram"></span></a>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-lg-3 widget text-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">Quick Links</h3>
                        </div>
                        <div class="menu-quick-links">
                            <ul class="menu">
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/about-us') ); ?>">About Us</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/announcement') ); ?>">Announcements</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/sermons') ); ?>">Sermons</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/downloads') ); ?>">Downloads</a></li>
                                <li class="menu-item"><a href="https://wa.me/447438333997?text=Transport%20Request%0A%0AName%20%2F%20Family%20name%20%3A%20%0ANumber%20of%20people%3A%20%0AFirst%20line%20of%20address%20%3A%20%0APost%20code%20%3A%20%0ALandmark%20Area%20(if%20known)%3A%20%0AEstimated%20time%20to%20be%20picked%20up%3A%20">Request Transportation</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/service-units') ); ?>">Service Units</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/prophetic-focus') ); ?>">Prophetic Focus</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact Us</a></li>
                                <li class="menu-item"><a href="https://www.dphstore.co.uk">Book Store</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-lg-3 widget text-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">Ministries</h3>
                        </div>
                        <div class="menu-quick-links">
                            <ul class="menu">
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/winners-kids') ); ?>">Winners Kids</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/teens-church') ); ?>">Teens Church</a></li>
                                <li class="menu-item"><a href="https://winnersinthecommunity.com">Community Development</a></li>
                                <li class="menu-item"><a href="<?php echo esc_url( home_url('/wofbi') ); ?>">WOFBI</a></li>
                                <li class="menu-item"><a href="http://faithtabernacle.org.ng">David Oyedepo Ministries</a></li>
                                <li class="menu-item"><a href="http://www.faithoyedepo.org">Faith Oyedepo Ministries</a></li>
                                <li class="menu-item"><a href="http://www.davidabioye.org.ng">Bishop Abioye Ministries</a></li>
                                <li class="menu-item"><a href="http://www.domimedia.org">DOMI Radio</a></li>
                                <li class="menu-item"><a href="http://www.covenantuniversity.edu.ng">Covenant University</a></li>
                                <li class="menu-item"><a href="https://lmu.edu.ng">Landmark University</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 4 -->
                    <div class="col-lg-3 widget contact-info-widget">
                        <div class="widget-title">
                            <h3 class="title typo-white">Service Times</h3>
                        </div>
                        <p>Sunday Service</p>
                        <p class="sub-text">10:00 am - 11:50 am</p>
                        <p>Wednesday Service</p>
                        <p class="sub-text">6:00 pm - 7:30 pm</p>
                        <p>Covenant Hour of Prayer</p>
                        <p class="sub-text-menu">Mon to Sat:</p>
                        <p class="sub-text">06:00 am - 07:00 am</p>
                        <p>Winners Satellite Fellowship</p>
                        <p class="sub-text-menu">Every Saturday</p> 
                        <p class="sub-text">05:00 pm – 06:00 pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright">
        <div class="footer-bottom-wrap pad-tb-20 typo-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="footer-bottom-items pull-left">
                            <li class="nav-item">
                                <p>© <?php echo date('Y'); ?> Winners Chapel International, Bournemouth. All rights reserved.</p>
                            </li>
                        </ul>
                        <ul class="footer-bottom-items footer-menu pull-right">
                            <li class="nav-item"><a href="https://winners-chapel.org.uk/wp-content/uploads/2024/11/WMA_PrivacyPolicy2024.pdf">Privacy Policy</a></li>
                            <li class="nav-item"><a href="https://winners-chapel.org.uk/wp-content/uploads/2020/09/Safeguarding-Statement-for-WMA-WCI.pdf">Safeguarding Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- LeadConnector Widget -->
<script 
  src="https://beta.leadconnectorhq.com/loader.js"  
  data-resources-url="https://beta.leadconnectorhq.com/chat-widget/loader.js" 
  data-widget-id="6810cc660edccfb8006fc1db">
</script>

<?php wp_footer(); ?>
</body>
</html>
