<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1>Pricing Packages</h1>
            <p>Exceptional value options combining our premium services.</p>
        </div>
    </section>

    <!-- PRICING TIERS -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Integrated Service Bundles</h2>
                <p class="section-subtitle">Unlock massive savings by choosing a combined package that caters to all
                    your maintenance, cleaning, and documentation needs simultaneously.</p>
            </div>

            <div class="pricing-page-grid">

                <!-- Basic Tier -->
                <div class="bundle-card">
                    <div class="bundle-top basic-top">
                        <div class="bundle-medal"><i class="fa-solid fa-medal" style="color: #c0c0c0;"></i></div>
                        <h3>Silver Basic</h3>
                        <p>Essential services for everyday needs.</p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency">BHD</span> <span class="amount">60</span><span
                                class="period">/mo</span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <span><b>Hourly
                                        Cleaning</b> (Up to 12 Hrs limit)</span></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <span><b>Small Repairs</b> (Basic Plumbing/Electrical calls)</span>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i> <span><b>Basic
                                        Documentation Help</b> (Consultation)</span></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <span>No Guaranteed Response
                                    Time</span></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <span>No Full Maintenance
                                    Coverage</span></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-outline btn-full">Select Basic</a>
                    </div>
                </div>

                <!-- Standard Tier -->
                <div class="bundle-card popular">
                    <!-- Standard (Gold) usually recommended -->
                    <div class="popular-ribbon">Recommended</div>
                    <div class="bundle-top standard-top">
                        <div class="bundle-medal"><i class="fa-solid fa-medal" style="color: #ffd700;"></i></div>
                        <h3>Gold Standard</h3>
                        <p>Perfect for growing businesses and families.</p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency">BHD</span> <span class="amount">150</span><span
                                class="period">/mo</span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <span><b>Monthly
                                        Cleaning</b> (Dedicated Staff 2 days/wk)</span></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <span><b>Maintenance Support</b> (Routine Checkups)</span>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i>
                                <span><b>License Support</b> (CR & Visa Renewals handled)</span>
                            </li>
                            <li><i class="fa-solid fa-check" style="color: var(--accent);"></i> <span>48Hr Standard
                                    Response Time</span></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <span>No Priority Emergency
                                    Calls</span></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-primary btn-full"
                            style="background: linear-gradient(135deg, #ffd700, #d4af37);">Select Standard</a>
                    </div>
                </div>

                <!-- Premium Tier -->
                <div class="bundle-card">
                    <div class="bundle-top premium-top">
                        <div class="bundle-medal"><i class="fa-solid fa-trophy" style="color: #e5e4e2;"></i></div>
                        <!-- Platinum color -->
                        <h3>Platinum Premium</h3>
                        <p>The ultimate peace-of-mind package.</p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency">BHD</span> <span class="amount">299</span><span
                                class="period">/mo</span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <span><b>Unlimited
                                        Monthly Cleaning</b> (Full schedule)</span></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <span><b>Full Maintenance Contract</b> (Labor included)</span>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i> <span><b>Full
                                        Documentation</b> (All Visas, Tickets, Licensing)</span></li>
                            <li><i class="fa-solid fa-bolt" style="color: var(--secondary);"></i> <span><b>Priority
                                        Service</b> (Under 4 Hrs Response)</span></li>
                            <li><i class="fa-solid fa-star" style="color: #ffd700;"></i> <span>Dedicated VIP Account
                                    Manager</span></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-primary btn-full"
                            style="background: var(--dark);">Select
                            Premium</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CUSTOM PACKAGE BANNER -->
    <section class="section dark-bg">
        <div class="container text-center">
            <h2 class="section-title light">Need a Custom Solution?</h2>
            <p class="section-subtitle light" style="max-width: 700px; margin: 0 auto 30px;">Every client is unique. If
                our pre-packaged tiers don't perfectly align with your enterprise scope or residential needs, we're more
                than happy to tailor a custom plan exclusively for you.</p>
            <a href="contact.php#contact_form" class="btn btn-outline"
                style="border-color: var(--white); color: var(--white);">Request Custom Quote</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
