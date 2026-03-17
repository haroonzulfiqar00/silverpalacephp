<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silver Palace - Documentation, Construction & Cleaning Services</title>
  <meta name="description"
    content="Complete documentation, construction, and cleaning solutions under one roof. Providing CPR, CR registration, visa services, villa construction, maintenance, and reliable cleaning services.">

  <!-- Google Fonts: Modern & Premium Typography -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
    rel="stylesheet">

  <!-- FontAwesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- HEADER / NAVIGATION -->
  <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="logo">
        <img src="assets/images/silver-palace-logo.png" alt="Silver Palace Logo" class="nav-logo">
      </a>
      <nav>
        <ul class="nav-links">
          <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="documentation.php" class="<?= ($currentPage == 'documentation.php') ? 'active' : ''; ?>">Documentation</a></li>
          <li><a href="construction.php" class="<?= ($currentPage == 'construction.php') ? 'active' : ''; ?>">Construction</a></li>
          <li><a href="cleaning.php" class="<?= ($currentPage == 'cleaning.php') ? 'active' : ''; ?>">Cleaning</a></li>
          <li><a href="digital-services.php" class="<?= ($currentPage == 'digital-services.php') ? 'active' : ''; ?>">Digital Services</a></li>
          <!-- <li><a href="pricing.php" class="<?= ($currentPage == 'pricing.php') ? 'active' : ''; ?>">Pricing</a></li> -->
          <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
          <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav>
      <a href="contact.php#contact_form" class="btn btn-primary nav-cta">Get a Quote</a>
      <button class="menu-toggle" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </header>
