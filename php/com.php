
<html>
    <head>
        <meta charset = "UTF-8">
    </head>
    <body>
        <p>fichier php lu en données html du dossier php! <br><br>
            <!--Recuperation de la variable 'utilisateur' coté serveur en GET-->
            La variable recue depuis le client en get est : <?php  echo $_GET['utilisateur']; ?> ! <br>
        La variable recue depuis le client en post est : <?php  echo $_POST['post_user']; ?> ! 
        </p>
    </body>
</html>
