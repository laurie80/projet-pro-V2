<?php
require "../Controllers/upload_galery_controller.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/img/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-upload_galery.css">
    <title>Gestion/preview des galeries</title>
</head>

<body class="body">

    <header class="header">
        <nav>
            <div class="backdrop"></div>
            <ul>
                <li><a class="navLink nav-link btn text-navbar" href="../index.php">Accueil site</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="preview_galery.php">Gestion galeries</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="upload_galery.php?action=disconnect">Deconnexion</a></li>
            </ul>
        </nav>

        <button class="menu">Menu</button>
        <div>
            <img id="logoHeader" src="../image/logo-remove-in2.png">
            <p class="titleHeader">Espace professionnel</p>
        </div>
    </header>

    <div class="row align-content-center justify-content-center" id="form">

        <p class="title col-lg-8 col-sm-10 text-center">Zone de téléchargements</p>

        <form class="col-10 d-flex flex-wrap align-content-center justify-content-center m-3" action="upload_galery.php" method="post" enctype="multipart/form-data">

            <?php
            if (isset($_SESSION["uploadImageMessage"])) {
                if ($_SESSION["uploadImageMessage"] == "error") {
            ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
                        <p>Erreur lors du téléchargement de la photo, veuillez recommencer.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                    unset($_SESSION["uploadImageMessage"]);
                }
            }
            ?>

            <div class="formPreviewPicture col-xl-10 col-lg-10 col-md-10 col-sm-12 mb-4 text-center">

                <div>
                    <label class="titleGalery col-12" for="imagePreview">Preview galerie photos</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="video d-flex align-content-center justify-content-center">
                    <img class="align-self-center" id="imgPreview" src="">
                </div>
                <div>
                    <label class="label" for="namePicture">Nom de l'image :</label>
                    <input id="namePicture" name="namePicture" type="text">
                </div>
                <div>
                    <button type="submit" name="uploadButtonPicture" class="uploadButtonPicture">Envoyer</button>
                </div>
            </div>

        </form>

        <form class="col-10 d-flex flex-wrap align-content-center justify-content-center m-3" action="upload_galery.php" method="post" enctype="multipart/form-data">


            <?php
            if (isset($_SESSION["uploadVideoMessage"])) {
                if ($_SESSION["uploadVideoMessage"] == "error") {
            ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
                        <p>Erreur lors du téléchargement de la vidéo, veuillez recommencer.</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                    unset($_SESSION["uploadVideoMessage"]);
                }
            }
            ?>

            <div class="formPreviewVideo col-xl-10 col-lg-10 col-md-10 col-sm-12 text-center">
                <div>
                    <label class="titleGalery col-12" for="videoPreview">Preview galerie videos</label>
                    <input type="file" accept="video/*" name="fileVideoToUpload" id="fileVideoToUpload">
                </div>
                <div class="d-flex align-content-center justify-content-center">
                    <video class="align-self-center" id="vdPreview" src="" autoplay muted loop></video>
                </div>
                <div>
                    <label class="label" for="nameVideo">Nom de la vidéo :</label>
                    <input id="nameVideo" name="nameVideo" type="text">
                </div>
                <div>
                    <button type="submit" name="uploadButtonPicture" class="uploadButtonPicture">Envoyer</button>
                </div>
            </div>

        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="../assets/js/script-galery.js"></script>

</body>

</html>