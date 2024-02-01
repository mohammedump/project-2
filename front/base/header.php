<?php

$currentPage = $_SERVER['PHP_SELF'];
$currentPageFolder = dirname($currentPage);


?>


<?php



if ($currentPage === '/p-pfe/front/service/service.php') {

}else{
    include 'nav.php';
}
?>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg " >
        <div class="container" style="position: sticky;">
                <!-- <a class="navbar-brand" href="#">
                  <img src="\p-pfe\assetes\images\image1.png" alt="logo" >
                </a>  -->
          <a class="navbar-brand" href="index.php">Tech<span>.</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
            <a class="nav-link <?php if($currentPage == 'home') echo 'active'; ?>" href="/p-pfe/front/index.php">Home</a>

              <a class="nav-link" href="#About">About</a>
              <a class="nav-link" href="/p-pfe/front/clients/service.php">Services </a>
              <?php if(!empty($_SESSION['email'])){echo' <a class="nav-link" href="profil.php">profile</a>'; } ?>
              
              <a href="/p-pfe/front/authentification/login.php" class="btn btn-brand ms-lg-3">Connection</a>
              <a href="/p-pfe/front/registration.php" class="btn btn-brand ms-lg-3">Inscription</a>
            </div>
          </div>
        </div>
      </nav>