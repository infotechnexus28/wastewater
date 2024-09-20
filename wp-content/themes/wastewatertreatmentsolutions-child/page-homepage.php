<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>
<section class="hero-main"
    style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-bg.png');background-size:cover;background-repeat: no-repeat;">
    <div class="container-fluid">
        <div class="container pt-5 position-relative">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="d-flex flex-column pt-5">
                        <h1><span>Wastewater</span></br> <span>Treatment Solutions</span></h1>
                        <h4 class="mt-2">Perth’s Leading Residential & </br> Commercial Wastewater Specialists</h4>
                        <div class="d-flex gap-3 mt-4">
                            <a class="btn btn-cta-2 py-3 px-3" href="<?php echo get_field('cta_header_1_link'); ?>">
                                <?php echo get_field('cta_header_1'); ?> <svg class="ms-2" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.06049 16.3699C7.78432 16.3699 7.50815 16.2739 7.29671 16.0778C6.87384 15.6856 6.87384 15.0533 7.29671 14.6611L13.8082 8.62216C14.0671 8.38204 14.0671 7.98988 13.8082 7.74976L7.29671 1.71085C6.87384 1.31866 6.87384 0.686333 7.29671 0.294143C7.71959 -0.0980476 8.40139 -0.0980476 8.82426 0.294143L15.3357 6.33306C16.436 7.35355 16.436 9.01436 15.3357 10.0349L8.82426 16.0738C8.61283 16.2699 8.33665 16.366 8.06049 16.366V16.3699Z"
                                        fill="black" />
                                    <path
                                        d="M15.0811 9.1904H1.07877C0.483288 9.1904 0 8.74218 0 8.18992C0 7.63765 0.483288 7.18943 1.07877 7.18943H15.0811C15.6766 7.18943 16.1599 7.63765 16.1599 8.18992C16.1599 8.74218 15.6766 9.1904 15.0811 9.1904Z"
                                        fill="black" />
                                </svg>
                            </a>
                            <a class="btn btn-cta-2 py-3 px-3" href="<?php echo get_field('cta_header_2_link'); ?>">
                                <?php echo get_field('cta_header_2'); ?><svg class="ms-2" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.06049 16.3699C7.78432 16.3699 7.50815 16.2739 7.29671 16.0778C6.87384 15.6856 6.87384 15.0533 7.29671 14.6611L13.8082 8.62216C14.0671 8.38204 14.0671 7.98988 13.8082 7.74976L7.29671 1.71085C6.87384 1.31866 6.87384 0.686333 7.29671 0.294143C7.71959 -0.0980476 8.40139 -0.0980476 8.82426 0.294143L15.3357 6.33306C16.436 7.35355 16.436 9.01436 15.3357 10.0349L8.82426 16.0738C8.61283 16.2699 8.33665 16.366 8.06049 16.366V16.3699Z"
                                        fill="black" />
                                    <path
                                        d="M15.0811 9.1904H1.07877C0.483288 9.1904 0 8.74218 0 8.18992C0 7.63765 0.483288 7.18943 1.07877 7.18943H15.0811C15.6766 7.18943 16.1599 7.63765 16.1599 8.18992C16.1599 8.74218 15.6766 9.1904 15.0811 9.1904Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="position-relative">
                        <img class="overlay-img" width="100%" height="auto"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-overlay.png" />
                    </div>
                </div>
            </div>
            <div class="position-relative w-100" style="bottom: -7.125rem;">
                <div class="d-flex-column d-lg-flex justify-content-center">
                    <div class="logo-container logo-1 d-flex align-items-center mb-3 mb-lg-0">
                        <div class="d-flex justify-content-center w-100">
                            <?php
                            $about_logo_1 = get_field('about_logo_1');
                            if ($about_logo_1) {
                                $about_logo_1 = $about_logo_1['url'];
                            }
                            ?>
                            <img src="<?php echo $about_logo_1; ?>" />
                        </div>
                    </div>
                    <div class="hero-desc d-flex align-items-center mb-3 mb-lg-0">
                        <p class="text-center mb-0 p-5"><?php echo get_field('about_description'); ?></p>
                    </div>
                    <div class="logo-container  logo-2 d-flex align-items-center">
                        <div class="d-flex justify-content-center w-100">
                            <?php
                            $about_logo_2 = get_field('about_logo_2');
                            if ($about_logo_2) {
                                $about_logo_2 = $about_logo_2['url'];
                            }
                            ?>
                            <img src="<?php echo $about_logo_2; ?>" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-offered">
    <div class="container">
        <h5 class="section-desc"><?php echo get_field('why_section_title'); ?></h5>
        <h1 class="section-title" id="service-title-preview"><span>Septic Tank</span> Installations</h1>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="service-container">
                    <img class="mt-2 pb-2" width="100%" height="350px" style="object-fit:contain;"
                        id="service-image-preview"
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service-img.png" />
                    <p class="pt-4" id="service-description-preview">Our team of experts specialises in the professional
                        installation of septic tanks,
                        adhering
                        strictly to local council regulations. From understanding the intricacies of septic systems,
                        including primary and secondary tanks, to managing all necessary approvals, we guarantee a
                        flawless setup.</p>
                    <a id="btn-service-link" class="btn btn-cta-2 py-3 px-5 mt-2" href="/sand-pads-compactions/">
                        Read More <svg class="ms-1" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.06049 16.3699C7.78432 16.3699 7.50815 16.2739 7.29671 16.0778C6.87384 15.6856 6.87384 15.0533 7.29671 14.6611L13.8082 8.62216C14.0671 8.38204 14.0671 7.98988 13.8082 7.74976L7.29671 1.71085C6.87384 1.31866 6.87384 0.686333 7.29671 0.294143C7.71959 -0.0980476 8.40139 -0.0980476 8.82426 0.294143L15.3357 6.33306C16.436 7.35355 16.436 9.01436 15.3357 10.0349L8.82426 16.0738C8.61283 16.2699 8.33665 16.366 8.06049 16.366V16.3699Z"
                                fill="black" />
                            <path
                                d="M15.0811 9.1904H1.07877C0.483288 9.1904 0 8.74218 0 8.18992C0 7.63765 0.483288 7.18943 1.07877 7.18943H15.0811C15.6766 7.18943 16.1599 7.63765 16.1599 8.18992C16.1599 8.74218 15.6766 9.1904 15.0811 9.1904Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="services-container">
                    <ul class="navbar-nav gap-2">
                        <?php
                        $args = array(
                            'post_type' => 'service', // Replace with your custom post type
                        );

                        $service_query = new WP_Query($args);

                        if ($service_query->have_posts()):
                            while ($service_query->have_posts()):
                                $service_query->the_post();
                                $service_img_url = get_field('service_image');
                                if ($service_img_url) {
                                    $service_img_url = $service_img_url['url'];
                                }
                                echo '<li class="nav-item"><a class="nav-link text-center py-3 px-5 cursor-pointer" data-id="' . get_the_ID() . '" data-title="' . get_field('service_name') . '" data-desc="' . get_field('service_description') . '" data-img="' . esc_url($service_img_url) . '">' . get_field('service_name') . '</a></li>';
                                ?>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>No books found</p>';
                        endif;
                        ?>
                    </ul>
                    <!-- <?php
                    $menu_name = 'Services'; // Replace with your menu's slug or name
                    $first_half_items = get_first_half_menu_items($menu_name, false, true);

                    if (!empty($first_half_items)) {
                        echo '<ul class="navbar-nav gap-2">';
                        foreach ($first_half_items as $item) {
                            echo '<li class="nav-item"><a class="nav-link text-center py-3 px-5" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
                        }
                        echo '</ul>';
                    }

                    ?> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="why-section">
    <div class="container">
        <h5 class="section-title text-center pb-4"><?php echo get_field('why_section_title'); ?></h5>
        <div class="d-flex justify-content-center gap-5 flex-wrap pt-1">
            <div class=" why-item">
                <div class="d-flex flex-column align-items-center gap-4">
                    <h4 class="text-center"><?php echo get_field('why_title_1'); ?></h4>
                    <?php
                    $why_image_1 = get_field('why_image_1');
                    if ($why_image_1) {
                        $why_image_1 = $why_image_1['url'];
                    }
                    ?>
                    <img src="<?php echo $why_image_1; ?>" />
                </div>
            </div>
            <div class=" why-item">
                <div class="d-flex flex-column align-items-center gap-4">
                    <h4 class="text-center"><?php echo get_field('why_title_2'); ?></h4>
                    <?php
                    $why_image_2 = get_field('why_image_2');
                    if ($why_image_2) {
                        $why_image_2 = $why_image_2['url'];
                    }
                    ?>
                    <img src="<?php echo $why_image_2; ?>" />
                </div>

            </div>
            <div class=" why-item">
                <div class="d-flex flex-column align-items-center gap-4">
                    <h4 class="text-center"><?php echo get_field('why_title_3'); ?></h4>
                    <?php
                    $why_image_3 = get_field('why_image_3');
                    if ($why_image_3) {
                        $why_image_3 = $why_image_3['url'];
                    }
                    ?>
                    <img src="<?php echo $why_image_3; ?>" />
                </div>

            </div>
            <div class=" why-item">
                <div class="d-flex flex-column align-items-center gap-4">
                    <h4 class="text-center"><?php echo get_field('why_title_4'); ?></h4>
                    <?php
                    $why_image_4 = get_field('why_image_4');
                    if ($why_image_4) {
                        $why_image_4 = $why_image_4['url'];
                    }
                    ?>
                    <img src="<?php echo $why_image_4; ?>" />
                </div>

            </div>
            <div class=" why-item">
                <div class="d-flex flex-column align-items-center gap-4">
                    <h4 class="text-center"><?php echo get_field('why_title_5'); ?></h4>
                    <?php
                    $why_image_5 = get_field('why_image_5');
                    if ($why_image_5) {
                        $why_image_5 = $why_image_5['url'];
                    }
                    ?>
                    <img src="<?php echo $why_image_5; ?>" />
                </div>

            </div>
        </div>
    </div>

</section>
<section class="testimonial-section">
    <div class="container">
        <h5 class="section-desc text-center"><?php echo get_field('testimonial_section_title_small'); ?></h5>
        <h5 class="section-title text-center pt-2"><?php echo get_field('testimonial_section_title'); ?></h5>

        <div class="slick-slider">
            <?php
            $args = array(
                'post_type' => 'testimonial', // Replace with your custom post type
            );

            $testimonial_query = new WP_Query($args);

            if ($testimonial_query->have_posts()):
                while ($testimonial_query->have_posts()):
                    $testimonial_query->the_post();
                    $testimonial_rating = get_field('testimonial_rating');
                    $testimonial_image = get_field('testimonial_image');
                    if ($testimonial_image) {
                        $testimonial_image = $testimonial_image['url'];
                    }
                    ?>
                    <div data-thumb="<?php echo $testimonial_image; ?>">
                        <div class="d-flex justify-content-center">
                            <?php
                            $max_stars = 5;
                            for ($i = 1; $i <= $testimonial_rating; $i++) {
                                ?>
                                <img width="21px" height="21px"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/star.svg');" />
                                <?php
                            }

                            ?>
                        </div>
                        <div class="d-flex justify-content-center px-5">
                            <p class="section-paragraph text-center mt-3 w-75 px-0 px-lg-5">
                                <?php echo get_field('testimonial_description'); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <!-- <div class="d-flex justify-content-center">
            <div class="d-flex align-items-center gap-2 me-3">
                <div class="d-flex align-items-center gap-1">
                    <div>
                        < Previous</div>
                            <div><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/left.png" />
                            </div>

                    </div>
                    <div>
                        <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/center.png" />
                    </div>
                    <div class="d-flex align-items-center gap-1">

                        <div><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonials/right.png" />
                        </div>
                        <div>
                            Next ></div>

                    </div>
                </div>
            </div>

        </div> -->

</section>
<section class="get-quote" id="get-quote">
    <div class="container">
        <h5 class="section-title"><?php echo get_field('contact_form_title'); ?></h5>
        <p style="color:#4E4646;"><?php echo get_field('contact_form_description'); ?></p>
        <div class="row">
            <div class="col-12 col-md-6">
                <?php echo get_field('form_code'); ?>
            </div>
            <div class="col-12 col-md-6">
                <?php
                $contact_form_image = get_field('contact_form_image');
                if ($contact_form_image) {
                    $contact_form_image = $contact_form_image['url'];
                }
                ?>
                <div class="px-0 px-lg-5">
                    <img src="<?php echo $contact_form_image; ?>" height="auto" width="100%" />

                </div>
            </div>
        </div>
    </div>

</section>
<?php
get_footer();
?>
<script>
    jQuery(document).ready(function ($) {

        $('.services-container .nav-link').on('click', function (e) {
            e.preventDefault();
            let postId = $(this).attr('data-id');
            console.log($(this).attr('data-title'));
            $.ajax({
                url: ajax_object.ajaxurl,
                type: 'POST',
                data: {
                    action: 'get_service_by_id',
                    post_id: postId,
                },
                success: function (response) {
                    $('#service-title-preview').html(response.data.service_name);
                    $('#service-image-preview').attr('src', response.data.service_image.url);
                    $('#service-description-preview').html(response.data.service_description);
                    $('#btn-service-link').attr('href', response.data.service_link);
                 
                },
                error: function (xhr, status, error) {
                    console.log('AJAX Error: ', error);
                }
            });

        });
        $('.services-container .nav-link:first').trigger('click');

        $('.slick-slider').slick({
            dots: true,          // Enable dot navigation
            arrows: true,        // Enable next/prev arrows
            infinite: true,      // Infinite scrolling
            speed: 300,
            slidesToShow: 1,     // Number of slides to show
            adaptiveHeight: true,
            customPaging: function (slider, i) {
                // Handle Previous and Next text for custom dots
                var thumb = $(slider.$slides[i]).data('thumb');
                if (i === 0) {
                    return '<div class="custom-dot d-flex align-items-center">' +
                        '<span> < Previous &nbsp </span>' +
                        '<img src="' + thumb + '" alt="Thumb" />' +
                        '</div>';
                } else if (i === slider.$slides.length - 1) {
                    return '<div class="custom-dot d-flex align-items-center"">' +
                        '<img src="' + thumb + '" alt="Thumb" />' +
                        '<span>&nbsp Next > </span>' +
                        '</div>';
                } else {
                    return '<div class="custom-dot">' +
                        '<img src="' + thumb + '" alt="Thumb" />' +
                        '</div>';
                }
            },

            // Add the active class to the custom dot when the slide changes
            afterChange: function (event, slick, currentSlide) {
                // Remove active class from all dots
                $('.slick-dots li').removeClass('active');
                // Add active class to the current dot
                $('.slick-dots li').eq(currentSlide).addClass('active');
            }
        });

        // Set the initial active class to the first dot
        $('.slick-dots li').eq(0).addClass('active');
    });
</script>