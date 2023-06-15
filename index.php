<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>gestion des notes</title>
</head>

<body>
    <?php
    include 'page/header.php';
    ?>

    <form action="./page/login.php" method="post" class="form" id="form">
        <div class="field email">
            <div class="icon"></div>
            <input class="input" id="email" type="email" name="mail" placeholder="Email" autocomplete="off">
        </div>

        <div class="field password">
            <div class="icon"></div>
            <input class="input" id="password" type="password" name="pass" value=" <?php echo (isset($_GET['email'])) ? $_GET['email'] : ""; ?>" placeholder="Password">
        </div>

        <button class="button" name="submit" id="submit">Connexion</button>
        <p class="message">Non enregistré? <a href="page/inscrit_directeur.php">Creer un compte</a></p>

        <div class="side-top-bottom"></div>
        <div class="side-left-right"></div>

        <!-- <small>Fill in the form</small> -->
    </form>


    <script src="script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js"></script>
    <script src=" style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
</body>
<?php
include 'page/footer.php';
?>

</html>