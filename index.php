<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajax</title>
        <style type="text/css">
            div { width: 400px; height: 300px; float: left; margin: 5px; }
            #p { background-color: #F6E497; }
        </style>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <!--<script src="/jquery/js/jquery.js"></script>-->
        <script src="/jquery/css/jquery-ui.js"></script>
        <link rel="stylesheet" src = "/jquery/css/jquery-ui.css">
    </head>
    <body>


        <div>
            <input type="button" id="btn" value="appel ajax" />
            <p id="p"></p>
        </div>


        <script>
            $(document).ready(function () {
                $("#btn").click(function () {
                    var nom_user ="roger";
                    // Utilisons $.ajax pour créer une instance de XmlHttpRequest
                    $.ajax({
                        url: './php/com.php', // La ressource ciblée
                        type: 'GET', // Le type de la requête HTTP.
                        dataType: 'html', // Le type de données à recevoir, ici, du HTML.
                        data: 
                            'utilisateur=' + nom_user // Avec ceci, du côté serveur,$_GET['utilisateur']contiendra la valeur de la variable nom_user. 
                        ,
                        success: function (code_html, statut) { // code_html contient le HTML renvoyé
                            $(code_html).appendTo("#p");                         
                        },
                        error: function (resultat, statut, erreur) {

                        },
                        complete: function (resultat, statut) {

                        }
                    });

                });

            });

        </script>


        <?php
        //echo 'test';
        ?>
    </body>
</html>
