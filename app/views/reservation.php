<?php
session_start();
require_once("../models/DatabaseConnection.php");

$database = new DatabaseConnection();

$database->connection();

$title = "Réservation";
$pageName = basename($_SERVER['PHP_SELF'], '.php');
$commonCss = "../../public/css/common/commonCss.css";
$headerCss = "../../public/css/common/header.css";
$responsiveMenuCss = "../../public/css/common/responsiveMenu.css";
$footerCss = "../../public/css/common/footer.css";
$actualPageCss = "../../public/css/$pageName.css";

require_once("common/head.php");
?>

<body>
    <script>
        $(document).ready(function () {

            $("#date").change(function (event) {

                var parametre = $("#date").val();

                $.get("../routes/Get.php", {

                    q: parametre

                }, function (data) {

                    $("#resp").html(data);


                });

            });

        });
    </script>

    <?php


    ?>

    <header class="header-reservation">
        <?php
        $titrePage = "reservation";
        require_once("common/header.php");
        ?>

    </header>
    <section>
        <h2>Chère Madame, Cher Monsieur,</h2>
        <p>Une tenue "décontractée chic" sera demandée (pas de short ou de tongs, ni de tee-shirt pour les messieurs).
        </p>
        <p>Nous vous remercions de nous recontacter la veille de votre réservation afin de bien confirmer votre venue.
        </p>
        <p>Sans cette confirmation, la table ne pourra être garantie le jour même.</p>
        <p>Au plaisir de vous accueillir dans notre restaurant.</p>
        
        <?php if(isset($_SESSION['user'])) { ?>
        
        <div class="form-container">

            <form id="reservation-form" action="../routes/reservation-treatment.php?id=<?php echo $_GET["id"]; ?>"
                method="post">

                <div class="identity">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="service">
                    <label for="service">Le service</label>
                    <select id="service" name="service" required>
                        <option value="lunch">Déjeuner</option>
                        <option value="dinner">Dîner</option>
                    </select>
                </div>
                <div class="nb-guests">
                    <label for="nb-guests">Nombre d'invités</label>
                    <select id="nb-guests" name="nb-guests" placeholder="Sélectionnez le nombre d'invités" required>
                        <option value="1">1 personne</option>
                        <option value="2">2 personnes</option>
                        <option value="3">3 personnes</option>
                        <option value="4">4 personnes</option>
                        <option value="5">5 personnes</option>
                        <option value="6">6 personnes</option>
                    </select>
                </div>
                <div class="date">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date-res" onchange="choisirDate()" required>
                    <b id="resp"></b>
                    <script>

                        $("form").submit(function (e) {

                            var respText = $("#resp").text();
                            var textContent = "Table indisponible";

                            if ($.trim(respText) == $.trim(textContent)) {
                                return false;
                            }
                        })

                    </script>
                </div>
                <div class="hour">
                    <label for="hour">Horaire</label>
                    <select id="hour" name="hour-res"></select>
                </div>
                <div class="allergies">
                    <label for="allergies">Allergies </label>
                    <textarea id="allergies" name="allergies"></textarea>
                </div>

                <button type="submit" value="Réserver" id="submit-btn" name="submit">reserver</button>
            </form>
            
            <?php } else { ?>
                <p class="message-alerte">Vous devez être connecté pour réserver une table.</p>
                <p class="inscription">Vous n'avez pas de compte ? <a class="register" href="inscription.php">Inscrivez-vous</a>
            <?php }?>

        </div>
    </section>
    <footer class="footer">
        <?php require_once("common/footer.php"); ?>
    </footer>

    <script src="../../public/js/responsiveMenu.js" async></script>
    <script src="../../public/js/horairesReservation.js" async></script>
</body>