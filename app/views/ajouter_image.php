<?php
require_once("../controllers/GalleryController.php");

$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");
?>


<body>
    <header class="header-ajouter-image">
        <?php
        $titrePage = "";
        require_once("common/header.php")
            ?>
    </header>
    <section>
        <div class="container">
            <form action="../routes/Image-route.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="title">Nom de l'image</label>
                    <input type="text" name="title" id="title" required>
                </div>
                <div>
                    <label for="photo">Choisir une image</label>
                    <input type="file" accept="image/jpg, image/jpeg" name="image" required>
                </div>
                <button type="submit" name="addImage" id="submit-btn">Ajouter</button>
            </form>
        </div>
        <div class="showImages">
            
            <?php
            
            $getImages = new GalleryController();
            $images = $getImages->getGallery();  
            foreach ($images as $image) { ?>
                <div class="img-container">
                    <img src="<?php echo $image['Lien']; ?>" alt="<?php echo $image['Titre']; ?>" class="image">
                </div>

            <?php } ?>

        </div>
    </section>

    <script src="../../public/js/responsiveDashboardMenu.js"></script>

    <body>

    </body>

    </html>