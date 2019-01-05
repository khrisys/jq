<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Evenements</title>
        <style type="text/css">
            div { width: 400px; height: 300px; float: left; margin: 5px; }
            #premier { background-color: #F6E497; }
            #troisieme { background-color: #CAF1EC; }
            #quatrieme { background-color: #F1DBCA; }
        </style>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <!--<script src="/jquery/js/jquery.js"></script>-->
        <script src="./jquery/css/jquery-ui.js"></script>
        <link rel="stylesheet" src = "/jquery/css/jquery-ui.css">
    </head>
    <body>


        <button id="majPremier">Mise à jour première zone</button>
        <button id="majDeuxieme">Mise à jour deuxième zone</button><br /><br />
        <div id="premier">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>

        <div id="deuxieme">
            <img src="image1.jpg">
        </div>

        <div id="troisieme">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div id="quatrieme">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
        </div>

        <div id="cinquieme">
            <p id="cinq" >Hello </p>
        </div>


        <script>
            $(document).ready(function () {
                $(function () {
                    $('#majPremier').click(function () {
                        $('#premier').on('maj1.html', function () {
                            alert('La première zone a été mise à jour');
                        });
                    });

                    $('#majDeuxieme').click(function () {
                        $('#deuxieme').load('maj2.html', function () {
                            alert('La deuxième zone a été mise à jour');
                        });
                    });
                });


                // ECOUTER UN EVENT (COMME UN LOSTENER)
                $('#quatrieme').on('click', function () {
                    alert('Ce code fonctionne !');
                });



                // EXÉCUTER DIFFÉRENTES FONCTIONS À PARTIR D'UN MÊME TYPE D'ÉVÈNEMENT.
                // POUR PALIER A L IMPOSSIBILITE DE FAIRE UNE FONCTION NOMEE POUR UN EVENT
                $('#troisieme').on('click.nom', function () {
                    alert('Premier évènement');
                });

                $('#troisieme').on('click.prenom', function () {
                    alert('Second évènement');
                });

                //LE TRIGGER LANCE LE 1ER EVENEMENT CAR C'EST LE MEME ESPACE DE NOM DEFINI DANS LA FONCTION TRIGGER ET LA FONCTION ON DU 1ER EVENT.
                //PAR CONTRE, LES EVENEMENTS CLICK DE L'ID "TROISIEME" RESTENT EXECUTÉS LORSQU'ON CLIC DESSUS!
                $('#troisieme').trigger('click.nom'); // exécute le clic, MAIS ne lance que la première alerte !


                // DELEGATION D EVENEMENT
                //CONSTRUCTION DYNAMIQUE D UNE LISTE DE 5 CHECKBOXES
                var checkbox, line = "";
                for (var i = 0; i < 5; i++) {
                    checkbox = 'id="chkbx" type="checkbox" ';
                    line += "<input id= cinq" + [i] + " " + checkbox + "/> Ligne " + [i] + "</br>";
                }
                $("#cinq").html(line);
                // FONCTION DE DELEGATION PERMETTANT DE METTRE UN EVENT SUR DES INPUT CREES DYNAMIQUEMENT
                $("#cinq").on('click', 'input', function () {
                        alert("clic sur une chkbx créée dynamiquement.")
                });


            });
        </script>

        <?php
        // put your code here
        ?>
    </body>
</html>
