<?php
require "../Controllers/modify_files_video_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-modify_files_video.css">
    <title>Modification du nom de fichier</title>
</head>

<body class="body">

    <header class="header">
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <p class="title text-center">Veuillez modifier le nom de votre fichier</p>

    <?php
    var_dump($_SESSION);
    if (isset($_SESSION["updateVideoName"])) {
        if ($_SESSION["updateVideoName"] == "error") {
    ?>
            <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
                <p>Erreur lors de la modification du nom de la vidéo, veuillez réessayer.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
            unset($_SESSION["updateVideoName"]);
        }
    }
    ?>

    <!-- AFFICHAGE DE LA VIDEO SELECTIONNE, DE SON NOM ACTUEL ET DU CHAMP DE MOFICATION -->

    <div class="mx-auto">
        <div class="text-center">
            <video class="boxVideos" src="../uploadVideo/<?= $informationsVideo["video_name"] . $informationsVideo["type_extension"] ?>" autoplay muted loop></video>
        </div>
        <div class="infosFiles">
            <ul>
                <li>Nom de la vidéo :<?= $informationsVideo["video_title"] ?></li>
            </ul>
        </div>
        <form action="modify_files_video.php" method="POST">
            <div class="text-center">
                <label class="label" for="newNameFile">Nouveau nom de la vidéo :</label>
                <input id="newNameFile" name="newNameFile" type="text">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="preview_galery.php"><button type="button" name="returnButtonFile" class="returnButtonFile btn btn-danger m-1">Annuler</button><a>
                        <button type="submit" name="validateButtonFile" class="validateButtonFile btn btn-info m-1" value="<?= $id ?>">Valider</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="../assets/js/script-modify_files_video.js"></script>

</body>

</html>