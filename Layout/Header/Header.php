<!-- ======================= NAVBAR ======================= -->
<nav
  class="navbar navbar-expand-md fixed-top py-3 transition-shadow"
  id="navbar-bs"
  data-bs-theme="light">
  <div class="container navbar-container">

    <a href="index.php" class="navbar-brand d-flex align-items-center">
      <img src="../images/Logo-EN.svg" alt="Logo" style="height: 3.2rem; width: auto;" />
      
    </a>
    <div class="lang-dropdown position-relative" style="margin: 0 0.5rem;">
        <button class="lang-btn">
            <i class="bi bi-globe"></i>
        </button>

        <ul class="lang-menu">
            <li><a href="?lang=en">English</a></li>
            <li><a href="?lang=ar">العربية</a></li>
        </ul>
    </div>


    <button
      class="navbar-toggler p-2"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-md-0 gap-2">
        <li class="nav-item">
          <a class="nav-link fw-semibold <?= basename($_SERVER['PHP_SELF']) == 'home.php' ? 'text-primary active' : '' ?>"
            href="../Home/home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'text-primary active' : '' ?>"
            href="../About/about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold <?= basename($_SERVER['PHP_SELF']) == 'Products.php' ? 'text-primary active' : '' ?>"
            href="../Products/Products.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold <?= basename($_SERVER['PHP_SELF']) == 'Product.php' ? 'text-primary active' : '' ?>"
            href="../Product/Product.php">Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-semibold <?= basename($_SERVER['PHP_SELF']) == 'Contact.php' ? 'text-primary active' : '' ?>"
            href="../Contact/Contact.php">Contact</a>
        </li>

      </ul>
    </div>

  </div>
</nav>
<!-- ======================= NAVBAR ======================= -->