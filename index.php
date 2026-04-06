<?php include 'includes/header.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <span class="badge"><i class="fa-solid fa-star"></i> <?= $t['hero_integrated'] ?></span>
      <h1><?= $t['hero_title'] ?></h1>
      <p class="subtext"><?= $t['hero_subtext'] ?></p>
      <div class="hero-buttons">
        <a href="contact.php#contact_form" class="btn btn-primary btn-lg"><?= $t['get_quote'] ?> <i
            class="fa-solid fa-arrow-right"></i></a>
        <a href="#services" class="btn btn-secondary btn-lg"><?= $t['our_services'] ?></a>
      </div>
    </div>
  </section>

  <!-- CORE SERVICES SECTION -->
  <section id="services" class="services section">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title"><?= $t['core_services'] ?></h2>
        <p class="section-subtitle"><?= $t['core_services_sub'] ?>
        </p>
      </div>

      <div class="services-grid">
        <!-- Documentation Card -->
        <div class="service-card">
          <div class="card-icon wrapper-blue">
            <i class="fa-solid fa-file-contract"></i>
          </div>
          <h3><?= $t['doc_services'] ?></h3>
          <ul class="feature-list">
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f1'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f2'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f3'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f4'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f5'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['doc_f6'] ?></li>
          </ul>
          <a href="documentation.php" class="card-link"><?= $t['learn_more'] ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Construction Card -->
        <div class="service-card">
          <div class="card-icon wrapper-orange">
            <i class="fa-solid fa-person-digging"></i>
          </div>
          <h3><?= $t['const_services'] ?></h3>
          <ul class="feature-list">
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f1'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f2'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f3'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f4'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f5'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['const_f6'] ?></li>
          </ul>
          <a href="construction.php" class="card-link"><?= $t['learn_more'] ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Cleaning Card -->
        <div class="service-card">
          <div class="card-icon wrapper-green">
            <i class="fa-solid fa-broom"></i>
          </div>
          <h3><?= $t['clean_services'] ?></h3>
          <ul class="feature-list">
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f1'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f2'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f3'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f4'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f5'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['clean_f6'] ?></li>
          </ul>
          <a href="cleaning.php" class="card-link"><?= $t['learn_more'] ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Digital Services Card -->
        <div class="service-card">
          <div class="card-icon wrapper-purple">
            <i class="fa-solid fa-laptop-code"></i>
          </div>
          <h3><?= $t['dig_services'] ?></h3>
          <ul class="feature-list">
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f1'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f2'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f3'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f4'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f5'] ?></li>
            <li><i class="fa-solid fa-check"></i> <?= $t['dig_f6'] ?></li>
          </ul>
          <a href="digital-services.php" class="card-link"><?= $t['learn_more'] ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="why-choose-us section dark-bg">
    <div class="container why-container">
      <div class="why-content">
        <h2 class="section-title light"><?= $t['why_choose_us'] ?></h2>
        <p class="section-subtitle light"><?= $t['why_sub'] ?></p>

        <div class="benefits-grid">
          <div class="benefit-item">
            <div class="benefit-icon"><i class="fa-solid fa-bolt"></i></div>
            <div>
              <h4><?= $t['why_1_title'] ?></h4>
              <p><?= $t['why_1_desc'] ?></p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i class="fa-solid fa-landmark"></i></div>
            <div>
              <h4><?= $t['why_2_title'] ?></h4>
              <p><?= $t['why_2_desc'] ?></p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i class="fa-solid fa-hard-hat"></i></div>
            <div>
              <h4><?= $t['why_3_title'] ?></h4>
              <p><?= $t['why_3_desc'] ?></p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i class="fa-solid fa-hand-sparkles"></i></div>
            <div>
              <h4><?= $t['why_4_title'] ?></h4>
              <p><?= $t['why_4_desc'] ?></p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i class="fa-solid fa-tags"></i></div>
            <div>
              <h4><?= $t['why_5_title'] ?></h4>
              <p><?= $t['why_5_desc'] ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="why-image">
        <img src="./assets/images/whychooseus.webp" alt="Professional Services Display">
      </div>
    </div>
  </section>

  <!-- WORK PROCESS SECTION -->
  <section class="process section">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title"><?= $t['process_title'] ?></h2>
        <p class="section-subtitle"><?= $t['process_sub'] ?></p>
      </div>

      <div class="process-steps">
        <div class="step">
          <div class="step-number">01</div>
          <div class="step-icon"><i class="fa-regular fa-envelope"></i></div>
          <h4><?= $t['proc_1_title'] ?></h4>
          <p><?= $t['proc_1_desc'] ?></p>
        </div>
        <!-- Line connector -->
        <div class="step-connector"></div>
        <div class="step">
          <div class="step-number">02</div>
          <div class="step-icon"><i class="fa-regular fa-comments"></i></div>
          <h4><?= $t['proc_2_title'] ?></h4>
          <p><?= $t['proc_2_desc'] ?></p>
        </div>
        <div class="step-connector"></div>
        <div class="step">
          <div class="step-number">03</div>
          <div class="step-icon"><i class="fa-regular fa-map"></i></div>
          <h4><?= $t['proc_3_title'] ?></h4>
          <p><?= $t['proc_3_desc'] ?></p>
        </div>
        <div class="step-connector"></div>
        <div class="step">
          <div class="step-number">04</div>
          <div class="step-icon"><i class="fa-solid fa-gears"></i></div>
          <h4><?= $t['proc_4_title'] ?></h4>
          <p><?= $t['proc_4_desc'] ?></p>
        </div>
        <div class="step-connector"></div>
        <div class="step">
          <div class="step-number">05</div>
          <div class="step-icon"><i class="fa-regular fa-circle-check"></i></div>
          <h4><?= $t['proc_5_title'] ?></h4>
          <p><?= $t['proc_5_desc'] ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials section light-bg">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title"><?= $t['testimonials_title'] ?></h2>
        <p class="section-subtitle"><?= $t['testimonials_sub'] ?></p>
      </div>

      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="review-text"><?= $t['test_1'] ?></p>
          <div class="client-info">
            <div class="client-avatar">
              <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <h5><?= $t['test_1_name'] ?></h5>
              <span><?= $t['test_1_role'] ?></span>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="review-text"><?= $t['test_2'] ?></p>
          <div class="client-info">
            <div class="client-avatar">
              <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <h5><?= $t['test_2_name'] ?></h5>
              <span><?= $t['test_2_role'] ?></span>
            </div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          </div>
          <p class="review-text"><?= $t['test_3'] ?></p>
          <div class="client-info">
            <div class="client-avatar">
              <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <h5><?= $t['test_3_name'] ?></h5>
              <span><?= $t['test_3_role'] ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION -->
  <section class="cta section">
    <div class="container text-center">
      <h2 class="cta-title"><?= $t['cta_title'] ?></h2>
      <p class="cta-subtitle"><?= $t['cta_sub'] ?></p>
      <a href="contact.php#contact_form" class="btn btn-primary btn-lg"><?= $t['contact_us_today'] ?></a>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
