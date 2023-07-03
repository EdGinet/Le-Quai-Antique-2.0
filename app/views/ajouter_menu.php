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
    <header class="header-ajout-menu">
        <?php
        $titrePage = "";
        require_once("common/header.php");
        ?>
    </header>
    <section>
        <div class="form-container">

            <form class="addMenu-form" action="../routes/AjoutMenu.php" method="POST">
                <div>
                    <label for="titre-menu">Titre du menu</label>
                    <input type="text" id="titre-menu" name="titre-menu" required />
                </div>
                <div>
                    <label for="description-menu">Description du menu</label>
                    <textarea id="description-menu" name="description-menu" rows="5" required></textarea>
                </div>
                <div>
                    <label for="prix">Prix du menu</label>
                    <input type="tel" id="prix" name="prix" pattern="\d+" required />
                </div>

                <button type="submit" name="addMenu" id="submit-btn">Ajouter</button>
            </form>
        </div>
        <div class="menus-container">
            <b id="resp"></b>
        </div>

    </section>

    

    <script src="../../public/js/addMenuCarte.js"></script>
    <script src="../../public/js/responsiveDashboardMenu.js"></script>
</body>

</html>