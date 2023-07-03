<?php
require_once("../controllers/GalleryController.php");
$title = "La Galerie du Restaurant";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");

?>

<body>
    <header class="header-galerie">
        <?php
        $titrePage = "galerie";
        require_once("common/header.php");
        ?>
    </header>
    <section>
        <h1>Le Quai Antique, restaurant gastronomique en Savoie</h1>
        <h2>Voici quelques clichés que le chef vous propose</h2>
        <div id="panel">
            <img id="focusImg" src="" alt="" />
        </div>
        <div class="images">
            <?php 
            $getImages = new GalleryController();
            $images = $getImages->getGallery();
            foreach ($images as $image) { ?>
                <div class="img-container">
                    <img src="<?php echo $image['Lien']; ?>" alt="<?php echo $image['Titre']; ?>" class="image">
                </div>
            <?php } ?>
        </div>
        <div class="buttons">
            <a href="carte.php">Découvrir notre carte</a>

            <?php if (isset($_SESSION['user'])) { ?>

            <a href="reservation.php?id=<?php echo $_SESSION['ID_Personne']; ?>">Réserver une table</a>

            <?php } else { ?>

                <a href="reservation.php">Réserver une table</a>

            <?php } ?>
        </div>
    </section>
    <footer>
        <?php require_once("common/footer.php"); ?>
    </footer>

    <script src="../../public/js/responsiveMenu.js" async></script>
    <script src="../../public/js/galleryFocus.js" async></script>
</body>

</html>