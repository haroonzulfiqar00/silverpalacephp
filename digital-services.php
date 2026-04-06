<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['dig_page_title'] ?></h1>
            <p><?= $t['dig_page_sub'] ?></p>
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6 content-block">
                    <span class="badge" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6; border: 1px solid rgba(139,92,246,0.2);"><?= $t['dig_badge'] ?></span>
                    <h2 class="section-title"><?= $t['dig_title'] ?></h2>
                    <p class="lead-text"><?= $t['dig_desc1'] ?></p>
                    <p><?= $t['dig_desc2'] ?></p>
                </div>
                <div class="col-md-6">
                    <div class="image-box relative-img">
                        <img src="./assets/images/digital services.png"
                            alt="Digital Services & Web Development" class="img-fluid rounded shadow-lg">
                        <div class="cleaning-badge" style="background: var(--white); color: #8b5cf6;">
                            <i class="fa-solid fa-code"></i>
                            <span><?= $t['dig_tech_badge'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIGITAL DOMAINS (GRID) -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['dig_exp_title'] ?></h2>
                <p class="section-subtitle"><?= $t['dig_exp_sub'] ?></p>
            </div>

            <div class="row gap-60">
                <!-- Web Development Block -->
                <div class="col-md-6">
                    <div class="cleaning-type-card residential">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80"
                            alt="Web Development">
                        <div class="type-content">
                            <h3><i class="fa-solid fa-laptop-code" style="color: #8b5cf6;"></i> <?= $t['dig_w_title'] ?></h3>
                            <p><?= $t['dig_w_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_w_1'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_w_2'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_w_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- E-Commerce Block -->
                <div class="col-md-6">
                    <div class="cleaning-type-card commercial">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&q=80"
                            alt="E-Commerce & Shopify">
                        <div class="type-content">
                            <h3><i class="fa-brands fa-shopify" style="color: #8b5cf6;"></i> <?= $t['dig_e_title'] ?></h3>
                            <p><?= $t['dig_e_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_e_1'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_e_2'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_e_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Social Media Block -->
                <div class="col-md-6 mt-4">
                    <div class="cleaning-type-card residential">
                        <img src="./assets/images/social-media-handling.jpg"
                            alt="Social Media Handling">
                        <div class="type-content">
                            <h3><i class="fa-solid fa-hashtag" style="color: #8b5cf6;"></i> <?= $t['dig_s_title'] ?></h3>
                            <p><?= $t['dig_s_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_s_1'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_s_2'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_s_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing Block -->
                <div class="col-md-6 mt-4">
                    <div class="cleaning-type-card commercial">
                        <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?auto=format&fit=crop&q=80"
                            alt="Digital Marketing">
                        <div class="type-content">
                            <h3><i class="fa-solid fa-chart-line" style="color: #8b5cf6;"></i> <?= $t['dig_m_title'] ?></h3>
                            <p><?= $t['dig_m_desc'] ?></p>
                            <ul class="clean-check-list">
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_m_1'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_m_2'] ?></li>
                                <li><i class="fa-solid fa-check" style="background: rgba(139, 92, 246, 0.1); color: #8b5cf6;"></i> <?= $t['dig_m_3'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta section" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
        <div class="container text-center">
            <h2 class="cta-title"><?= $t['dig_cta_title'] ?></h2>
            <p class="cta-subtitle"><?= $t['dig_cta_sub'] ?></p>
            <a href="contact.php#contact_form" class="btn btn-primary btn-lg"
                style="background: var(--white); color: #6d28d9;"><?= $t['dig_cta_btn'] ?></a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
