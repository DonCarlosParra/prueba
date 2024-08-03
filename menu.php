<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center"> <img src="logos/logo1.png"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-start" aria-controls="navbar-start" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-start">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="font-size:1em;"><?php echo $lang['inicio']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="font-size:1em;"><?php echo $lang['nosotros']; ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="contact.php" style="font-size:1em;"><?php echo $lang['contacto']; ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php#FAQ" style="font-size:1em;"><?php echo $lang['FAQ']; ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="social.php" style="font-size:1em;"><?php echo $lang['social']; ?></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="font-size:1em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $lang['lenguage']; ?>
                    <!-- <img src="img/globo2.png" alt="Language" style="width: 20px; height: 20px;"> -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?lang=en"><img src="img/eu.png" alt="English" style="width: 20px; height: 20px;"> English</a></li>
                        <li><a class="dropdown-item" href="?lang=es"><img src="img/es.png" alt="Español" style="width: 20px; height: 20px;"> Español</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>