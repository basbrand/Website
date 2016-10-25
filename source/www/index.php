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
    <div class="layout">
      <div class="layout__cell layout__cell--main">
        <?php include 'landingpage/handshake.php'; ?>
        <?php include 'landingpage/invitation.php'; ?>
      </div>
      <?php include 'landingpage/introduction.php'; ?>
    </div>
    <?php //include 'landingpage/tools.php'; ?>
    <div class="layout">
      <div class="layout__cell layout__cell--main">
        <?php include 'testimonials/evean.php'; ?>
      </div>
      <div class="layout__cell layout__cell--aside">
        <?php include 'landingpage/contact.php'; ?>
      </div>
    </div>
    <?php include 'post-body.php'; ?>
  </body>
</html>
