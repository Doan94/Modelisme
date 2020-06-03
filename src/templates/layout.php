<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Sudauto</title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">

    <!-- Feuilles de style de l'application -->

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- En-tête commune de l'application -->
    <header>
        <div class='logotitre'>
            <img class='logo' src='./images/logoSa.png'>
            <h1 class="namesite">SUDAUTO</h1>
        </div>

    </header>



    <main>
        <!-- Chargement du template PHTML spécifié par le programme PHP -->
        <?php include 'templates/'.$template.'.php' ?>
    </main>

    <!-- Pied de page commun de l'application -->
    <footer class="blogfooter">
        <p class="titrefooter">Notre Sîte:</p>
        <a href="https//www.sudauto.com"><img class='logofooter' src='./images/logoSa.png'/></a>
    </footer>
        <!-- jQuery Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>