<?php
$title = "Inscription";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");
?>

<body>
    <header class="header-inscription">
        <?php
        $titrePage = "inscription";
        require_once("common/header.php");
        ?>
    </header>

    <section>
        <div id="registration-form-container" class="form-container">
            <h1 class="form-title">Inscription</h1>

            <form class="registration-form" action="../routes/Inscription.php" method="POST">
                
                <label for="text">Nom</label>
                <input type="text" id="name" name="nom" required />

                <label for="text">Prénom</label>
                <input type="text" id="firstname" name="prenom" required />

                <label for="adresse">Adresse:</label>

                <input type="text" class="form-control" id="adresse" name="adresse"
                    required>

                <label for="CP">Code Postal:</label>

                <input type="text" class="form-control" id="cp" name="cp"
                    minlength="5" maxlength="5" required>

                <label for="Tel">Téléphone:</label>

                <input type="text" class="form-control" id="tel" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
                    placeholder="XX XX XX XX XX " name="tel" required />

                <label for="text">E-mail</label>
                <input type="email" id="reg-email" name="email" required />

                <label for="password">Mot de passe</label>
                <input type="password" id="reg-password" name="pswd" required /> 

                <button type="submit" value="sign-up" name="sign-up" class="submit-btn">Inscription</button>
            </form>


            <p class="message">Vous avez déjà un compte ? 
                <a href="connexion.php" id="login-btn" class="other-btn">Connectez-vous</a>
            </p>
            
        </div>
        <div class="img-container"></div>
    </section>

    <script src="../../public/js/responsiveMenu.js" async></script>
</body>