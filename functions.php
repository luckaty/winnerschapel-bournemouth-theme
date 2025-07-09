<?php
/**
 * Theme Setup
 */
function winnerschapel_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus(array(
        'main-menu'   => __('Main Menu'),
        'mobile-menu' => __('Mobile Menu'),
    ));
}
add_action('after_setup_theme', 'winnerschapel_theme_setup');


/**
 * Enqueue Styles and Scripts
 */
function winnerschapel_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();

    // Styles
    wp_enqueue_style('bootstrap', $theme_uri . '/css/bootstrap.min.css', [], '5.0');
    wp_enqueue_style('fontawesome', $theme_uri . '/css/font-awesome.min.css', [], '4.7.0');
    wp_enqueue_style('simple-line-icons', $theme_uri . '/css/simple-line-icons.min.css', [], '2.4.0');
    wp_enqueue_style('themify-icons', $theme_uri . '/css/themify-icons.css', [], '1.0');
    wp_enqueue_style('owl-carousel', $theme_uri . '/css/owl.carousel.min.css', [], '2.3.4');
    wp_enqueue_style('owl-theme', $theme_uri . '/css/owl.theme.default.min.css', [], '2.3.4');
    wp_enqueue_style('magnific-popup', $theme_uri . '/css/magnific-popup.css', [], '1.1.0');
    wp_enqueue_style('pe-icon-7-stroke', $theme_uri . '/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
    wp_enqueue_style('rs-settings', $theme_uri . '/rs-plugin/css/settings.css');
    wp_enqueue_style('rs6', $theme_uri . '/rs-plugin/css/home-8/rs6.css');
    wp_enqueue_style('red-theme', $theme_uri . '/css/color-schemes/red.css');
    wp_enqueue_style('main-style', $theme_uri . '/css/style.css');

    // Scripts
    wp_enqueue_script('bootstrap-bundle', $theme_uri . '/js/bootstrap.bundle.min.js', ['jquery'], '5.0', true);
    wp_enqueue_script('jquery-easing', $theme_uri . '/js/jquery.easing.min.js', ['jquery'], '1.4', true);
    wp_enqueue_script('owl-carousel', $theme_uri . '/js/owl.carousel.min.js', ['jquery'], '2.3.4', true);
    wp_enqueue_script('jquery-paroller', $theme_uri . '/js/jquery.paroller.min.js', ['jquery'], '1.4.6', true);
    wp_enqueue_script('isotope', $theme_uri . '/js/isotope.pkgd.min.js', ['jquery'], '3.0.6', true);
    wp_enqueue_script('countdown', $theme_uri . '/js/jquery.countdown.min.js', ['jquery'], '2.2.0', true);
    wp_enqueue_script('circle-progress', $theme_uri . '/js/jquery.circle.progress.js', ['jquery'], '1.2.2', true);
    wp_enqueue_script('magnific-popup', $theme_uri . '/js/jquery.magnific-popup.min.js', ['jquery'], '1.1.0', true);
    wp_enqueue_script('validator', $theme_uri . '/js/validator.min.js', ['jquery'], null, true);
    wp_enqueue_script('smartresize', $theme_uri . '/js/smartresize.min.js', ['jquery'], null, true);
    wp_enqueue_script('appear', $theme_uri . '/js/jquery.appear.min.js', ['jquery'], null, true);
    wp_enqueue_script('custom', $theme_uri . '/js/custom.js', ['jquery'], null, true);

    // Revolution Slider Scripts
    wp_enqueue_script('tp-tools', $theme_uri . '/rs-plugin/js/jquery.themepunch.tools.min.js', ['jquery'], null, true);
    wp_enqueue_script('tp-revolution', $theme_uri . '/rs-plugin/js/jquery.themepunch.revolution.min.js', ['jquery'], null, true);
    wp_enqueue_script('rbtools', $theme_uri . '/rs-plugin/js/home-8/rbtools.min.js', ['jquery'], null, true);
    wp_enqueue_script('rs6', $theme_uri . '/rs-plugin/js/home-8/rs6.min.js', ['jquery'], null, true);
    wp_enqueue_script('home-8', $theme_uri . '/rs-plugin/js/home-8/home-8.js', ['jquery'], null, true);

    // Inline CSS
    $custom_css = "
        #rev_slider_6_1_wrapper .tp-loader.spinner1 { background-color: #FFFFFF !important; }
        .rs-layer.Concept-Content a,
        .rs-layer.Concept-Content a:visited {
            color: #fff !important;
            border-bottom: 1px solid #fff !important;
            font-weight: 700 !important;
        }
        .rs-layer.Concept-Content a:hover {
            border-bottom: 1px solid transparent !important;
        }
        .rs-layer.Concept-Content-Dark a,
        .rs-layer.Concept-Content-Dark a:visited {
            color: #000 !important;
            border-bottom: 1px solid #000 !important;
            font-weight: 700 !important;
        }
        .rs-layer.Concept-Content-Dark a:hover {
            border-bottom: 1px solid transparent !important;
        }
        @media only screen and (max-width:575px) {
            rs-layer.res-slide-btn {
                padding: 7px 16px !important;
                font-size: 13px !important;
            }
        }
    ";
    wp_add_inline_style('main-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'winnerschapel_enqueue_scripts');


/**
 * Inline Countdown Script for Events
 */
function winnerschapel_inline_countdown_script() {
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const countdowns = document.querySelectorAll(".event-countdown");

        countdowns.forEach(el => {
            const target = new Date(el.dataset.countdown).getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const diff = target - now;

                if (diff <= 0) {
                    el.innerHTML = "<span style='color:green; font-weight:bold;'>Event Started</span>";
                    return;
                }

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                el.innerHTML = `<strong>${days}</strong>d <strong>${hours}</strong>h <strong>${minutes}</strong>m <strong>${seconds}</strong>s`;
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'winnerschapel_inline_countdown_script', 100);


/**
 * Enqueue Tab Script (Only on Front Page)
 */
function winnerschapel_enqueue_tab_script() {
    if (is_front_page()) {
        wp_enqueue_script(
            'custom-tab',
            get_template_directory_uri() . '/js/custom-tab.js',
            ['jquery'],
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'winnerschapel_enqueue_tab_script');


/**
 * Initialize Owl Carousel (Inline Script)
 */
function winnerschapel_init_owl_carousel() {
    $owl_init_script = <<<EOD
    jQuery(document).ready(function($) {
        // Events carousel
        $('.owl-carousel.events-main-wrapper').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: { items: 1 },
                768: { items: 1 },
                992: { items: 2 }
            }
        });

        // Testimony carousel
        $('.testimony-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            smartSpeed: 5000
        });

        // Ministry carousel
        $('.ministry-slider').owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 15000,
            autoplayHoverPause: true,
            smartSpeed: 1000
        });
    });
    EOD;

    wp_add_inline_script('owl-carousel', $owl_init_script);
}
add_action('wp_enqueue_scripts', 'winnerschapel_init_owl_carousel', 20);
