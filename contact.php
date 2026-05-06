<?php include "include/header.php"?>


    <!-- ====== PAGE HERO ====== -->
    <section class="page-hero" style="background-image: url('https://media.oars.com/wp-content/uploads/2026/02/03142142/MFS-homepage26-1-1680x900.jpg');">
      <div class="page-hero-overlay"></div>
      <div class="container text-center position-relative z-index-1">
        <h1 class="page-title text-white">Contact Us</h1>
        <p class="page-breadcrumb"><a href="index.html" class="text-white">Home</a> <i class="fas fa-chevron-right mx-2 text-white" style="font-size: 10px;"></i> <span class="text-white opacity-75">Contact Us</span></p>
      </div>
    </section>

    <!-- ====== CONTACT SECTION ====== -->
    <section class="contact-section py-5 my-lg-5">
      <div class="container">
        <div class="row">
          <!-- Contact Info -->
          <div class="col-lg-5 mb-5 mb-lg-0 pr-lg-5 contact-info-col">
            <p class="sub-title">Get In Touch</p>
            <h2 class="block-header" style="font-size: clamp(2rem, 3vw, 2.5rem); margin-bottom: 20px;">We'd love to hear from you</h2>
            <p class="section-desc mb-5">Whether you have a question about our trips, pricing, or anything else, our team is ready to answer all your questions.</p>
            
            <div class="contact-info-block d-flex align-items-start mb-4">
              <div class="icon-box">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="contact-info-title">Our Office</h4>
                <p class="contact-info-text">123 Adventure Lane, Suite 100<br>Travel City, CA 90210</p>
              </div>
            </div>

            <div class="contact-info-block d-flex align-items-start mb-4">
              <div class="icon-box">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div>
                <h4 class="contact-info-title">Call Us</h4>
                <p class="contact-info-text"><strong>US or Canada:</strong> <a href="tel:18003466277" class="contact-info-link">1 (800) 346-6277</a><br><strong>International:</strong> <a href="tel:12097364677" class="contact-info-link">1 (209) 736-4677</a></p>
              </div>
            </div>

            <div class="contact-info-block d-flex align-items-start">
              <div class="icon-box">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="contact-info-title">Email Us</h4>
                <p class="contact-info-text"><a href="mailto:info@wanderlust.com" class="contact-info-link">info@wanderlust.com</a><br><a href="mailto:support@wanderlust.com" class="contact-info-link">support@wanderlust.com</a></p>
              </div>
            </div>
            
            <div class="contact-social-icons mt-5">
              <p class="contact-info-title mb-3">Follow Us</p>
              <div class="social-icons">
                <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <h3 class="contact-form-title">Send us a Message</h3>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6 mb-4 form-group-custom">
                    <label for="firstName" class="form-label">First Name *</label>
                    <input type="text" class="form-control" id="firstName" required placeholder="John">
                  </div>
                  <div class="col-md-6 mb-4 form-group-custom">
                    <label for="lastName" class="form-label">Last Name *</label>
                    <input type="text" class="form-control" id="lastName" required placeholder="Doe">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 form-group-custom">
                    <label for="email" class="form-label">Email Address *</label>
                    <input type="email" class="form-control" id="email" required placeholder="john@example.com">
                  </div>
                  <div class="col-md-6 mb-4 form-group-custom">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="(123) 456-7890">
                  </div>
                </div>
                <div class="mb-4 form-group-custom">
                  <label for="subject" class="form-label">Subject</label>
                  <select class="form-control custom-select" id="subject">
                    <option value="" disabled selected>Select an option</option>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Booking Support">Booking Support</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Other">Other</option>
                  </select>
                  <i class="fas fa-chevron-down select-icon"></i>
                </div>
                <div class="mb-4 form-group-custom">
                  <label for="message" class="form-label">Message *</label>
                  <textarea class="form-control" id="message" rows="5" required placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="btn-primary w-100 border-0 py-3 mt-2 submit-btn">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====== MAP SECTION ====== -->
    <section class="map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105658.05837659529!2d-118.4732132338167!3d34.02047895180183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cf5df2f04e1b%3A0x8670ab0ec7d6a5c2!2sTravel%20City!5e0!3m2!1sen!2sus!4v1714652431713!5m2!1sen!2sus" width="100%" height="450" style="border:0; filter: grayscale(100%) contrast(1.2) opacity(0.8);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

   <?php include "include/footer.php"?>

