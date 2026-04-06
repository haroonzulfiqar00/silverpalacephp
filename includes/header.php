<?php
session_start();

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'ar') {
        $_SESSION['lang'] = 'ar';
    } else {
        $_SESSION['lang'] = 'en';
    }
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en'; // default
}

if ($_SESSION['lang'] == 'ar') {
    include __DIR__ . '/lang_ar.php';
} else {
    include __DIR__ . '/lang_en.php';
}

$lang = $_SESSION['lang'];
$dir = ($lang == 'ar') ? 'rtl' : 'ltr';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">

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
          <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : ''; ?>"><?= $t['home'] ?></a></li>
          <li><a href="documentation.php" class="<?= ($currentPage == 'documentation.php') ? 'active' : ''; ?>"><?= $t['documentation'] ?></a></li>
          <li><a href="construction.php" class="<?= ($currentPage == 'construction.php') ? 'active' : ''; ?>"><?= $t['construction'] ?></a></li>
          <li><a href="cleaning.php" class="<?= ($currentPage == 'cleaning.php') ? 'active' : ''; ?>"><?= $t['cleaning'] ?></a></li>
          <li><a href="digital-services.php" class="<?= ($currentPage == 'digital-services.php') ? 'active' : ''; ?>"><?= $t['digital_services'] ?></a></li>
          <!-- <li><a href="pricing.php" class="<?= ($currentPage == 'pricing.php') ? 'active' : ''; ?>">Pricing</a></li> -->
          <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : ''; ?>"><?= $t['about_us'] ?></a></li>
          <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : ''; ?>"><?= $t['contact'] ?></a></li>
          
          <li class="lang-dropdown">
            <a href="javascript:void(0)"><i class="fa-solid fa-globe"></i> <?= $lang == 'en' ? 'English' : 'العربية' ?> <i class="fa-solid fa-caret-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="?lang=en">English</a></li>
              <li><a href="?lang=ar">العربية</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <a href="contact.php#contact_form" class="btn btn-primary nav-cta"><?= $t['get_quote'] ?></a>
      <button class="menu-toggle" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </header>
