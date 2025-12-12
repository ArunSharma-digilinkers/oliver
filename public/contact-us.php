<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
	<div class="main-wrapper">

		<div class="main-cover">

			<div class="page-banner page-banner--contact">
				<div class="page-banner-caption">
					<h5 class="txt-light txt-capitalize">Contact us</h5>
				</div>
			</div>

			<section class="section section-entry contact-wrapper">
				<div class="container">

					<div class="row">

						<div class="col-lg-8 col-md-12">
							<div class="contact-form-wrap">
								<div class="section-title">
									<h1>Get in Touch</h1>
								</div>
								<div class="mrb30">
									<p>
										Please fill out this quick form and we will be in touch with you.
									</p>
								</div>

								<div class="row">
									<div class="col-lg-10 col-md-12">
										<form class="contact-form" action="mail/mail.php" method="POST">
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputName">Your Name</label>
												<input type="text" class="form-control contact-form__input" id="inputName" name="name" placeholder="Enter your name">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMail">Your Email</label>
												<input type="email" class="form-control contact-form__input" id="inputMail" name="email" placeholder="Enter email">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputPhone">Mobile Number</label>
												<input type="text" class="form-control contact-form__input" id="inputPhone" name="phone" placeholder="Enter your mobile">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMsg">Your Message</label>
												<textarea class="form-control contact-form__textarea" id="inputMsg" name="message" placeholder="Write your message" rows="5"></textarea>
											</div>
											<div class="contact-form-button">
												<button type="submit" class="btn c-btn" name="contact_submit">Submit</button>
											</div>
										</form>
									</div> 
								</div>

							</div>
						</div> 

						<div class="col-lg-4 col-md-12">
							<div class="contact-section">

								<div class="row">

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Connect with us:</h5>
											<p>We're Here to Help — Reach Out Anytime</p>
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Call to us:</h5>
											<p>
												<a href="tel:1800120114114">1800120114114</a>
											</p>
										</div> 
									</div> 
									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Email to us:</h5>
											<p><a href="mailto:info@oliverbatteries.com">
												info@oliverbatteries.com
												</a>
											</p>
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Social Presence</h5>
											<p>
												Find us at:
											</p>
											<ul class="social-list">
												<li>
													<a href=""><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-linkedin-in"></i></a>
												</li>
											</ul> 
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Office Address:</h5>
											<p>
												<?php echo $company; ?>
												<br />
												Kutubpur Village, Teh Hansi, Distt. Hisar, Near Maiyad Toll Plaza, Hisar
											</p>
										</div>
									</div> 

								</div> 

							</div> 
						</div> 

					</div>

				</div>
			</section>
			
			<section class="contact-map">
				<<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3484.52518748355!2d75.71911257497607!3d29.149192160432374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391239d53d81031f%3A0x7efe57d4adfa49fa!2sOliver%20Power%20Solution!5e0!3m2!1sen!2sin!4v1765536216124!5m2!1sen!2sin" width="1920" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>

		</div>

	<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>