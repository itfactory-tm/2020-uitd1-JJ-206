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

</head>
<body id="submit">
<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="index.html#page-top">Start Bootstrap</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#about">About</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#services">Services</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#contact">Contact</a>
        </li>
    </ul>
</nav>

<h1>Bedankt voor uw vraag!</h1>
<p>We gaan met uw vraag van slag. Hieronder kan je nog eens nalezen wat je hebt ingestuurd.</p>
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

    if (isset($_POST['nummer']) && $_POST['nummer'] != "") {
        echo "<li><p> Telefoonnummer: " . $_POST['nummer'] . "</p></li>";
    } else {
        echo "<li><p> Er werdt geen Telefoonnummer ingevuld. </p></li>";
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

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
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