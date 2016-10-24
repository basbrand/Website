<?php include 'include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>Brickson</title>
    <meta name="description" content="Brickson is er voor organisaties die de volgende stap in digitaal willen maken. Werken met Brickson betekent samen ontdekken, bedenken, ontwerpen of bouwen."/>
    <?php include 'head.php'; ?>
  </head>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?> landingpage">
    <?php include 'landingpage/handshake.php'; ?>
    <?php include 'landingpage/invitation.php'; ?>
    <?php // include 'testimonials/eigenhuis.php'; ?>
    <?php include 'landingpage/introduction.php'; ?>
    <?php //include 'landingpage/tools.php'; ?>
    <?php include 'testimonials/evean.php'; ?>
    <?php include 'landingpage/contact.php'; ?>
  </body>
</html>
