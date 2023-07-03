<?php
require_once("../routes/Carte-route.php");
?>

<body>
    <?php
    $title = "La Carte du Restaurant";
    $pageName = basename($_SERVER['PHP_SELF'], '.php');
    $commonCss = "../../public/css/common/commonCss.css";
    $headerCss = "../../public/css/common/header.css";
    $responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
    $footerCss = "../../public/css/common/footer.css";
    $actualPageCss = "../../public/css/$pageName.css";

    require_once("common/head.php");

    ?>
    <header class="header-carte">
        <?php
        $titrePage = "la carte";
        require_once("common/header.php");
        ?>

    </header>
    <section>
        <h1>Menu</h1>

        <?php


        $tab = $_SESSION["card"];

        $tab = isset($_SESSION["card"]) ? $_SESSION["card"] : [];

        foreach ($tab as $key => $value) {
        
            foreach ($value as $keys => $values) {

                echo "<p>" . $values . "</p>";

            }

            echo "***";

        }



        ?>


        <p class="description">Ce menu s’est construit au fil des années,
            Par l’influence de la nature,
            Avec des plats intemporels qui sont une invitation à la promenade en montagne.</p>
        <p class="description">D’autres plats, plus jeunes, représentent la découverte de nouvelles randonnées,
            Des bords des lacs alpins jusqu’aux hauts sommets.</p>
        <p class="description">Derrière chaque produit, des hommes, des femmes, qui subliment notre paysage montagnard…
        </p>
        <p class="description">« Je veux offrir une cuisine technique mais que la technique disparaisse naturellement au
            profit de l’émotion »</p>
        <h3 class="signature">Arnaud Michant</h3>
        <p class="description">Le menu choisi est servi pour l’ensemble de la table</p>
        <h2>Les desserts de notre Cheffe pâtissière, Amélie Louise Martin</h2>
        <p class="dessert-p">Tarte tiède chocolat fumé
            Crème glacée au bois de nos Montagnes</p>
        <p class="dessert-p">Soufflé chaud parfumé à la racine de gentiane
            Zestes de citron vert
            Anglaise gentiane</p>
        <p class="dessert-p">Faisselle du Val d’Arly, à la réglisse, dans une fine coque
            Salade de fruits et légumes de saison</p>
        <p class="dessert-p">Glace au lait d’Alpage
            Marmelade d’orange, dans une fine lamelle de meringue Suisse</p>
    </section>
    <footer>
        <?php require_once("common/footer.php"); ?>
    </footer>


    <script src="../../public/js/responsiveMenu.js" async></script>
</body>

</html>