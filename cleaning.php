<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['clean_page_title'] ?></h1>
            <p><?= $t['clean_page_sub'] ?></p>
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6 content-block">
                    <span class="badge green-badge"><?= $t['clean_badge'] ?></span>
                    <h2 class="section-title"><?= $t['clean_title'] ?></h2>
                    <p class="lead-text"><?= $t['clean_desc1'] ?></p>
                    <p><?= $t['clean_desc2'] ?></p>
                </div>
                <div class="col-md-6">
                    <div class="image-box relative-img">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&q=80"
                            alt="Professional Cleaning" class="img-fluid rounded shadow-lg">
                        <div class="cleaning-badge">
                            <i class="fa-solid fa-leaf"></i>
                            <span><?= $t['clean_eco_badge'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLEANING TYPES (TABS/GRID) -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['clean_dom_title'] ?></h2>
                <p class="section-subtitle"><?= $t['clean_dom_sub'] ?></p>
            </div>

            <div class="row gap-60">
                <!-- Residential Block -->
                <div class="col-md-6">
                    <div class="cleaning-type-card residential">
                        <img src="https://images.unsplash.com/photo-1527515862127-a4fc05baf7a5?auto=format&fit=crop&q=80"
                            alt="Residential Cleaning">
                        <div class="type-content">
                            <h3><i class="fa-solid fa-house-chimney"></i> <?= $t['clean_res_title'] ?></h3>
                            <p><?= $t['clean_res_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_res_1'] ?></li>
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_res_2'] ?></li>
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_res_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Commercial Block -->
                <div class="col-md-6">
                    <div class="cleaning-type-card commercial">
                        <img src="https://images.unsplash.com/photo-1613665813446-82a78c468a1d?auto=format&fit=crop&q=80"
                            alt="Commercial Cleaning">
                        <div class="type-content">
                            <h3><i class="fa-solid fa-building"></i> <?= $t['clean_com_title'] ?></h3>
                            <p><?= $t['clean_com_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_com_1'] ?></li>
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_com_2'] ?></li>
                                <li><i class="fa-solid fa-check"></i> <?= $t['clean_com_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING & CONTRACT MODELS -->
    <section class="section prcing-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['clean_price_title'] ?></h2>
                <p class="section-subtitle"><?= $t['clean_price_sub'] ?></p>
            </div>

            <div class="pricing-grid">
                <!-- Hourly Base -->
                <div class="pricing-card">
                    <div class="plan-header">
                        <h4><?= $t['clean_p1_title'] ?></h4>
                        <div class="plan-icon"><i class="fa-regular fa-clock"></i></div>
                    </div>
                    <div class="plan-features">
                        <p><?= $t['clean_p1_desc'] ?></p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p1_f1'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p1_f2'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p1_f3'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p1_f4'] ?></li>
                        </ul>
                    </div>
                    <a href="contact.php#contact_form" class="btn btn-outline btn-full"><?= $t['clean_p1_btn'] ?></a>
                </div>

                <!-- Monthly Contract (Highlighted) -->
                <div class="pricing-card popular">
                    <div class="popular-badge"><?= $t['clean_p2_badge'] ?></div>
                    <div class="plan-header">
                        <h4><?= $t['clean_p2_title'] ?></h4>
                        <div class="plan-icon"><i class="fa-regular fa-calendar-days"></i></div>
                    </div>
                    <div class="plan-features">
                        <p><?= $t['clean_p2_desc'] ?></p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p2_f1'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p2_f2'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p2_f3'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p2_f4'] ?></li>
                        </ul>
                    </div>
                    <a href="contact.php#contact_form" class="btn btn-primary btn-full"><?= $t['clean_p2_btn'] ?></a>
                </div>

                <!-- Yearly Contract -->
                <div class="pricing-card">
                    <div class="plan-header">
                        <h4><?= $t['clean_p3_title'] ?></h4>
                        <div class="plan-icon"><i class="fa-solid fa-file-signature"></i></div>
                    </div>
                    <div class="plan-features">
                        <p><?= $t['clean_p3_desc'] ?></p>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p3_f1'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p3_f2'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p3_f3'] ?></li>
                            <li><i class="fa-solid fa-check"></i> <?= $t['clean_p3_f4'] ?></li>
                        </ul>
                    </div>
                    <a href="contact.php#contact_form" class="btn btn-outline btn-full"><?= $t['clean_p3_btn'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta section" style="background: linear-gradient(135deg, var(--accent), #059669);">
        <div class="container text-center">
            <h2 class="cta-title"><?= $t['clean_cta_title'] ?></h2>
            <p class="cta-subtitle"><?= $t['clean_cta_sub'] ?></p>
            <a href="contact.php#contact_form" class="btn btn-primary btn-lg"
                style="background: var(--white); color: var(--accent);"><?= $t['clean_cta_btn'] ?></a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
