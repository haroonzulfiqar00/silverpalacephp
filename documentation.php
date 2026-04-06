<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['doc_page_title'] ?></h1>
            <p><?= $t['doc_page_sub'] ?></p>
        </div>
    </section>

    <!-- INTRODUCTION -->
    <section class="section">
        <div class="container">
            <div class="row items-center gap-60">
                <div class="col-md-6 content-block">
                    <span class="badge blue-badge"><?= $t['doc_nav_badge'] ?></span>
                    <h2 class="section-title"><?= $t['doc_nav_title'] ?></h2>
                    <p class="lead-text"><?= $t['doc_nav_desc1'] ?></p>
                    <p><?= $t['doc_nav_desc2'] ?></p>
                </div>
                <div class="col-md-6">
                    <div class="image-box">
                        <img src="./assets/images/notary_device_3.webp" alt="Legal Documentation"
                            class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES LIST -->
    <section class="section light-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title"><?= $t['doc_what_title'] ?></h2>
                <p class="section-subtitle"><?= $t['doc_what_sub'] ?></p>
            </div>

            <div class="grid-3">
                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-id-card"></i></div>
                    <h4><?= $t['doc_s1_title'] ?></h4>
                    <p><?= $t['doc_s1_desc'] ?></p>
                </div>

                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-building"></i></div>
                    <h4><?= $t['doc_s2_title'] ?></h4>
                    <p><?= $t['doc_s2_desc'] ?></p>
                </div>

                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-certificate"></i></div>
                    <h4><?= $t['doc_s3_title'] ?></h4>
                    <p><?= $t['doc_s3_desc'] ?></p>
                </div>

                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-plane-arrival"></i></div>
                    <h4><?= $t['doc_s4_title'] ?></h4>
                    <p><?= $t['doc_s4_desc'] ?></p>
                </div>

                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-passport"></i></div>
                    <h4><?= $t['doc_s5_title'] ?></h4>
                    <p><?= $t['doc_s5_desc'] ?></p>
                </div>

                <div class="info-card">
                    <div class="icon-circle bg-blue text-white"><i class="fa-solid fa-ticket-airline"></i></div>
                    <h4><?= $t['doc_s6_title'] ?></h4>
                    <p><?= $t['doc_s6_desc'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- REQUIRED DOCUMENTS -->
    <section class="section">
        <div class="container">
            <div class="row align-center gap-60">
                <div class="col-md-5">
                    <h2 class="section-title"><?= $t['doc_req_title'] ?></h2>
                    <p class="mb-4"><?= $t['doc_req_desc'] ?></p>
                    <a href="contact.php#contact_form" class="btn btn-outline"><?= $t['doc_req_btn'] ?> <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="col-md-7">
                    <div class="docs-checklist box-card">
                        <ul>
                            <li>
                                <i class="fa-regular fa-folder-open"></i>
                                <div>
                                    <h5><?= $t['doc_r1_title'] ?></h5>
                                    <span><?= $t['doc_r1_desc'] ?></span>
                                </div>
                            </li>
                            <li>
                                <i class="fa-regular fa-folder-open"></i>
                                <div>
                                    <h5><?= $t['doc_r2_title'] ?></h5>
                                    <span><?= $t['doc_r2_desc'] ?></span>
                                </div>
                            </li>
                            <li>
                                <i class="fa-regular fa-folder-open"></i>
                                <div>
                                    <h5><?= $t['doc_r3_title'] ?></h5>
                                    <span><?= $t['doc_r3_desc'] ?></span>
                                </div>
                            </li>
                            <li>
                                <i class="fa-regular fa-folder-open"></i>
                                <div>
                                    <h5><?= $t['doc_r4_title'] ?></h5>
                                    <span><?= $t['doc_r4_desc'] ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESSING TIME TIMELINE -->
    <section class="section dark-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title light"><?= $t['doc_time_title'] ?></h2>
                <p class="section-subtitle light"><?= $t['doc_time_sub'] ?></p>
            </div>

            <div class="timeline-container">
                <div class="timeline-card">
                    <div class="time-badge"><?= $t['doc_t1_badge'] ?></div>
                    <h4><?= $t['doc_t1_title'] ?></h4>
                    <p><?= $t['doc_t1_desc'] ?></p>
                </div>
                <div class="timeline-card">
                    <div class="time-badge"><?= $t['doc_t2_badge'] ?></div>
                    <h4><?= $t['doc_t2_title'] ?></h4>
                    <p><?= $t['doc_t2_desc'] ?></p>
                </div>
                <div class="timeline-card">
                    <div class="time-badge"><?= $t['doc_t3_badge'] ?></div>
                    <h4><?= $t['doc_t3_title'] ?></h4>
                    <p><?= $t['doc_t3_desc'] ?></p>
                </div>
                <div class="timeline-card">
                    <div class="time-badge"><?= $t['doc_t4_badge'] ?></div>
                    <h4><?= $t['doc_t4_title'] ?></h4>
                    <p><?= $t['doc_t4_desc'] ?></p>
                </div>
            </div>
            <p class="text-center mt-4" style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">
                <?= $t['doc_time_note'] ?>
            </p>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
