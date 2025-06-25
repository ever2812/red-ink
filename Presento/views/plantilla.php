<?php
include("modulos/header.php");
?>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">RED-INK</h1>
            </a>
            <?php include("modulos/menu_nav.php"); ?>
            <!--
            <a class="btn-getstarted" href="index.html#about">Cotizar Servicio</a>
            -->


        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <?php include("modulos/inicio.php"); ?>
        <!-- Hero Section -->

        <!-- Clients Section -->
        <?php #include("modulos/clientes.php"); 
        ?>
        <!-- /Clients Section -->


        <!-- About Section -->
        <?php include("modulos/about.php"); ?>
        <!-- /About Section -->


        <!-- Stats Section -->
        <?php #include("modulos/indicadores.php"); 
        ?>
        <!-- /Stats Section -->


        <!-- Tabs Section -->
        <?php # include("modulos/tabs.php"); 
        ?>
        <!-- /Tabs Section -->


        <!-- Services Section -->
        <?php include("modulos/servicios.php"); ?>
        <!-- /Services Section -->

        <!-- Portfolio Section -->
        <?php #include("modulos/equipos.php"); 
        ?>
        <!-- /Portfolio Section -->

        <!-- Testimonials Section -->
        <?php #include("modulos/testimonios.php"); 
        ?>
        <!-- /Testimonials Section -->


        <!-- Pricing Section -->
        <?php # include("modulos/precios.php"); 
        ?>
        <!-- /Pricing Section -->


        <!-- Faq Section -->
        <?php # include("modulos/preguntas.php"); 
        ?>
        <!-- /Faq Section -->


        <!-- Team Section -->
        <?php # include("modulos/team.php"); 
        ?>
        <!-- /Team Section -->

        <!-- Contact Section -->
        <?php include("modulos/contact.php"); ?>


    </main>

    <!-- Footer  -->
    <?php include("modulos/footer.php"); ?>
    <!-- Footer  -->

    <!-- Scripts  -->
    <?php include("modulos/scripts.php"); ?>
    <!-- Scripts  -->

</body>

</html>