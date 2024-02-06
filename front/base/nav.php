<nav class="top-nav" id="home">
    <nav class="container" style="position: sticky;">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p>

                    <span> <?php
                            if (isset($_SESSION["nom"])) {
                                echo "Bonjour ";
                                echo $_SESSION["prenom"] . " " . $_SESSION["nom"];
                            } ?></span>
                </p>
                <?php
                $currentPage = $_SERVER['PHP_SELF'];
                $expectedPath = '/project-2/front/index.php';

                if ($currentPage === $expectedPath) {

                    echo '<p class="a">
                    <i class="fas fa-envelope" style="color: #fff;"></i> <!-- Use "fas" for solid style -->
                    <span>mohammed.sebay@ump.ac.ma</span>
                </p>';
                    echo '<p class="a">
                    <i class="fas fa-phone" style="color: #fff;"></i> <!-- Use "fas" for solid style -->
                    <span>+221 643352155</span>
                </p>';
                } else {
                }
                ?>

            </div>
            <?php
            if (isset($_SESSION["nom"])) {
                echo '<div class="col-auto">
                    <a href="/project-2/front/authentification/logout.php" class="btn btn-brand ms-lg-3">Se déconnecter</a>
                </div>
                ';
            }
            ?>
            <div class="col-auto">
                <div class="socila-links">
                    <a href="https://web.facebook.com/simo.sebayi/?locale=fr_FR" class="a"> <i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/mohammed_sebay/" class="a"> <i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/mohammedump" class="a"> <i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </nav>
</nav>