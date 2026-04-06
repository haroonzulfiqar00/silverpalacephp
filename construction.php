<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1541888049610-8bbfac74a638?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['const_page_title'] ?></h1>
            <p><?= $t['const_page_sub'] ?></p>
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6">
                    <div class="image-box relative-img">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&q=80"
                            alt="Construction Site" class="img-fluid rounded shadow-lg">
                        <div class="floating-badge">
                            <i class="fa-solid fa-medal"></i>
                            <div>
                                <strong><?= $t['const_exp_badge'] ?></strong>
                                <span><?= $t['const_exp_text'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 content-block">
                    <span class="badge orange-badge"><?= $t['const_badge'] ?></span>
                    <h2 class="section-title"><?= $t['const_title'] ?></h2>
                    <p class="lead-text"><?= $t['const_desc1'] ?></p>
                    <p><?= $t['const_desc2'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES CARDS -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['const_cap_title'] ?></h2>
                <p class="section-subtitle"><?= $t['const_cap_sub'] ?></p>
            </div>

            <div class="services-grid">
                <!-- Villa Construction -->
                <div class="service-card text-center">
                    <div class="card-icon wrapper-orange mx-auto">
                        <i class="fa-solid fa-house-chimney-window"></i>
                    </div>
                    <h3><?= $t['const_c1_title'] ?></h3>
                    <p class="text-muted mb-4"><?= $t['const_c1_desc'] ?></p>
                </div>

                <!-- Residential Building -->
                <div class="service-card text-center">
                    <div class="card-icon wrapper-orange mx-auto">
                        <i class="fa-solid fa-city"></i>
                    </div>
                    <h3><?= $t['const_c2_title'] ?></h3>
                    <p class="text-muted mb-4"><?= $t['const_c2_desc'] ?></p>
                </div>

                <!-- Maintenance Contracts -->
                <div class="service-card text-center">
                    <div class="card-icon wrapper-orange mx-auto">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3><?= $t['const_c3_title'] ?></h3>
                    <p class="text-muted mb-4"><?= $t['const_c3_desc'] ?></p>
                </div>

                <!-- Plumbing & Electrical -->
                <div class="service-card text-center">
                    <div class="card-icon wrapper-orange mx-auto">
                        <i class="fa-solid fa-plug-circle-bolt"></i>
                    </div>
                    <h3><?= $t['const_c4_title'] ?></h3>
                    <p class="text-muted mb-4"><?= $t['const_c4_desc'] ?></p>
                </div>

                <!-- Interior & Exterior Painting -->
                <div class="service-card text-center">
                    <div class="card-icon wrapper-orange mx-auto">
                        <i class="fa-solid fa-paint-roller"></i>
                    </div>
                    <h3><?= $t['const_c5_title'] ?></h3>
                    <p class="text-muted mb-4"><?= $t['const_c5_desc'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO GALLERY -->
    <section class="section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['const_port_title'] ?></h2>
                <p class="section-subtitle"><?= $t['const_port_sub'] ?></p>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&q=80"
                        alt="Luxury Villa">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p1_title'] ?></h4>
                        <p><?= $t['const_p1_desc'] ?></p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80"
                        alt="Commercial Building">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p2_title'] ?></h4>
                        <p><?= $t['const_p2_desc'] ?></p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&q=80"
                        alt="Plumbing Work">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p3_title'] ?></h4>
                        <p><?= $t['const_p3_desc'] ?></p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1589939705384-5185137a7f0f?auto=format&fit=crop&q=80"
                        alt="Interior Painting">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p4_title'] ?></h4>
                        <p><?= $t['const_p4_desc'] ?></p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?auto=format&fit=crop&q=80"
                        alt="Electrical Panel">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p5_title'] ?></h4>
                        <p><?= $t['const_p5_desc'] ?></p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1541888049610-8bbfac74a638?auto=format&fit=crop&q=80"
                        alt="Site Finalization">
                    <div class="portfolio-overlay">
                        <h4><?= $t['const_p6_title'] ?></h4>
                        <p><?= $t['const_p6_desc'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORK PROCESS SECTION -->
    <section class="process section dark-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title light"><?= $t['const_proc_title'] ?></h2>
                <p class="section-subtitle light"><?= $t['const_proc_sub'] ?></p>
            </div>

            <div class="process-steps">
                <div class="step">
                    <div class="step-number orange-number">01</div>
                    <div class="step-icon"><i class="fa-regular fa-map"></i></div>
                    <h4><?= $t['const_pr1_title'] ?></h4>
                    <p style="color: rgba(255,255,255,0.7)"><?= $t['const_pr1_desc'] ?></p>
                </div>
                <div class="step-connector"></div>
                <div class="step">
                    <div class="step-number orange-number">02</div>
                    <div class="step-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h4><?= $t['const_pr2_title'] ?></h4>
                    <p style="color: rgba(255,255,255,0.7)"><?= $t['const_pr2_desc'] ?></p>
                </div>
                <div class="step-connector"></div>
                <div class="step">
                    <div class="step-number orange-number">03</div>
                    <div class="step-icon"><i class="fa-solid fa-handshake"></i></div>
                    <h4><?= $t['const_pr3_title'] ?></h4>
                    <p style="color: rgba(255,255,255,0.7)"><?= $t['const_pr3_desc'] ?></p>
                </div>
                <div class="step-connector"></div>
                <div class="step">
                    <div class="step-number orange-number">04</div>
                    <div class="step-icon"><i class="fa-solid fa-person-digging"></i></div>
                    <h4><?= $t['const_pr4_title'] ?></h4>
                    <p style="color: rgba(255,255,255,0.7)"><?= $t['const_pr4_desc'] ?></p>
                </div>
                <div class="step-connector"></div>
                <div class="step">
                    <div class="step-number orange-number">05</div>
                    <div class="step-icon"><i class="fa-solid fa-key"></i></div>
                    <h4><?= $t['const_pr5_title'] ?></h4>
                    <p style="color: rgba(255,255,255,0.7)"><?= $t['const_pr5_desc'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta section" style="background: linear-gradient(135deg, var(--secondary), #d97706);">
        <div class="container text-center">
            <h2 class="cta-title"><?= $t['const_cta_title'] ?></h2>
            <p class="cta-subtitle"><?= $t['const_cta_sub'] ?></p>
            <a href="contact.php#contact_form" class="btn btn-primary btn-lg"
                style="background: var(--white); color: var(--secondary);"><?= $t['const_cta_btn'] ?></a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
