<?php 
session_start();

$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php"); 


?>

<body>
    <header class="header-admin">
        <?php 
        $titrePage = "";
        require_once("common/header.php"); 
        ?>
    </header>
    <section>       
        <div class="main-content">
            <div class="content">
                <h2>Modifier la galerie</h2>
                <a href="ajouter_image.php">Ajouter une image</a>
                <a href="supprimer_image.php">Supprimer une image</a>
            </div>
            <div class="content">
                <h2>Modifier la carte</h2>
                <a href="ajouter_menu.php">Ajouter un menu</a>
            </div>
            <div class="content">
                <h2>Modifier les horaires</h2>
                <a href="#">Changer les horaires</a>
            </div>
        </div>
    </section>
    <script src="../../public/js/responsiveDashboardMenu.js" async></script>
</body>
</html>