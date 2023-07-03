<?php
$title = "Contact";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");

?>

<header class="header-contact">

    <?php
    $titrePage = "contact";
    require_once("common/header.php");
    ?>

</header>

<section>
    <div class="infos-panel">
        <div class="lunch">
            <h2>Le déjeuner</h2>
            <p>Samedi, dimanche : 12:00-14:30</p>
        </div>
        <div class="contact-us">
            <h2>Nous contacter</h2>
            <p>56 rue de Montagny</p>
            <p>73000 Chambéry</p>
            <p>+33 1 23 45 67 89</p>
            <p>contact@quaiantique.com</p>
        </div>
        <div class="dinner">
            <h2>Le dîner</h2>
            <p>Tous les jours : 19:00-22:00</p>
        </div>
    </div>
    <div class="contact-form-panel">
        <div class="content">
            <h3>Ecrivez-nous</h3>
            <p>Une question ? Nous vous répondons</p>
            <form action="send-message.php" method="post">
                <input type="text" id="name" name="nom" placeholder="Nom" required>
                <br />
                <input type="email" id="email" name="email" placeholder="Email" required>
                <br />
                <textarea id="message" name="message" rows="10" cols="50" placeholder="Message" required></textarea>
                <br />
                <button type="submit" value="envoyer" name="envoyer" id="send-btn">envoyer</button>
            </form>
        </div>
        <div class="block-image">
            <img src="../../public/images/passion-coucou.jpeg" alt="passion-coucou" />
        </div>
    </div>
</section>
<footer class="footer">
    <?php require_once("common/footer.php"); ?>
</footer>
<script src="../../public/js/responsiveMenu.js" async></script>