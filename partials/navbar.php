<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <div class="d-flex justify-content-between w-100">
        <ul class="navbar-nav ">

        <?php if (isset($_SESSION["user"])): ?>
          <a class="navbar-brand font-weight-bold" href="home.php">
            <img class="mr-2" src="./static/img/logo.png" />
              ContactsApp
            </a>

          <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="favorites.php">Favorites</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add Contact</a>
        </li> 
        
        <?php else: ?>
          <a class="navbar-brand font-weight-bold" href="index.php">
          <img class="mr-2" src="./static/img/logo.png" />
            ContactsApp
          </a>

        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </div>
      <?php endif ?>
      <div class="p-3 center">
          <div class="form-check form-switch">
               <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Dark Mode</label>
          </div>
      </div>
      </ul>
      
      <?php if (isset($_SESSION["user"])): ?>
      <div class="p-1">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION["user"]["email"] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="home.php">Contacts</a></li>
            <li><a class="dropdown-item" href="favorites.php">Favorites</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
        
      </div>
      <?php endif ?>
    </div>
  </div>
</nav>