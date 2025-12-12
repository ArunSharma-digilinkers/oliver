<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
    <div class="main-wrapper">
        <div class="page-banner page-banner--contact">
            <div class="page-banner-caption">
                <h5 class="txt-light txt-capitalize">About Us</h5>
            </div>
        </div>

        <div class="about-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 hm-ab">
                        <img src="<?php echo $path; ?>img/about-us.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-sm-12 about-details">
                        <div class="">
                            <h1>
                                Built to Power, Designed to Last
                            </h1>
                            <p>
                                At Oliver Batteries, we don’t just deliver energy — we deliver unshakable reliability.
                                Every battery we create is engineered with precision, tested for extreme conditions, and
                                designed with one purpose: to keep your world running without interruptions. Whether
                                you're powering your home, driving across cities, or moving people and goods, our
                                advanced battery technology ensures continuous performance you can trust.
                            </p>
                            <p>
                                Our commitment goes beyond power — it's about safety, longevity, and efficiency. We
                                combine innovative engineering with sustainable practices, making our batteries not only
                                high-performing but also eco-friendly and future-ready.
                            </p>

                            <!-- CTA Section -->
                            <div class="contact-cta-btn mt-4">
                                <a href="#" class="cta-btn">
                                    Enquiry Now
                                </a>
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
        <section class="faq-section py-5">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Frequently Asked Questions</h2>
                    <p class="text-muted">Everything you need to know about our batteries and services.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="accordion" id="batteryFaq">

                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer1">
                                        <i class="fas fa-battery-full me-2"></i> Which type of battery should I choose?
                                    </button>
                                </h2>
                                <div id="answer1" class="accordion-collapse collapse show" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        The best battery depends on your application—automotive, inverter, solar, or
                                        e-rickshaw. Our experts help you pick the perfect fit based on usage and
                                        performance needs.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer2">
                                        <i class="fas fa-clock me-2"></i> How long does a battery last?
                                    </button>
                                </h2>
                                <div id="answer2" class="accordion-collapse collapse" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        Battery life varies: Automotive (2–4 years), Tubular/Inverter (3–6 years),
                                        Lithium (5–10+ years), depending on usage and maintenance.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer3">
                                        <i class="fas fa-question-circle me-2"></i> When should I replace my battery?
                                    </button>
                                </h2>
                                <div id="answer3" class="accordion-collapse collapse" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        Indicators include reduced backup time, slow vehicle start, overheating,
                                        swelling, or inability to hold charge.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer4">
                                        <i class="fas fa-bolt me-2"></i> Are lithium batteries better than lead-acid?
                                    </button>
                                </h2>
                                <div id="answer4" class="accordion-collapse collapse" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        Yes! Lithium batteries offer 3x longer life, faster charging, lightweight body,
                                        high efficiency, and require minimal maintenance.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer5">
                                        <i class="fas fa-solar-panel me-2"></i> Can I use solar panels to charge my
                                        inverter or lithium battery?
                                    </button>
                                </h2>
                                <div id="answer5" class="accordion-collapse collapse" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        Yes! Our batteries are fully compatible with solar charging systems. Using solar
                                        panels reduces electricity bills, improves battery life, and offers an
                                        eco-friendly backup power solution.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#answer6">
                                        <i class="fas fa-tools me-2"></i> How can I increase the lifespan of my battery?
                                    </button>
                                </h2>
                                <div id="answer6" class="accordion-collapse collapse" data-bs-parent="#batteryFaq">
                                    <div class="accordion-body">
                                        To extend battery life: avoid overcharging, ensure proper ventilation, use an
                                        appropriate charger, clean terminals regularly, and prevent deep discharging.
                                        Regular maintenance significantly improves performance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php echo $path; ?>img/faq.jpg" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </section>


        <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>