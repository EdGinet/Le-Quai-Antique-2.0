<?php 
session_start();
$title = "";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php"); 
?>

<body>
    <header class="header-accueil">
        <?php
        $titrePage = "le quai antique";
        require_once("common/header.php");
        ?>
    </header>

    <section class="presentation">
        <h1>Restaurant gastronomique à Chambéry</h1>
        <h2>Restaurant 3 étoiles Michelin, en Savoie</h2>
        <h3>Une scène naturelle</h3>
        <p class="description-presentation">Dans son écrin de bois, <strong>le restaurant étoilé Le Quai
                Antique</strong> en
            Savoie ancre son rapport étroit avec la nature. Ici, c’est elle qui donne le ton, jusque dans le décor :
            du bois
            brut du sol au plafond, des matières naturelles et puis ces grandes baies vitrées qui laissent entrer le
            soleil,
            ouvertes sur les jardins et les sommets. Apaisante, sans ostentation ni démonstration, la décoration du
            restaurant d’Arnaud Michant offre le premier rôle à la gastronomie, dans un répertoire saisonnier varié,
            riche
            d’émotions et de sincérité.</p>
        <div class="buttons">
            <a href="carte.php">Découvrir notre carte</a>

            <?php if (isset($_SESSION['user'])) { ?>
            <a href="reservation.php?id=<?php echo $_SESSION['ID_Personne']; ?>">Réserver une table</a>

            <?php } else { ?>
                <a href="reservation.php">Réserver une table</a>
            <?php } ?>
        </div>
    </section>
    <div class="kitchen-picture">
        <img src="../../public/images/kitchen.jpg" alt="cuisine du Quai Antique" />
    </div>
    <section class="cuisine">
        <div class="description-cuisine">
            <h2>Une cuisine d’auteur et d’émotions</h2>
            <p>Amoureux fou de son terroir alpin, le chef Arnaud Michant y trouve son inspiration. Les sommets où
                fleurissent le cynorhodon, les mûres sauvages et la gentiane, les bois où pointent les cèpes et
                giroles, les
                plaines maraichères jusqu’au lac d’Aiguebelette, royaume de la féra et de l’omble chevalier : les
                Alpes sont
                un marché coloré, animé par des artisans passionnés.</p>
            <br />
            <p>De cette rencontre entre la toute-puissance de la nature et le savoir-faire des hommes est née
                l’évidence
                d’une cuisine de goûts authentiques.</p>
            <br />
            <p>Sans ostentation, comme le lieu, la signature du chef 3 étoiles Michelin Arnaud Michant s’affranchit
                du
                superflu pour aller à l’essentiel : la délicatesse d’un biscuit de brochet et lotte du lac, la
                tendreté d’un
                filet de chevreuil. En premier de cordée, le chef emmène ses convives en promenade à la Méline ou en
                randonnée en montagne, là où les saveurs et parfums révèlent l’incroyable potentiel aromatique du
                terroir
                savoyard.</p>
            <br />
            <p>A la fois pure et sensible, directe mais subtile, méthodique mais surtout pas complexe, la cuisine
                gastronomique d’Arnaud Michant fait disparaître la technique au profit de l’émotion. Pas de
                démonstration,
                du plaisir à l’état … naturel.</p>
            <br />
            <?php if (isset($_SESSION['user'])) { ?>
            <a href="reservation.php?id=<?php echo $_SESSION['ID_Personne']; ?>">Réserver une table</a>

            <?php } else { ?>
                <a href="reservation.php">Réserver une table</a>
            <?php } ?>
        </div>
        <div class="dessert">
            <img src="../../public/images/dessert-chocolate.jpg" alt="dessert de chocolat badiane" />
        </div>
    </section>
    <div class="slider">
        <img src="../../public/images/_aet2532.jpg" alt="img1" class="image-slider active" />
        <img src="../../public/images/_aet9282.jpg" alt="img2" class="image-slider" />
        <img src="../../public/images/_aet9335.jpg" alt="img3" class="image-slider" />
        <img src="../../public/images/_aet3279.jpg" alt="img4" class="image-slider" />
        <img src="../../public/images/_aet4619.jpg" alt="img5" class="image-slider" />
        <div class="next">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="previous">
            <i class="fa-solid fa-chevron-left"></i>
        </div>

    </div>

    </section>
    <section class="vin">
        <div class="description-vin">
            <h2>La cave du Quai</h2>
            <p>Prestigieuse, pleine de coups de cœur, de trouvailles et de conviction, mais surtout hétéroclite, la
                cave du
                Quai Antique accueille près de 1200 références de France et d’ailleurs, partout où les vignerons
                travaillent
                avec passion. Si les grandes Maisons et les belles étiquettes, Petrus, Angelus et Romanée Conti,
                sont là,
                les vins de Savoie sont la clé de voûte d’une carte ancrée dans son terroir.</p>
            <br />
            <p>Rouge, blanc et même effervescents, la Savoie en fait boire de toutes les couleurs : les
                extraordinaires
                Mondeuses vieux millésimes de Michel Grisard, les Apremont, Roussette et Chignin-Bergeron. Le
                territoire
                décline ici ses cépages, jusqu’aux plus anciens avec le Gringet ou le Persan, dans une jolie palette
                qui
                fait redécouvrir le superbe potentiel du vignoble savoyard.</p>
        </div>
        <div>
            <img src="../../public/images/cave-a-vin.jpg" alt="la cave du Quai" />
        </div>
    </section>
    <section class="infos">
        <div>
            <img src="../../public/images/_d4s5941.jpg" alt="plat du Quai" />
        </div>
        <div class="description-infos">
            <h2>Informations pratiques</h2>
            <p>Le restaurant 3 étoiles Michelin "La Quai Antique" à Chambéry est ouvert au dîner le lundi, mardi,
                mercredi,
                jeudi, vendredi, samedi et dimanche ; et au déjeuner le samedi et dimanche.</p>
            <br />
            <p>Une tenue "décontractée chic" est demandée</p>
            <br />
            <p>Réservation : +33 1 23 45 67 89 (pour toutes réservations de grandes tables (à partir de 7
                personnes), merci
                d'envoyer un mail à marie@lequaiantique.com)</p>
            <br />
            <a href="reservation.php">Réserver une table</a>
        </div>
    </section>
    <footer>
        <?php require_once("common/footer.php"); ?>

    </footer>

    <script src="../../public/js/carousel.js" async></script>
    <script src="../../public/js/responsiveMenu.js" async></script>
</body>

</html>