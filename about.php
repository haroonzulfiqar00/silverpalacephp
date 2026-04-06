<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER / HERO -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['about_title'] ?></h1>
            <p><?= $t['about_sub'] ?></p>
        </div>
    </section>

    <!-- WHO WE ARE -->
    <section class="section">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6 content-block">
                    <span class="badge blue-badge"><?= $t['about_who'] ?></span>
                    <h2 class="section-title"><?= $t['about_who_title'] ?></h2>
                    <p class="lead-text"><?= $t['about_who_desc1'] ?></p>
                    <p><?= $t['about_who_desc2'] ?></p>
                </div>
                <div class="col-md-6">
                    <div class="image-box relative-img">
                        <img src="./assets/images/trusted-team.webp" alt="Silver Palace Team"
                            class="img-fluid rounded shadow-lg">
                        <div class="cleaning-badge" style="border-left-color: var(--primary);">
                            <i class="fa-solid fa-handshake-angle" style="color: var(--primary);"></i>
                            <span><?= $t['about_trusted'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION-->
    <section class="section light-bg">
        <div class="container">
            <div class="row gap-60">

                <!-- Mission -->
                <div class="col-md-6">
                    <div class="info-card" style="height: 100%; justify-content: flex-start;">
                        <div class="icon-circle bg-blue text-white"
                            style="background: linear-gradient(135deg, var(--secondary), #d97706);"><i
                                class="fa-solid fa-bullseye"></i></div>
                        <h2><?= $t['about_mission'] ?></h2>
                        <p class="lead-text" style="color: var(--dark); margin-top: 10px;"><?= $t['about_mission_sub'] ?></p>
                        <p style="font-size: 1.1rem; line-height: 1.7; font-weight: 500;"><?= $t['about_mission_quote'] ?></p>
                        <p class="mt-4"><?= $t['about_mission_desc'] ?></p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-6">
                    <div class="info-card" style="height: 100%; justify-content: flex-start;">
                        <div class="icon-circle bg-blue text-white"
                            style="background: linear-gradient(135deg, var(--accent), #059669);"><i
                                class="fa-solid fa-eye"></i></div>
                        <h2><?= $t['about_vision'] ?></h2>
                        <p class="mt-4" style="font-size: 1.15rem; line-height: 1.8;"><?= $t['about_vision_desc'] ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- OUR CORE SERVICES (Summaries) -->
    <section class="section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['core_services'] ?></h2>
                <p class="section-subtitle"><?= $t['about_core_sub'] ?></p>
            </div>

            <div class="grid-3">

                <!-- Documentation Summary -->
                <div class="service-card" style="border-left: 4px solid var(--primary);">
                    <div class="card-icon wrapper-blue" style="margin: 0 auto 20px;">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h3 class="text-center" style="font-size: 1.3rem;"><?= $t['doc_services'] ?></h3>
                    <ul class="clean-check-list" style="margin-top: 20px;">
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f1'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f2'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f3'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f4'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f5'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= $t['doc_f6'] ?></li>
                    </ul>
                    <p class="text-center mt-4"
                        style="font-weight: 500; font-size: 0.95rem; color: var(--primary-dark);"><?= $t['about_doc_sum'] ?></p>
                </div>

                <!-- Construction Summary -->
                <div class="service-card" style="border-left: 4px solid var(--secondary);">
                    <div class="card-icon wrapper-orange" style="margin: 0 auto 20px;">
                        <i class="fa-solid fa-person-digging"></i>
                    </div>
                    <h3 class="text-center" style="font-size: 1.3rem;"><?= $t['const_services'] ?></h3>
                    <ul class="clean-check-list" style="margin-top: 20px;">
                        <li><i class="fa-solid fa-circle-check" style="color: var(--secondary);"></i> <?= $t['const_f1'] ?>
                        </li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--secondary);"></i> <?= $t['const_f2'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--secondary);"></i> <?= $t['const_f4'] ?>
                        </li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--secondary);"></i> <?= $t['const_f5'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--secondary);"></i> <?= $t['const_f3'] ?></li>
                    </ul>
                    <p class="text-center mt-4" style="font-weight: 500; font-size: 0.95rem; color: #b45309;"><?= $t['about_const_sum'] ?></p>
                </div>

                <!-- Cleaning Summary -->
                <div class="service-card" style="border-left: 4px solid var(--accent);">
                    <div class="card-icon wrapper-green" style="margin: 0 auto 20px;">
                        <i class="fa-solid fa-broom"></i>
                    </div>
                    <h3 class="text-center" style="font-size: 1.3rem;"><?= $t['clean_services'] ?></h3>
                    <ul class="clean-check-list" style="margin-top: 20px;">
                        <li><i class="fa-solid fa-circle-check" style="color: var(--accent);"></i> <?= $t['clean_f1'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--accent);"></i> <?= $t['clean_f2'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--accent);"></i> <?= $t['clean_f4'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--accent);"></i> <?= $t['clean_f5'] ?></li>
                        <li><i class="fa-solid fa-circle-check" style="color: var(--accent);"></i> <?= $t['clean_f6'] ?>
                        </li>
                    </ul>
                    <p class="text-center mt-4" style="font-weight: 500; font-size: 0.95rem; color: #047857;"><?= $t['about_clean_sum'] ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US & CLOSING -->
    <section class="section dark-bg">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6">
                    <h2 class="section-title light"><?= $t['about_why'] ?></h2>
                    <ul class="benefits-grid mt-4" style="gap: 15px;">
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why1'] ?></h4>
                        </li>
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why2'] ?></h4>
                        </li>
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why3'] ?></h4>
                        </li>
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why4'] ?></h4>
                        </li>
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why5'] ?></h4>
                        </li>
                        <li class="benefit-item" style="align-items: center; gap: 15px;">
                            <div class="benefit-icon" style="width: 40px; height: 40px; font-size: 1rem;"><i
                                    class="fa-solid fa-check"></i></div>
                            <h4 style="margin: 0; font-weight: 500;"><?= $t['about_why6'] ?></h4>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 text-center">
                    <div
                        style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); padding: 50px; border-radius: var(--border-radius); backdrop-filter: blur(5px);">
                        <i class="fa-solid fa-quote-left"
                            style="font-size: 3rem; color: var(--primary); margin-bottom: 20px; opacity: 0.5;"></i>
                        <h3
                            style="font-family: var(--font-serif); font-size: 2rem; color: var(--white); font-weight: 400; line-height: 1.5; font-style: italic;">
                            <?= $t['about_quote'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
