<?php
$page_title = 'Contact Us - EconInsight Consultancy | Expert Economic Insights';
$page_description = 'Contact EconInsight Consultancy for expert economic research, market analysis, and strategic insights. Get in touch with our team of data-driven consultants today.';
$page_keywords = 'contact econinsight, economic consulting, market research contact, business intelligence services, data analytics consulting';
$og_title = 'Contact Us - EconInsight Consultancy';
$og_description = 'Contact EconInsight Consultancy for expert economic research, market analysis, and strategic insights. Get in touch with our team today.';
$twitter_title = 'Contact Us - EconInsight Consultancy';
$twitter_description = 'Contact EconInsight Consultancy for expert economic research, market analysis, and strategic insights.';
include 'header.php';
?>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1 class="contact-hero-title">Get In Touch</h1>
                <p class="contact-hero-subtitle">Ready to simplify complexity? Let's discuss how we can help your organization make informed decisions.</p>
                <div class="contact-hero-stats">
                    <div class="hero-stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Research Projects</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                    <div class="hero-stat">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Policy Reports</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form-container">
                    <h2 class="section-title text-center">Send Us a Message</h2>
                    <form class="contact-form" id="contactForm" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                                <span class="error-message" id="firstName-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                                <span class="error-message" id="lastName-error"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                                <span class="error-message" id="email-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                                <span class="error-message" id="phone-error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company">Company/Organization</label>
                            <input type="text" id="company" name="company">
                        </div>
                        <div class="form-group">
                            <label for="service">Service of Interest</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="economic-research">Economic & Policy Research</option>
                                <option value="market-analysis">Market Analysis</option>
                                <option value="social-impact">Social Impact Analysis</option>
                                <option value="financial-analytics">Financial Analytics & Business Planning</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your project or how we can help..."></textarea>
                            <span class="error-message" id="message-error"></span>
                        </div>
                        
                        <!-- Success/Error Messages -->
                        <div id="form-messages" class="form-messages" style="display: none;">
                            <div id="success-message" class="success-message"></div>
                            <div id="error-message" class="error-message"></div>
                        </div>
                        
                        <button type="submit" class="submit-btn" id="submitBtn">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-loading" style="display: none;">
                                <i class="fas fa-spinner fa-spin"></i> Sending...
                            </span>
                        </button>
                    </form>
                </div>
                <div class="contact-info">
                    <h2 class="section-title text-center">Contact Information</h2>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Office Address</h3>
                                <p>207 Moore Lane<br>Waterkloof<br>Pretoria, Gauteng 0081<br>South Africa</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Phone</h3>
                                <p>+27 60 319 4628</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email</h3>
                                <p>info@econinsight.co.za</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 08:00 - 17:00</p>
                                <p>Saturday: 09:00 - 13:00</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Consultation</h3>
                                <p>Free initial consultation</p>
                                <p>Custom project proposals</p>
                                <p>Ongoing support & guidance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title text-center">Find Us</h2>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Interactive Map Coming Soon</p>
                    <p>207 Moore Lane, Waterkloof, Pretoria, Gauteng 0081, South Africa</p>
                </div>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
