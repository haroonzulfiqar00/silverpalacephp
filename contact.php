<?php include 'includes/header.php'; ?>

    <!-- PAGE HEADER -->
    <section class="page-header"
        style="background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.85)), url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80'); background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1><?= $t['contact_page_title'] ?></h1>
            <p><?= $t['contact_page_sub'] ?></p>
        </div>
    </section>

    <!-- CONTACT INTRO & FORM SECTION -->
    <section class="section">
        <div class="container">

            <div class="row gap-60">

                <!-- Left Column: Form -->
                <div class="col-md-7">
                    <div class="contact-intro mb-4">
                        <h2 class="section-title" style="font-size: 2rem;"><?= $t['contact_q_title'] ?></h2>
                        <p class="lead-text"><?= $t['contact_q_desc'] ?></p>
                    </div>

                    <div class="form-container" id="contact_form">
                        <h3 class="form-heading"><i class="fa-regular fa-envelope"></i> <?= $t['contact_f_title'] ?></h3>
                        <p class="text-muted mb-4"><?= $t['contact_f_sub'] ?></p>
                        
                        <?php
                        // Since session_start() is already called in header.php, we do not need to call it again.
                        if (isset($_SESSION['form_error'])) {
                            echo '<div style="background-color: #fce4e4; color: #cc0033; padding: 15px; border-radius: 5px; margin-bottom: 20px;">' . $_SESSION['form_error'] . '</div>';
                            unset($_SESSION['form_error']);
                        }
                        ?>

                        <form action="send-mail.php" method="POST" class="contact-form">

                            <div class="form-group row gap-20">
                                <div class="col-md-6">
                                    <label for="fullName"><?= $t['contact_f_name'] ?></label>
                                    <input type="text" id="fullName" name="Full_Name" class="form-control"
                                        placeholder="<?= $t['contact_ph_name'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone"><?= $t['contact_f_phone'] ?></label>
                                    <input type="tel" id="phone" name="Phone_Number" class="form-control"
                                        placeholder="<?= $t['contact_ph_phone'] ?>" required>
                                </div>
                            </div>

                            <div class="form-group row gap-20">
                                <div class="col-md-6">
                                    <label for="email"><?= $t['contact_f_email'] ?></label>
                                    <input type="email" id="email" name="Email_Address" class="form-control"
                                        placeholder="<?= $t['contact_ph_email'] ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="serviceType"><?= $t['contact_f_type'] ?></label>
                                    <select id="serviceType" name="Service_Type" class="form-control" required>
                                        <option value="" disabled selected><?= $t['contact_f_sel'] ?></option>
                                        <option value="Documentation Services"><?= $t['contact_f_opt1'] ?></option>
                                        <option value="Construction Services"><?= $t['contact_f_opt2'] ?></option>
                                        <option value="Cleaning Services"><?= $t['contact_f_opt3'] ?></option>
                                        <option value="Digital Services"><?= $t['contact_f_opt4'] ?></option>
                                        <option value="Other"><?= $t['contact_f_opt5'] ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message"><?= $t['contact_f_msg'] ?></label>
                                <textarea id="message" name="Message" class="form-control" rows="5"
                                    placeholder="<?= $t['contact_ph_msg'] ?>" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                <?= $t['contact_f_btn'] ?> <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i>
                            </button>

                        </form>
                    </div>
                </div>

                <!-- Right Column: Info -->
                <div class="col-md-5">

                    <!-- Company Info Details -->
                    <div class="contact-info-card">
                        <h3><?= $t['contact_i_title'] ?></h3>
                        <ul class="info-list">
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-building"></i></div>
                                <div>
                                    <h5><?= $t['contact_i_cname'] ?></h5>
                                    <p><?= $t['contact_i_cval'] ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                                <div>
                                    <h5><?= $t['contact_i_pname'] ?></h5>
                                    <p dir="ltr" style="text-align: left;"><?= $t['contact_i_pval'] ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div>
                                    <h5><?= $t['contact_i_ename'] ?></h5>
                                    <p><?= $t['contact_i_eval'] ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div>
                                    <h5><?= $t['contact_i_lname'] ?></h5>
                                    <p><?= $t['contact_i_lval'] ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <h5><?= $t['contact_i_wname'] ?></h5>
                                    <p dir="ltr" style="text-align: left;"><?= $t['contact_i_wval'] ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Quick Options -->
                    <div class="contact-info-card quick-options mt-4"
                        style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: var(--white);">
                        <h3 style="color: var(--white); border-bottom-color: rgba(255,255,255,0.2);"><?= $t['contact_qo_title'] ?></h3>
                        <p style="margin-bottom: 20px; color: rgba(255,255,255,0.9);"><?= $t['contact_qo_sub'] ?></p>

                        <div class="quick-links">
                            <a href="tel:+97333674146" class="quick-btn"><i class="fa-solid fa-phone"></i> <?= $t['contact_qo_b1'] ?></a>
                            <a href="tel:+97333674146" target="_blank" class="quick-btn whatsapp"><i
                                    class="fa-brands fa-whatsapp"></i> <?= $t['contact_qo_b2'] ?></a>
                            <a href="mailto:silverpal786@gmail.com" class="quick-btn"><i
                                    class="fa-solid fa-envelope"></i> <?= $t['contact_qo_b3'] ?></a>
                        </div>

                        <div class="response-time mt-4">
                            <i class="fa-solid fa-bolt"></i> <?= $t['contact_qo_res'] ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CLOSING SECTION -->
    <section class="section light-bg text-center">
        <div class="container">
            <h2 class="section-title"><?= $t['contact_c_title'] ?></h2>
            <p class="lead-text mt-4"><?= $t['contact_c_sub'] ?></p>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
