<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
    <div class="main-wrapper">

        <!-- Banner -->
        <div class="page-banner page-banner--contact">
            <div class="page-banner-caption">
                <h5 class="txt-light txt-capitalize">Manufacturing</h5>
            </div>
        </div>

        <!-- About Manufacturing -->
        <section class="manufacturing-intro py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3">Advanced Battery Manufacturing Excellence</h2>
                        <p>
                            At Oliver Batteries, we follow a world-class manufacturing process powered by precision
                            technology, strict quality checks, and cutting-edge machinery. Every battery is engineered
                            with high-grade materials and tested to withstand extreme performance requirements.
                        </p>
                        <p>
                            From material selection to final charging, our automated systems ensure safety, durability,
                            and consistent power output. Our manufacturing plant is designed to meet global standards
                            and deliver products that exceed customer expectations.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo $path; ?>img/factory.jpg" alt="Manufacturing Plant"
                            class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-section py-5 bg-light">
            <div class="container">
                <h3 class="text-center mb-5">Our Manufacturing Process</h3>
                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="process-box">
                            <img src="<?php echo $path; ?>img/raw-materials.png" alt="" class="img-fluid">
                            <span class="step-number">01</span>
                            <h5>Raw Material Selection</h5>
                            <p>We use high-grade lead, lithium cells, and premium components for consistent performance.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="process-box">
                            <img src="<?php echo $path; ?>img/assembly-line.png" alt="" class="img-fluid">
                            <span class="step-number">02</span>
                            <h5>Automated Assembly</h5>
                            <p>Machines ensure accuracy in plate production, cell welding, and container assembly.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="process-box">
                            <img src="<?php echo $path; ?>img/quality-control.png" alt="" class="img-fluid">
                            <span class="step-number">03</span>
                            <h5>Quality Testing</h5>
                            <p>Each battery undergoes rigorous tests for capacity, backup time, charging, and safety.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="process-box">
                            <img src="<?php echo $path; ?>img/electrolytes.png" alt="" class="img-fluid">
                            <span class="step-number">04</span>
                            <h5>Electrolyte Filling</h5>
                            <p>Accurate electrolyte filling with automated machines ensures battery longevity.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="process-box">
                            <img src="<?php echo $path; ?>img/full-battery.png" alt="" class="img-fluid">
                            <span class="step-number">05</span>
                            <h5>Final Charging</h5>
                            <p>Batteries undergo controlled charging cycles for balanced performance.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="process-box">
                               <img src="<?php echo $path; ?>img/package.png" alt="" class="img-fluid">
                            <span class="step-number">06</span>
                            <h5>Packing & Dispatch</h5>
                            <p>Safe, durable packaging ensures the product reaches customers in perfect condition.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features-section py-5">
            <div class="container">
                <h3 class="text-center mb-4">Why Our Manufacturing Stands Out</h3>
                <div class="row g-4">

                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fas fa-industry"></i>
                            <h6>Modern Machinery</h6>
                            <p>Fully automated systems for accuracy and consistency.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fas fa-shield-alt"></i>
                            <h6>Strict QC</h6>
                            <p>Multiple testing layers ensure premium product quality.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fas fa-battery-full"></i>
                            <h6>Longer Lifecycle</h6>
                            <p>Industry-leading battery durability through advanced processes.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fas fa-recycle"></i>
                            <h6>Eco-Friendly</h6>
                            <p>Environmentally responsible production & recycling.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section py-5">
            <div class="container text-center">
                <h2 class="fw-bold text-white mb-3">Looking for High-Quality Batteries?</h2>
                <p class="text-white mb-4">Contact us today for bulk manufacturing, OEM, and dealership inquiries.</p>
                <a href="tel:+919999999999" class="cta-btn">
                    <i class="fas fa-phone me-2"></i> Call Us Now
                </a>
            </div>
        </section>

    </div>
</main>


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>