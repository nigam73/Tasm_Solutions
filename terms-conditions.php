<?php include("header.php") ?>

<div class=" py-5">
    <div class="container my-md-5">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="policy-card">
                    
                    <div class="policy-header text-center mb-5">
                        <h6 class="sub-label">LEGAL DOCUMENT</h6>
                        <h1 class="main-title">Terms & Conditions</h1>
                        <p class="lead-text">
                            Please read these terms carefully before using our services.
                        </p>
                    </div>

                    <div class="policy-content">
                        <section class="policy-section">
                            <h2>1. Introduction</h2>
                            <p>
                                Welcome to <strong>TasmaFive Solutions LLP</strong>. By accessing our website,
                                services, or products, you agree to comply with these Terms & Conditions.
                                These terms govern your use of our services including web development,
                                digital solutions, SaaS products, and consulting services.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>2. Services</h2>
                            <p>
                                We provide IT services including website development, graphic designing,
                                data analytics, and digital marketing. All services are delivered as per
                                agreed project scope and timelines.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>3. User Responsibilities</h2>
                            <ul>
                                <li>Provide accurate and complete information.</li>
                                <li>Do not misuse our services for illegal activities.</li>
                                <li>Maintain confidentiality of login credentials.</li>
                                <li>Respect intellectual property rights.</li>
                            </ul>
                        </section>

                        <section class="policy-section">
                            <h2>4. Payments & Billing</h2>
                            <p>
                                All payments must be made as per agreed terms. Delays in payment may result
                                in suspension of services. Advance payments are non-refundable unless stated otherwise.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>5. Intellectual Property</h2>
                            <p>
                                All designs, code, and deliverables remain the property of TasmaFive Solutions LLP
                                until full payment is completed. Unauthorized use or reproduction is strictly prohibited.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>6. Limitation of Liability</h2>
                            <p>
                                We are not liable for any indirect or consequential damages arising from the use
                                of our services. Users are responsible for proper usage and implementation.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>7. Termination</h2>
                            <p>
                                We reserve the right to terminate services if terms are violated or misuse is detected.
                            </p>
                        </section>

                        <section class="policy-section">
                            <h2>8. Changes to Terms</h2>
                            <p>
                                We may update these Terms & Conditions at any time. Continued use of our services
                                indicates acceptance of updated terms.
                            </p>
                        </section>

                        <section class="policy-section mb-0">
                            <h2>9. Contact Information</h2>
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="contact-info-box">
                                        <strong>Email:</strong><br>
                                        <a href="mailto:info@tasmafivesolutions.com">info@tasmafivesolutions.com</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-info-box">
                                        <strong>Phone:</strong><br>
                                        <a href="tel:+916307558730">+91 6307558730</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="policy-footer text-center mt-5">
                        <a href="index.php" class="btn-accept">
                            Accept & Continue
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Base Styles */
.legal-page {
    background-color: #f8fafc;
    font-family: 'Inter', sans-serif;
}

.policy-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 80px 60px; /* Desktop Padding */
    box-shadow: 0 20px 50px rgba(0, 45, 114, 0.05);
    border-top: 8px solid #ff6600;
}

.sub-label {
    color: #ff6600;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.main-title {
    font-size: 3.5rem;
    font-weight: 800;
    color: #002d72;
    margin: 15px 0;
}

.lead-text {
    font-size: 1.15rem;
    color: #64748b;
}

.policy-header {
    border-bottom: 1px solid #eef2f6;
    padding-bottom: 40px;
}

.policy-section {
    margin-bottom: 50px;
}

.policy-section h2 {
    font-size: 1.75rem;
    font-weight: 800;
    color: #002d72;
    margin-bottom: 15px;
}

.policy-section p, .policy-section li {
    line-height: 1.8;
    color: #475569;
    font-size: 1.05rem;
}

.contact-info-box {
    border: 1px solid rgba(255, 102, 0, 0.2);
    padding: 20px;
    border-radius: 12px;
    background: #fffaf7;
    height: 100%;
    transition: 0.3s;
}

.contact-info-box:hover {
    border-color: #ff6600;
    background: #fff;
}

.contact-info-box a {
    text-decoration: none;
    color: #475569;
}

.btn-accept {
    display: inline-block;
    background: #ff6600;
    color: #ffffff;
    padding: 18px 50px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(255, 102, 0, 0.2);
}

.btn-accept:hover {
    background: #e65c00;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(255, 102, 0, 0.3);
}

/* Tablet Responsive */
@media (max-width: 991px) {
    .policy-card {
        padding: 50px 30px;
    }
    .main-title {
        font-size: 2.5rem;
    }
}

/* Mobile Responsive */
@media (max-width: 767px) {
    .policy-card {
        padding: 40px 20px;
        border-radius: 12px;
    }
    .main-title {
        font-size: 2rem;
    }
    .policy-section h2 {
        font-size: 1.4rem;
    }
    .btn-accept {
        width: 100%;
        padding: 15px 20px;
    }
    .policy-header {
        padding-bottom: 25px;
    }
}
</style>

<?php include("footer.php") ?>