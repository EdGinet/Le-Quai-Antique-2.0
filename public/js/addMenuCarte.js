function send_data(element) {

    let contenu_div = element.textContent;

    alert(element.innerText);

    let stringStorage = sessionStorage.getItem("array");
    let splitContent = sessionStorage.getItem("array").split(";");
    
    for (let i = 0; i < splitContent.length; i++) {
        
        let stockMenu = splitContent[i];

        if ($.trim(contenu_div) == $.trim(stockMenu)) {
            splitContent.splice(i, 1);
        }
    }

    let arraySeparator = splitContent.toString();
    
    sessionStorage.setItem("array", arraySeparator);


    $.get("../../app/routes/Carte-route.php", {

        menu: contenu_div

    }, function (data) {

        $("#resp").html(data);
        

    });
    element.remove();
}

$(document).ready(function () {

    let tableau = [];

    $("form").submit(function (e) {

        let titre = $("#titre-menu").val();
        let descr = $("#description-menu").val();
        let prix = $("#prix").val();

        let distinct_titre = "#" + titre;
        let distinct_descr = "#" + descr;
        let distinct_prix = "#" + prix;

        //alert(titre + " " + descr + " " + prix);

        sessionStorage.setItem(distinct_titre, titre);
        sessionStorage.setItem(distinct_descr, descr);
        sessionStorage.setItem(distinct_prix, prix);

        tableau.push(distinct_titre);
        tableau.push(distinct_descr);
        tableau.push(distinct_prix);

        if (sessionStorage.getItem("array") == null) {

            //alert("not found");
            sessionStorage.setItem("array", tableau);


        } else {

            let array_item = sessionStorage.getItem("array");
            let string_concat = array_item + ";" + tableau[0] + tableau[1] + tableau[2];

            sessionStorage.setItem("array", string_concat);

        }

    });

    let splitContent = sessionStorage.getItem("array").split(";");

    for (let i = 0; i < splitContent.length; i++) {

        let p = document.createElement("p");
        p.innerText = splitContent[i] + " ";
        $(".menus-container").append(p);
        $("p").addClass("added-menu");

        $("p").attr("onClick", "send_data(this)");
        

    }

});
