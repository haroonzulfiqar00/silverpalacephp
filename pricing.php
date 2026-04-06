<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['price_page_title'] ?></h1>
            <p><?= $t['price_page_sub'] ?></p>
        </div>
    </section>

    <!-- PRICING TIERS -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['price_bundle_title'] ?></h2>
                <p class="section-subtitle"><?= $t['price_bundle_sub'] ?></p>
            </div>

            <div class="pricing-page-grid">

                <!-- Basic Tier -->
                <div class="bundle-card">
                    <div class="bundle-top basic-top">
                        <div class="bundle-medal"><i class="fa-solid fa-medal" style="color: #c0c0c0;"></i></div>
                        <h3><?= $t['price_b_title'] ?></h3>
                        <p><?= $t['price_b_desc'] ?></p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency"><?= $t['price_b_cur'] ?></span> <span class="amount"><?= $t['price_b_amt'] ?></span><span
                                class="period"><?= $t['price_b_mo'] ?></span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <?= $t['price_b_f1'] ?></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <?= $t['price_b_f2'] ?>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i> <?= $t['price_b_f3'] ?></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <?= $t['price_b_f4'] ?></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <?= $t['price_b_f5'] ?></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-outline btn-full"><?= $t['price_b_btn'] ?></a>
                    </div>
                </div>

                <!-- Standard Tier -->
                <div class="bundle-card popular">
                    <!-- Standard (Gold) usually recommended -->
                    <div class="popular-ribbon"><?= $t['price_s_rec'] ?></div>
                    <div class="bundle-top standard-top">
                        <div class="bundle-medal"><i class="fa-solid fa-medal" style="color: #ffd700;"></i></div>
                        <h3><?= $t['price_s_title'] ?></h3>
                        <p><?= $t['price_s_desc'] ?></p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency"><?= $t['price_s_cur'] ?></span> <span class="amount"><?= $t['price_s_amt'] ?></span><span
                                class="period"><?= $t['price_s_mo'] ?></span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <?= $t['price_s_f1'] ?></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <?= $t['price_s_f2'] ?>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i>
                                <?= $t['price_s_f3'] ?>
                            </li>
                            <li><i class="fa-solid fa-check" style="color: var(--accent);"></i> <?= $t['price_s_f4'] ?></li>
                            <li class="disabled"><i class="fa-solid fa-xmark"></i> <?= $t['price_s_f5'] ?></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-primary btn-full"
                            style="background: linear-gradient(135deg, #ffd700, #d4af37);"><?= $t['price_s_btn'] ?></a>
                    </div>
                </div>

                <!-- Premium Tier -->
                <div class="bundle-card">
                    <div class="bundle-top premium-top">
                        <div class="bundle-medal"><i class="fa-solid fa-trophy" style="color: #e5e4e2;"></i></div>
                        <!-- Platinum color -->
                        <h3><?= $t['price_p_title'] ?></h3>
                        <p><?= $t['price_p_desc'] ?></p>
                    </div>
                    <div class="bundle-body">
                        <div class="bundle-price">
                            <span class="currency"><?= $t['price_p_cur'] ?></span> <span class="amount"><?= $t['price_p_amt'] ?></span><span
                                class="period"><?= $t['price_p_mo'] ?></span>
                        </div>
                        <ul class="bundle-features">
                            <li><i class="fa-solid fa-broom" style="color: var(--accent);"></i> <?= $t['price_p_f1'] ?></li>
                            <li><i class="fa-solid fa-screwdriver-wrench" style="color: var(--secondary);"></i>
                                <?= $t['price_p_f2'] ?>
                            </li>
                            <li><i class="fa-solid fa-file-signature" style="color: var(--primary);"></i> <?= $t['price_p_f3'] ?></li>
                            <li><i class="fa-solid fa-bolt" style="color: var(--secondary);"></i> <?= $t['price_p_f4'] ?></li>
                            <li><i class="fa-solid fa-star" style="color: #ffd700;"></i> <?= $t['price_p_f5'] ?></li>
                        </ul>
                    </div>
                    <div class="bundle-footer">
                        <a href="contact.php#contact_form" class="btn btn-primary btn-full"
                            style="background: var(--dark);"><?= $t['price_p_btn'] ?></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CUSTOM PACKAGE BANNER -->
    <section class="section dark-bg">
        <div class="container text-center">
            <h2 class="section-title light"><?= $t['price_c_title'] ?></h2>
            <p class="section-subtitle light" style="max-width: 700px; margin: 0 auto 30px;"><?= $t['price_c_desc'] ?></p>
            <a href="contact.php#contact_form" class="btn btn-outline"
                style="border-color: var(--white); color: var(--white);"><?= $t['price_c_btn'] ?></a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
