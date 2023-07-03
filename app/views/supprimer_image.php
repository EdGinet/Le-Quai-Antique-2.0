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
        <div class="showImages">
            <?php

            $getImages = new GalleryController();
            $images = $getImages->getGallery();
            foreach ($images as $image) { ?>
                <div class="img-container">

                    <img src="<?php echo $image['Lien']; ?>" alt="<?php echo $image['Titre']; ?>" class="image">

                    <form method="post" action="../routes/Image-route.php">
                        
                        <input type="hidden" name="image_id" value="<?php echo $image['Id_Image']; ?>">

                        <button type="submit" name="deleteImage" class="delete-button">
                            <i class="fa-solid fa-trash-can delete"></i>
                        </button>

                    </form>
                </div>

            <?php } ?>
        </div>
    </section>

    <script src="../../public/js/responsiveDashboardMenu.js"></script>

    <body>

    </body>

    </html>