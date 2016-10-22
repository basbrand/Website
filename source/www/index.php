<?php include 'include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <?php include 'head.php'; ?>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>p-landingpage">
    <section class="panel is-active">
      <?php include 'landingpage/handshake.php'; ?>
      <?php include 'landingpage/invitation.php'; ?>
      <?php include 'testimonials/eigenhuis.php'; ?>
      <?php include 'landingpage/introduction.php'; ?>
    </section>
    <?php //include 'landingpage/tools.php'; ?>
    <section class="layout">
      <div class="layout__cell">
        <?php include 'testimonials/evean.php'; ?>
      </div>
      <?php include 'landingpage/contact.php'; ?>
    </section>
  </body>
</html>
