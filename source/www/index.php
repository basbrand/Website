<?php
$lt_small_handheld = "(max-width: 319px)";
$gt_small_handheld = "(min-width: 320px)";

$lt_medium_handheld = "(max-width: 519px)";
$gt_medium_handheld = "(min-width: 520px)";

$lt_large_handheld = "(max-width: 767px)";
$gt_large_handheld = "(min-width: 768px)";

$lt_small_desktop = "(max-width: 1023px)";
$gt_small_desktop = "(min-width: 1024px)";

$lt_medium_desktop = "(max-width: 1439px)";
$gt_medium_desktop = "(min-width: 1440px)";

$lt_large_desktop = "(max-width: 1599px)";
$gt_large_desktop = "(min-width: 1600px)";

$portrait = "(orientation: portrait)";
$landscape = "(orientation: landscape)";
$high_res = "(-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi)";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Brickson</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/styles/screen.css?id=1474118468489">
  <script src="https://use.typekit.net/zaf1yku.js"></script>
  <script src="/javascript/html5shiv.min.js"></script>
  <script src="/javascript/jquery-1.11.3.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/javascript/picturefill.min.js" async></script>
  <script src="/javascript/pf.intrinsic.min.js" async></script>
  <base href="/"><style type="text/css">@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/9749f0/00000000000000000001008f/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5) format("woff2");font-weight:500;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/8a5494/000000000000000000013365/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4) format("woff2");font-weight:400;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/75f41e/000000000000000000010096/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3) format("woff2");font-weight:300;font-style:normal;}@font-face{font-family:merriweather;src:url(https://fonts.typekit.net/af/f20d56/000000000000000000014a3e/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4) format("woff2");font-weight:400;font-style:normal;}@font-face{font-family:merriweather;src:url(https://fonts.typekit.net/af/f87f0c/000000000000000000014a3d/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4) format("woff2");font-weight:400;font-style:italic;}</style>
</head>
  <body class="ddebug-layout landingpage">
    <section class="panel is-active">
      <?php include 'landingpage/handshake.php'; ?>
      <?php include 'landingpage/invitation.php'; ?>
      <?php include 'testimonials/eigenhuis.php'; ?>
      <?php include 'landingpage/introduction.php'; ?>
    </section>
    <?php include 'landingpage/tools.php'; ?>
    <section>
      <?php include 'testimonials/evean.php'; ?>
      <?php include 'landingpage/contact.php'; ?>
    </section>
  </body>
</html>
