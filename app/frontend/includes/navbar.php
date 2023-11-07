<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Shop Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="cart.php">
          <span class="glyphicon glyphicon-shopping-cart"></span> Cart
        </a>
      </li>
      <?php if ($user->isLoggedIn()) : ?>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <span class="glyphicon glyphicon-user"></span> Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <span class="glyphicon glyphicon-log-out"></span> Logout
          </a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="register.php">
            <span class="glyphicon glyphicon-user"></span> Register
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <span class="glyphicon glyphicon-log-in"></span> Log-in
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>