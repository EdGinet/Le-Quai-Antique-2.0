<div class="nav-container">
    <nav>
        <div class="logo">
            <a href="/Le-Quai-Antique-2.0/index.php" id="title" class="logo ">Le Quai Antique</a>
        </div>
        <div class="toggle">
            <i class="fa-solid fa-bars ouvrir"></i>
            <i class="fa-solid fa-xmark fermer"></i>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/Le-Quai-Antique-2.0/app/views/accueil.php">Accueil</a></li>

                <li><a href="/Le-Quai-Antique-2.0/app/views/galerie.php">Galerie</a></li>

                <li><a href="/Le-Quai-Antique-2.0/app/views/carte.php">La carte</a></li>

                <li><a href="/Le-Quai-Antique-2.0/app/views/contact.php">Contact</a></li>

                <?php if (isset($_SESSION['admin']) || isset($_SESSION['user'])) { ?>

                    <li><a class="btn btn-primary"
                            href="/Le-Quai-Antique-2.0/app/routes/Deconnexion.php">Deconnexion</a>
                    </li>

                    <?php if (isset($_SESSION['admin'])) { ?>
                        <li><a class="btn btn-secondary" href="/Le-Quai-Antique-2.0/app/views/admin.php">Dashboard</a>
                        </li>
                    <?php } else { ?>
                        <li><a class="btn btn-secondary"
                                href="/Le-Quai-Antique-2.0/app/views/reservation.php?id=<?php echo $_SESSION['ID_Personne']; ?>">Réserver</a>
                        </li>
                    <?php } ?>

                <?php } else { ?>

                    <li><a class="btn btn-primary" href="/Le-Quai-Antique-2.0/app/views/connexion.php">Connexion</a>
                    </li>

                    <li><a class="btn btn-secondary"
                            href="/Le-Quai-Antique-2.0/app/views/reservation.php">Réserver</a>
                    </li>

                <?php } ?>
            </ul>
            <div class="hours">
                <p>Lundi, mardi, mercredi, jeudi, vendredi : 19:00 - 22:00</p>
                <p>Samedi, Dimanche : 12:00 - 14:30, 19:00 - 22:00</p>
            </div>
            <div class="contacts">
                <p>56 rue de Montagny</p>
                <p>73000 Chambéry</p>
                <p>+33 1 23 45 67 89</p>
                <p>contact@quaiantique.com</p>
            </div>
            <div class="socials">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </nav>
</div>
<h1>
    <?php echo $titrePage ?>
</h1>