<!DOCTYPE html>
<html lang="fr">
  <head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SS5WXF69MY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SS5WXF69MY');
</script>
  <?php include('./includes/head-links.php'); ?>

    <!-- Titre et description -->
    <title>
      Allo Taxi Sud Alpilles | Taxi 7j/7 dans les Alpilles & environs
    </title>
    <meta
      name="description"
      content="Allo Taxi Sud Alpilles vous accompagne 7j/7 dans tous vos déplacements à Tarascon, Fontvieille, Saint-Étienne-du-Grès et dans les Alpilles. Taxis, transferts aéroports, gares, tourisme, évènements, transport médical." />
    <meta
      name="keywords"
      content="taxi Tarascon, taxi Fontvieille, taxi Saint-Étienne-du-Grès, taxi Alpilles, VTC Alpilles, transfert aéroport, taxi gare, transport médical, taxi tourisme, Allo Taxi Sud Alpilles" />
    <link rel="canonical" href="https://allo-taxi-sud-alpilles.com/" />

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta
    property="og:title"
    content="Allo Taxi Sud Alpilles | Taxi 7j/7 Tarascon, Fontvieille, Saint-Étienne-du-Grès et les Alpilles" />
    <meta
    property="og:description"
    content="Transport de qualité 24h/24 et 7j/7 sur réservation dans les Alpilles : Taxis, transferts aéroports, gares, tourisme, évènements, transport médical." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://allo-taxi-sud-alpilles.com/" />

    <!-- Twitter Card -->
    <meta
      name="twitter:title"
      content="Allo Taxi Sud Alpilles | Votre taxi de confiance 7j/7" />
    <meta
      name="twitter:description"
      content="Besoin d’un taxi dans les Alpilles ? Contactez Allo Taxi Sud Alpilles : service de transport fiable, ponctuel et confortable." />

  </head>
  <body id="home">
  <?php include('./includes/header.php'); ?>

    <main role="main">

    <?php include('./includes/homepage/hero.php'); ?>
    <?php include('./includes/homepage/services.php'); ?>
    <?php include('./includes/homepage/reservation.php'); ?>
    <?php include('./includes/homepage/a-propos.php'); ?>
    <?php include('./includes/homepage/zones.php'); ?>
    <?php include('./includes/homepage/nos-vehicules.php'); ?>
    <?php include('./includes/homepage/temoignages.php'); ?>
    <?php include('./includes/homepage/actualites-blog.php'); ?>
    <?php include('./includes/homepage/faq.php'); ?>
    
    </main>
<?php 
include('./includes/footer.php'); 
include('./includes/buttons-footer.php'); 
?>
    <script src="./assets/js/index.js"></script>
  </body>
</html>
