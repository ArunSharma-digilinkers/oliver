<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
    <div class="main-wrapper">

        <!-- Banner -->
        <div class="page-banner page-banner--contact">
            <div class="page-banner-caption">
                <h5 class="txt-light txt-capitalize">Management</h5>
            </div>
        </div>

        <!-- Introduction -->
        <section class="management-intro py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="mb-3">Leadership That Drives Excellence</h2>
                        <p>
                            Our management team at Oliver Batteries consists of experienced professionals with deep
                            expertise in battery technology, manufacturing, marketing, and customer service. Their
                            strategic vision and commitment to innovation allow us to deliver world-class power
                            solutions across industries.
                        </p>
                        <p>
                            With strong leadership at the core, we consistently focus on quality, sustainability, and
                            customer satisfaction while driving the company toward future-ready energy solutions.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="<?php echo $path; ?>img/team.jpg" class="img-fluid rounded shadow" alt="Management">
                    </div>
                </div>
            </div>
        </section>

        <!-- Management Team -->
        <section class="team-section py-5 bg-light">
            <div class="container">
                <h3 class="text-center mb-5">Our Management Team</h3>

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="team-card">
                            <img src="images/team1.jpg" class="team-img" alt="Director">
                            <h5 class="mt-3">Mr. xyz</h5>
                            <p class="designation">Founder & Managing Director</p>
                            <p class="team-info">
                                With 20+ years of industry experience, he leads the company with a vision focused on
                                innovation and excellence.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="team-card">
                            <img src="images/team2.jpg" class="team-img" alt="CEO">
                            <h5 class="mt-3">Mr. xyz</h5>
                            <p class="designation">Chief Executive Officer</p>
                            <p class="team-info">
                                She ensures operational efficiency, growth strategy, and high-quality standards across
                                all departments.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="team-card">
                            <img src="images/team3.jpg" class="team-img" alt="Technical Head">
                            <h5 class="mt-3">Mr. xyz</h5>
                            <p class="designation">Technical Head</p>
                            <p class="team-info">
                                An expert in lithium and tubular battery technology, he oversees product R&D and
                                manufacturing excellence.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Vision & Mission -->
        <section class="vision-section py-5">
            <div class="container">
                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="vision-box">
                            <h4>Our Vision</h4>
                            <p>
                                To become a global leader in energy solutions by delivering sustainable, reliable, and
                                future-ready power products that empower industries and households worldwide.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="vision-box">
                            <h4>Our Mission</h4>
                            <p>
                                To innovate top-quality batteries, ensure exceptional customer satisfaction, and build
                                long-term relationships based on trust, transparency, and performance.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section py-5">
            <div class="container text-center">
                <h2 class="fw-bold text-white mb-3">Want to Know More About Our Leadership?</h2>
                <p class="text-white mb-4">Connect with us for corporate, media, or partnership inquiries.</p>
                <a href="tel:+919999999999" class="cta-btn">
                    <i class="fas fa-phone me-2"></i> Contact Us
                </a>
            </div>
        </section>

    </div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>