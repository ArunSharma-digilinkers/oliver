<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
    <div class="main-wrapper">

        <?php include_once(TEMPLATE_FRONT . DS . "carousel.php"); ?>

        <div class="hm-info-wrapper section-entry" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 hm-ab" data-aos="fade-right">
                        <img src="<?php echo $path; ?>img/info-img1.jpg" alt="" class="img-fluid info-img2">
                        <div class="row hm-row">
                            <div class="col-xl-12 col-lg- col-sm-12" data-aos="fade-up">
                                <img src="<?php echo $path; ?>img/info-img2.jpg" alt="" class="img-fluid info-img2">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-12 info">
                        <div class="">
                            <h5>Oliver Batteries</h5>
                            <h1>
                                Built to Power Designed to Last
                            </h1>
                            <p>
                                At Oliver Batteries, we don’t just deliver energy we deliver reliability. Whether you're
                                at home, on the road, or driving change across cities, our high-performance batteries
                                ensure your life stays powered without interruption.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="cards">
                                    <div class="icon">
                                        <img src="<?php echo $path; ?>img/energy.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="details">
                                        <p>
                                            From <strong>inverter batteries</strong> that protect your comfort during
                                            power cuts, to <strong>automotive batteries</strong> that fuel your journey,
                                            and <strong>E-rickshaw batteries</strong> that drive sustainable mobility we
                                            offer solutions that fit every lifestyle, every industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-btn-1">
                            <a href="<?php echo $path; ?>about-us">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-one section-entry" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="cta-wrap">
                            <h2>
                                Tired of unexpected power cuts disrupting your life?
                            </h2>
                            <h3>
                                Choose Oliver Inverter Batteries for uninterrupted energy and peace of mind to your
                                home.
                            </h3>
                        </div>
                        <div class="c-btn-2 mt-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                Enquiry Now
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="cta-wrap">
                            <h2>
                                Ready for reliable backup?
                            </h2>
                            <h3>
                                Find your perfect Oliver inverter battery now!
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-us-wrapper section-entry" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="deafult-heading text-center">
                            <h2>
                                Why Choose Oliver?
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="why-list">
                            <div class="why-text">
                                <h4>Advanced <br>Manufacturing</h4>
                                <p>
                                    Precision-engineered batteries from our advanced manufacturing facility.
                                </p>
                            </div>
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/robotics.png" alt="eco icon" class="img-fluid" />
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-text">
                                <h4>Superior <br>Durability</h4>
                                <p>
                                    Built to last in the toughest Indian conditions.
                                </p>
                            </div>
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/reliability.png" alt="eco icon" class="img-fluid" />
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-text">
                                <h4>Wide <br>Compatibility</h4>
                                <p>
                                    Designed for residential, commercial, and transportation applications.
                                </p>
                            </div>
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/configuration.png" alt="eco icon" class="img-fluid" />
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-sm-12" data-aos="fade-down">
                        <div class="why-bg"></div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="why-list">
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/support.png" alt="eco icon" class="img-fluid" />
                            </div>
                            <div class="why-text">
                                <h4>Reliable Service <br>Support</h4>
                                <p>
                                    Backed by a dedicated service team and strong dealer network.
                                </p>
                            </div>

                        </div>
                        <div class="why-list">
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/operation.png" alt="eco icon" class="img-fluid" />
                            </div>
                            <div class="why-text">
                                <h4>
                                    Engineered for <br>Excellence
                                </h4>
                                <p>
                                    Oliver batteries combine research, smart design, and power expertise.
                                </p>
                            </div>

                        </div>
                        <div class="why-list">
                            <div class="why-icon">
                                <img src="<?php echo $path; ?>img/processing-time.png" alt="eco icon"
                                    class="img-fluid" />
                            </div>
                            <div class="why-text">
                                <h4>
                                    Powering <br>Progress
                                </h4>
                                <p>
                                    Driven by tech and trust, we power homes and cities.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hm-product-wrapper section-entry" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="deafult-heading">
                            <h2>
                                Our Products
                            </h2>
                        </div>
                        <p>
                            Discover the perfect power partner for your needs with <strong>Oliver Batteries</strong>.
                            From high-performance inverter batteries for seamless backup, to durable E-rickshaw and
                            automotive solutions built for Indian roads our products are designed for
                            <strong>reliability</strong>, <strong>efficiency</strong>, and <strong>long life</strong>.
                            Explore our full range today and experience the energy that keeps homes lit, rides moving,
                            and trust alive. Your power journey starts here.
                        </p>
                        <div class="c-btn-1 mt-4">
                            <a href="<?php echo $path; ?>products">All Products</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="hm-products owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?php echo $path; ?>img/tubular-battery.png" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="<?php echo $path; ?>img/jumbo.png" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="<?php echo $path; ?>img/tall-tubular-battery.png" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="<?php echo $path; ?>img/tubular-red.png" alt="" class="img-fluid">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="contact-cta mt-4">
            <h4 class="cta-title">Need Assistance? We're Here to Help!</h4>

            <div class="cta-buttons">
                <a href="tel:+919999999999" class="cta-btn call-btn">
                    <i class="fas fa-phone"></i> Call Us Now
                </a>

                <a href="https://wa.me/919999999999" target="_blank" class="cta-btn whats-btn">
                    <i class="fab fa-whatsapp"></i> WhatsApp Us
                </a>
            </div>
        </div>
        <div class="certifications-wrap section-entry" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="deafult-heading mb-5">
                            <h2>
                                Certifications
                            </h2>
                        </div>
                        <p>
                            Oliver Batteries is backed by trusted quality certifications that reflect our commitment to
                            excellence, safety, and sustainability. Our products meet stringent industry standards,
                            ensuring reliable performance and long-lasting power. Every battery is tested, approved, and
                            certified so you can choose Oliver with complete confidence.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-12 iso-certi">
                        <div class="iso">
                            <img src="<?php echo $path; ?>img/iso-2-min-300x300.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 iso-certi">
                        <div class="iso">
                            <img src="<?php echo $path; ?>img/iso-2-min-300x300.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 iso-certi">
                        <div class="iso">
                            <img src="<?php echo $path; ?>img/iso-2-min-300x300.png" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Enquiry Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="tel" class="form-control" id="mobile"
                                            placeholder="Enter your mobile number">
                                    </div>

                                    <div class="mb-3">
                                        <label for="requirement" class="form-label">Requirement</label>
                                        <textarea class="form-control" id="requirement" rows="4"
                                            placeholder="Tell us your requirement..."></textarea>
                                    </div>

                                    <div class="c-btn-3 mt-4">
                                        <button type="button">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>



<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>