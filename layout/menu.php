<!--
<header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=info">En savoir plus</a></li>
                <li><a href="index.php?page=connection">Connection</a></li>
            </ul>
        </nav>
    </header>
--> 

<header>
<nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Babebrousse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <?php 
            if(isset($_SESSION['user'])){
              ?>
            <a class="nav-link" href="?page=deconnection">Déconnexion</a>
            <?php 
            } else {
              ?>
            <a class="nav-link" href="?page=connexion">Connexion</a>
            <?php }
            ?>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?page=info" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              En savoir plus
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
            <li><a class="dropdown-item" href="?page=articles&action=new">Nouvel Article</a></li>
              <li><a class="dropdown-item" href="?page=info">Informations</a></li>
              <li><a class="dropdown-item" href="?page=contact">Contact</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="?page=utilisateurs">Utilisateurs</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</header>