<?php
$title = "Connexion";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");
?>

<body>
    <header class="header-connexion">
        <?php
        $titrePage = "connexion";
        require_once("common/header.php");
        ?>
    </header>
    <section>
        <div class="container">
            <div id="login-form-container" class="form-container">
                <h1 class="form-title">connexion</h1>

                <form class="login-form" action="../routes/Connexion.php" method="POST">
                    
                    <label for="text">E-mail</label>
                    <input type="email" id="email" name="email" required />

                    <label for="password">Mot de passe</label>
                    <input type="password" name="pswd" required />

                    <a href="#" class="forgot-password">Mot de passe oublié</a>

                    <button type="submit" value="login" name="login" class="submit-btn">Connexion</button>
                </form>

                <p class="message">Vous n'avez pas de compte ? 
                <a href="inscription.php" id="sign-up-btn" class="other-btn">Inscrivez-vous</a>
                </p>
            </div>
            <div class="img-container"></div>
        </div>
    </section>

    <script src="../../public/js/responsiveMenu.js" async></script>
</body>
