<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BetaGouv - Signalement</title>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />

</head>
<body>
<header class="mb-4">
    <div class="container">
        <div class="row">
            <div id="logo-me-title-wrapper">
                <img src="assets/images/ministere-economie.png"
                     alt="logo Ministère de l'Économie" class="m-3 mr-5" id="logo-DGCCRF"/>

                <h1 class="align-middle text-center">Consommateurs, signalez une anomalie.</h1>
            </div>
            <!-- <img src="<?php echo base_url() . 'assets/images/DGCCRF2011_184x76.jpg'; ?>" alt="logo DGCCRF" class="m-3" id="logo-me" />-->
            <div class="header__ribbon">
                BETA
            </div>
        </div>
    </div>

</header>
<div class="container mb-5">
    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-sm-12 pb-3">
            <p class="mb-2">Vous pouvez <span class="font-weight-bold">déposer ici un signalement afin d’informer la DGCCRF</span> <span class="font-italic">(Direction Générale de la Concurrence, Consommation et Répression des Fraudes).</span> </p>
            <p class="mb-2"> <span class="font-weight-bold">Vous ne serez pas contacté à la suite de votre signalement.</span> Il ne déclenchera pas à lui seul un contrôle de l’établissement.</p>
            <p>Afin de corriger lui-même l’anomalie, le professionnel pourra aussi consulter  <span class="font-weight-bold">votre signalement anonymisé.</span></p>


            <form method="post" action="./">
                <div class="form-group">
                    <label for="place-category">Quel type d'établissement souhaitez vous signaler ? </label>
                    <select class="form-control form-control-lg chosen-single-select-nosearch" id="place-category" name="place-category" data-placeholder="Choisissez ...">
                        <option selected></option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Quel type d'anomalie avez vous constaté ? </label>
                    <select class="form-control form-control-lg chosen-single-select-nosearch" id="type" name="type" data-placeholder="Choisissez ...">
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="anomalies">Précisez</label>
                    <select class= "form-control form-control-lg chosen-single-select" id="anomalies" name="anomalies"
                            data-placeholder="Choisissez une anomalie ...">
                        <option selected></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="place">Etablissement</label>
                    <input class="form-control" id="place" placeholder="Nom du commerçant ...">
                </div>
                <div class="form-group mb-4">
                    <label for="place-address">Adresse</label>
                    <input class="form-control" id="place-address" placeholder="numéro, rue et ville ...">
                </div>

                <div class="form-group mb-4">
                    <label for="picture">Ajouter une photo</label>
                    <input type="file" class="form-control-file" id="picture">
                </div>
                <div class="form-grou mb-4">
                    <label for="description">Précision de votre signalement</label>
                    <textarea class="form-control" id="description" rows="3" maxlength="200" placeholder="200 caractères maximum"></textarea>
                </div>
                <p class="font-weight-bold">Votre identité ne sera pas indiquée au professionnel.</p>
                <div class="form-group">
                    <label for="name">Vos nom et prénom</label>
                    <input class="form-control" id="name" placeholder="Prénom Nom ...">
                </div>
                <div class="form-group mb-5">
                    <label for="email">Votre email </label>
                    <input type="email" class="form-control" id="email" placeholder="votreadresse@mail.fr">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Signaler</button>
                      <p class="font-italic text-right"><small>Projet en cours d'expérimentation par la DGCCRF & Beta.Gouv</small></p>
            </form>
        </div>
    </div>
</div>
<script language="JavaScript">window.anomalies_array = <?php echo $anomalies_json; ?></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>