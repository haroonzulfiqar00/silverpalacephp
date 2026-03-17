<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1>Get In Touch With Us</h1>
            <p>We’re Ready to Assist You Anytime</p>
        </div>
    </section>

    <!-- CONTACT INTRO & FORM SECTION -->
    <section class="section">
        <div class="container">

            <div class="row gap-60">

                <!-- Left Column: Form -->
                <div class="col-md-7">
                    <div class="contact-intro mb-4">
                        <h2 class="section-title" style="font-size: 2rem;">Have questions about our services?</h2>
                        <p class="lead-text">Need help with documentation, construction, or cleaning? Our team is ready
                            to assist you quickly and professionally. Contact us today and let us handle your needs with
                            care and expertise.</p>
                    </div>

                    <div class="form-container" id="contact_form">
                        <h3 class="form-heading"><i class="fa-regular fa-envelope"></i> Request a Free Quote</h3>
                        <p class="text-muted mb-4">Fill out the form below and our team will contact you shortly.</p>
                        
                        <?php
                        session_start();
                        if (isset($_SESSION['form_error'])) {
                            echo '<div style="background-color: #fce4e4; color: #cc0033; padding: 15px; border-radius: 5px; margin-bottom: 20px;">' . $_SESSION['form_error'] . '</div>';
                            unset($_SESSION['form_error']);
                        }
                        ?>

                        <form action="send-mail.php" method="POST" class="contact-form">

                            <div class="form-group row gap-20">
                                <div class="col-md-6">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" id="fullName" name="Full_Name" class="form-control"
                                        placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="Phone_Number" class="form-control"
                                        placeholder="+973 XXX XXXX" required>
                                </div>
                            </div>

                            <div class="form-group row gap-20">
                                <div class="col-md-6">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="Email_Address" class="form-control"
                                        placeholder="john@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="serviceType">Service Type</label>
                                    <select id="serviceType" name="Service_Type" class="form-control" required>
                                        <option value="" disabled selected>Select a Service</option>
                                        <option value="Documentation Services">Documentation Services</option>
                                        <option value="Construction Services">Construction Services</option>
                                        <option value="Cleaning Services">Cleaning Services</option>
                                        <option value="Digital Services">Digital Services</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="Message" class="form-control" rows="5"
                                    placeholder="How can we assist you today?" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                Submit Inquiry <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i>
                            </button>

                        </form>
                    </div>
                </div>

                <!-- Right Column: Info -->
                <div class="col-md-5">

                    <!-- Company Info Details -->
                    <div class="contact-info-card">
                        <h3>Contact Information</h3>
                        <ul class="info-list">
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-building"></i></div>
                                <div>
                                    <h5>Company Name</h5>
                                    <p>Silver Palace</p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                                <div>
                                    <h5>Phone</h5>
                                    <p>+973 3367 4146</p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div>
                                    <h5>Email</h5>
                                    <p>silverpal786@gmail.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div>
                                    <h5>Location</h5>
                                    <p>building 1361 road 1224 block 1012 Al hamalah, Kingdom of Bahrain</p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <h5>Working Hours</h5>
                                    <p>Sunday - Saturday: 9:00 AM - 8:00 PM</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Options -->
                    <div class="contact-info-card quick-options mt-4"
                        style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: var(--white);">
                        <h3 style="color: var(--white); border-bottom-color: rgba(255,255,255,0.2);">Quick Contact
                            Options</h3>
                        <p style="margin-bottom: 20px; color: rgba(255,255,255,0.9);">You can also reach us directly
                            via:</p>

                        <div class="quick-links">
                            <a href="tel:+97333674146" class="quick-btn"><i class="fa-solid fa-phone"></i> Phone
                                Call</a>
                            <a href="tel:+97333674146" target="_blank" class="quick-btn whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                            <a href="mailto:silverpal786@gmail.com" class="quick-btn"><i
                                    class="fa-solid fa-envelope"></i> Email</a>
                        </div>

                        <div class="response-time mt-4">
                            <i class="fa-solid fa-bolt"></i> We aim to respond to all inquiries within <strong>24
                                hours</strong>.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CLOSING SECTION -->
    <section class="section light-bg text-center">
        <div class="container">
            <h2 class="section-title">Your satisfaction is our priority.</h2>
            <p class="lead-text mt-4">Let Silver Palace take care of your service needs — professionally and
                efficiently.</p>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
