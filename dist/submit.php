<!DOCTYPE html>
<html lang="nl">

<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FormulierVerwerking</title>

    <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
    <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

</head>
<body id="submit">
<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="index.html#page-top">Lumios <img src="img/LUMIOS.svg" alt="Lumios Logo" height="50" width="auto"></a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#page-top"><span class="material-icons">
                        home
                    </span> Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#about"><span class="material-icons">
                        menu_book
                    </span> Over Lumios</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#services"><span class="material-icons">
                        account_box
                    </span> Team</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#portfolio"><span class="material-icons">
                        perm_media
                    </span> Projecten</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#contact"><span class="material-icons">
                        question_answer
                    </span> Contact</a>
        </li>
    </ul>
</nav>

<h1>Bedankt voor uw vraag!</h1>
<p>We gaan uw vraag bekijken. Hieronder kan je nog eens nalezen wat je hebt ingestuurd.</p>
<ul>
    <?php
    $missing = FALSE;
        if (isset($_POST['name']) && $_POST['name'] != "") {
			echo "<li><p> Naam: " . $_POST['name'] . "</p></li>";
        } else {
            $missing = TRUE;
            echo "<li><p> Er werdt geen naam ingevuld. </p></li>";
        }

    if (isset($_POST['mail']) && $_POST['mail'] != "") {
        echo "<li><p> Email: " . $_POST['mail'] . "</p></li>";
    } else {
        $missing = TRUE;
        echo "<li><p> Er werdt geen Email ingevuld. </p></li>";
    }

    if (isset($_POST['datum']) && $_POST['datum'] != "") {
        echo "<li><p> Geboortedatum: " . $_POST['datum'] . "</p></li>";
    } else {
        echo "<li><p> Er werdt geen Geboortedatum ingevuld. </p></li>";
    }

    if (isset($_POST['feedback']) && $_POST['feedback'] != "") {
        echo "<li><p> Uw feedback: " . $_POST['feedback'] . "</p></li>";
    } else {
        $missing = TRUE;
        echo "<li><p> Er werdt geen feedback ingevuld. </p></li></ul>";
    }
    if ($missing) {
        echo "<p>Er is een van de required velden omzeild en niet ingevuld. ga <a href='index.html#contact'>terug naar het Formulier</a>en vul deze op een normale, correcte manier in.</p>";
    } else {

    }
    ?>
</ul>



<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3 bg-grey" href="https://www.facebook.com/Lumios-107159604269991">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3 bg-grey" href="https://twitter.com/Lumios11">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white bg-grey" href="https://github.com/itfactory-tm/2020-uitd1-JJ-206">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Lumios 2020</p>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="index.html#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/stylish-portfolio.min.js"></script>
</body>
</html>