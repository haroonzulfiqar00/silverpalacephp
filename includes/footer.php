  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <a href="index.php" class="logo">
            <img src="assets/images/silver-palace-logo.png" alt="Silver Palace Logo" class="nav-logo">
          </a>
          <p>Your integrated partner for premier documentation, construction, and cleaning services.</p>
        </div>
        <div class="footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <!-- <li><a href="pricing.php">Pricing</a></li> -->
            <li><a href="about.php">About Us</a></li>
            <li><a href="documentation.php">Documentation</a></li>
            <li><a href="construction.php">Construction</a></li>
            <li><a href="cleaning.php">Cleaning</a></li>
          </ul>
        </div>
        <div class="footer-contact">
          <h4>Contact Info</h4>
          <ul>
            <li><i class="fa-solid fa-location-dot"></i>building 1361 road 1224 block 1012 Al hamalah, Kingdom of
              Bahrain</li>
            <li> <a href="tel:+97333674146"> <i class="fa-solid fa-phone"></i> +973 3367 4146</a></li>
            <li> <a href="mailto:silverpal786@gmail.com"> <i class="fa-solid fa-envelope"></i>
                silverpal786@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 Silver Palace. All Rights Reserved.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JS for Mobile Menu and Scroll Effects -->
  <script>
    document.querySelector('.menu-toggle').addEventListener('click', function () {
      document.querySelector('.nav-links').classList.toggle('active');
    });

    // Header scroll effect
    window.addEventListener('scroll', function () {
      const header = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  </script>
</body>

</html>
