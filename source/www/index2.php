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
  <body class="ddebug-layout">
    <div class="landingpage">
      <div class="panel">
        <figure class="handshake well well--hero cover">
          <picture class="cover__image">
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source
              media="<?php echo $gt_medium_desktop; ?>"
              srcset="/images/content/handshake--tablet.jpg, /images/content/handshake--tablet--2x.jpg 2x">
            <source
              media="<?php echo $gt_small_desktop; ?> and <?php echo $landscape; ?>"
              srcset="images/content/handshake--smartphone--portrait--2x.jpg">
            <source
              media="<?php echo $gt_large_handheld; ?> and <?php echo $portrait; ?>"
              srcset="/images/content/handshake--smartphone--landscape--2x.jpg 2x">
            <source
              media="<?php echo $landscape; ?>"
              srcset="/images/content/handshake--smartphone--landscape.jpg, /images/content/handshake--smartphone--landscape--2x.jpg 2x">
            <source
              media="<?php echo $portrait; ?>"
              srcset="/images/content/handshake--smartphone--portrait.jpg, /images/content/handshake--smartphone--portrait--2x.jpg 2x">
            <!--[if IE 9]></video><![endif]-->
            <img class="cover__image" src="/images/content/handshake--smartphone--portrait.jpg" srcset="/images/content/handshake--smartphone--portrait.jpg, /images/content/handheld/handshake--smartphone--portrait--2x.jpg 2x" alt="">
          </picture>
          <figcaption class="well well--hero well--tile  handshake__item tile tile__footer wings">
            <div class="handshake__body gutters">
              <h1 class="brand tile__body">
                <span class="is-narrative">Brickson • Amsterdam – Den Bosch</span>
              </h1>
            </div>
            <div class="handshake__body gutters">
              <h2 class="title trailer--tiny leader--hero">Een stap vooruit in het digitale tijdperk</h2>
              <p class="trailer leader">Brickson is een integrated digital agency, we begrijpen mensen én techniek en we helpen je een stap vooruit te zetten in de digitale wereld.</p>
            </div>
          </figcaption>
        </figure>
        <div class="invitation">
          <div class="invitation__item well well--tile">
            <div class="tile wings">
              <h2 class="title leader trailer gutters">Wat is jouw volgende stap?</h2>
              <p class="leader trailer gutters">Word je een global, local en mobile brand? Beweeg je naar cloud, internet of things en blockchain? Wil je beginnen met een leeg vel of zoek je een slimme hack?</p>
            </div>
          </div>
          <div class="invitation__item well">
            <div class="grid grid--tile">
              <figure class="grid__cell tile tile--shop cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/challenge--tile--smartphone.jpg"
                  srcset="
                    /images/content/challenge--tile--tablet--2x.jpg 320w 2x,
                    /images/content/challenge--tile--tablet.jpg 320w,
                    /images/content/challenge--tile--smartphone.jpg 240w,
                    /images/content/challenge--tile--smartphone--2x.jpg 240w,
                    /images/content/challenge--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <h3><span class="title title--meta trailer-inside">Ontdekken</span><br/><span class="title title--section leader-inside">Analysis &amp; Challenge</span></h3>
                </figcaption>
              </figure>
              <figure class="grid__cell tile tile--shop cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/concept--tile--smartphone.jpg"
                  srcset="
                    /images/content/concept--tile--tablet--2x.jpg 320w 2x,
                    /images/content/concept--tile--tablet.jpg 320w,
                    /images/content/concept--tile--smartphone.jpg 240w,
                    /images/content/concept--tile--smartphone--2x.jpg 240w,
                    /images/content/concept--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <h3><span class="title title--meta trailer-inside">Bedenken</span><br/><span class="title title--section leader-inside">Strategy &amp; Concept</span></h3>
                </figcaption>
              </figure>
              <figure class="grid__cell tile tile--shop cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/design--tile--smartphone.jpg"
                  srcset="
                    /images/content/design--tile--tablet--2x.jpg 320w 2x,
                    /images/content/design--tile--tablet.jpg 320w,
                    /images/content/design--tile--smartphone.jpg 240w,
                    /images/content/design--tile--smartphone--2x.jpg 240w,
                    /images/content/design--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <h3><span class="title title--meta trailer-inside">Ontwerpen</span><br/><span class="title title--section leader-inside">Digital User Experience</span></h3>
                </figcaption>
              </figure>
              <figure class="grid__cell tile tile--shop cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/build--tile--smartphone.jpg"
                  srcset="
                    /images/content/build--tile--tablet--2x.jpg 320w 2x,
                    /images/content/build--tile--tablet.jpg 320w,
                    /images/content/build--tile--smartphone.jpg 240w,
                    /images/content/build--tile--smartphone--2x.jpg 240w,
                    /images/content/build--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <h3><span class="title title--meta trailer-inside">Bouwen</span><br/><span class="title title--section leader-inside">Implement &amp; Develop</span></h3>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="introduction">
          <div class="well well--tile">
            <div class="tile wings">
              <h3 class="title title--welll title--section leader--giant trailer--hero">Onze visie</h3>
              <p class="lead">Slimme organisaties begrijpen mensen én techniek. Ze weten dat het digitale landschap het belangrijkste speelveld voor innovatie is. Maar bovenal weten ze wat hun klant van ze verwacht en gaat verwachten.</p>
            </div>
          </div>
          <div class="well well--tile">
            <figure class="tile cover wings">
              <?php $_src = "https://images.unsplash.com/photo-1470753937643-efeb931202a9?dpr=1&auto=format&crop=entropy&fit=crop&q=80&cs=tinysrgb"?>
              <img
                class="cover__image"
                alt=""
                src="<?php echo $_src . '&w=640&h=640'; ?>"
                srcset="
                  <?php echo $_src . '&w=640&h=640'; ?> 640w,
                  <?php echo $_src . '&w=480&h=480'; ?> 480w,
                  <?php echo $_src . '&w=960&h=960'; ?> 480w,
                  <?php echo $_src . '&w=960&h=960'; ?> 2x">
              <figcaption>
                  <h3 class="title title--wellltitle--section  leader--giant trailer--hero">In goed gezelschap</h3>
              </figcaption>
            </figure>
          </div>
        </div>
        <?php include 'testimonials/eigenhuis.php'; ?>
      </div>
      <?php include 'tools.php'; ?>
      <?php include 'testimonials/evean.php'; ?>
      <div class="contact">
      Contact
      </div>
    </div>
  </body>
</html>
