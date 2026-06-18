<?php
/*
Template Name: Consultation Page
*/

get_header();
?>

<section class="contact-section">

    <div class="consultation-layout">

        <!-- Left Side -->
        <div class="consultation-content">

            <span class="contact-badge">
                Free Strategy Session
            </span>

            <h1>
                Let's Build a Website That Actually Generates Leads
            </h1>

            <p class="consultation-description">
                Whether you need a new website, CRM automation, SEO, or a complete digital growth strategy, we'll help you identify the fastest path to results.
            </p>

            <div class="benefits-list">

                <div class="benefit-item">
                    ✓ Free consultation call
                </div>

                <div class="benefit-item">
                    ✓ Custom growth strategy
                </div>

                <div class="benefit-item">
                    ✓ Website & automation audit
                </div>

                <div class="benefit-item">
                    ✓ No obligation proposal
                </div>

            </div>

            <div class="trust-row">

                <div class="trust-item">
                    <strong>24h</strong>
                    <span>Response Time</span>
                </div>

                <div class="trust-item">
                    <strong>100%</strong>
                    <span>Custom Solutions</span>
                </div>

                <div class="trust-item">
                    <strong>Free</strong>
                    <span>Consultation Call</span>
                </div>

            </div>

        </div>

        <!-- Right Side Form -->
        <div class="contact-card">

            <div class="contact-header">

                <h2>
                    Get Free Consultation
                </h2>

                <p>
                    Tell us about your project and we'll get back to you within 24 hours.
                </p>

            </div>
            
                <?php if (isset($_GET['success'])) : ?>
                    <div class="success-message">
                        Thank you! We've received your inquiry and will contact you shortly.
                    </div>
                <?php endif; ?>

            <form
                class="project-form"
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

                <input
                    type="hidden"
                    name="action"
                    value="agency_consultation_form">

                <input
                    type="hidden"
                    name="lead_source"
                    value="website">

                <div class="form-grid">

                    <div class="form-group">
                        <label>Full Name</label>
                        <input
                            type="text"
                            name="name"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Company Name</label>
                        <input
                            type="text"
                            name="company">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input
                            type="text"
                            name="phone">
                    </div>

                </div>

                <div class="form-group">

                    <label>Service Needed</label>

                    <select name="service">

                        <option value="">
                            Select Service
                        </option>

                        <option value="website">
                            Website Development
                        </option>

                        <option value="seo">
                            SEO
                        </option>

                        <option value="google_ads">
                            Google Ads
                        </option>

                        <option value="automation">
                            CRM & Automation
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Budget</label>

                    <select name="budget">

                        <option value="">
                            Select Budget
                        </option>

                        <option value="20k-50k">
                            ₱20,000 - ₱50,000
                        </option>

                        <option value="50k-100k">
                            ₱50,000 - ₱100,000
                        </option>

                        <option value="100k-250k">
                            ₱100,000 - ₱250,000
                        </option>

                        <option value="250k+">
                            ₱250,000+
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Project Details</label>

                    <textarea
                        rows="6"
                        name="message"
                        placeholder="Tell us about your project, goals, challenges, and timeline..."
                        required></textarea>

                </div>

                <button
                    type="submit"
                    class="form-submit-btn">

                    Get Free Consultation

                </button>

            </form>

        </div>

    </div>

</section>

<?php get_footer(); ?>