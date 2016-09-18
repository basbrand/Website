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
<html lang="en">
<head
  <title="Brickson"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/styles/screen.css?id=1474118468489">
  <script src="https://use.typekit.net/zaf1yku.js"></script>
  <script src="/javascript/html5shiv.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/javascript/picturefill.min.js" async></script>
  <script src="/javascript/pf.intrinsic.min.js" async></script>
  <base href="/"><style type="text/css">@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/9749f0/00000000000000000001008f/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5) format("woff2");font-weight:500;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/8a5494/000000000000000000013365/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4) format("woff2");font-weight:400;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://fonts.typekit.net/af/75f41e/000000000000000000010096/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3) format("woff2");font-weight:300;font-style:normal;}@font-face{font-family:merriweather;src:url(https://fonts.typekit.net/af/f20d56/000000000000000000014a3e/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4) format("woff2");font-weight:400;font-style:normal;}@font-face{font-family:merriweather;src:url(https://fonts.typekit.net/af/f87f0c/000000000000000000014a3d/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4) format("woff2");font-weight:400;font-style:italic;}</style>
</head>
  <body>
    <div class="landingpage">
      <div class="panel">
        <figure class="handshake cover">
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
            <img class="cover__image" srcset="/images/content/handshake--smartphone--portrait.jpg, /images/content/handheld/handshake--smartphone--portrait--2x.jpg 2x" alt="">
          </picture>
          <figcaption class="handshake__item well well--tile wings">
            <h1 class="brand leader--hero trailer">
              <span class="is-narrative">Brickson &bull; Amsterdam – Den Bosch</span>
            </h1>
            <h2 class="title trailer--tiny leader--hero">Een stap vooruit in het digitale tijdperk</h2>
            <p class="trailer leader">Brickson is een integrated digital agency, we begrijpen mensen &eacute;n techniek en we helpen je een stap vooruit te zetten in de digitale wereld.</p>
          </figcaption>
        </figure>
        <div class="invitation">
          <div class="invitation__item well well--tile wings">
            <div class="tile">
              <h2 class="title leader trailer">Wat is jouw volgende stap?</h2>
              <p class="leader trailer">Word je een global, local en mobile brand? Beweeg je naar cloud, internet of things en blockchain? Wil je beginnen met een leeg vel of zoek je een slimme hack?</p>
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
                    /images/content/challenge--tile--smartphone--2x.jpg 240w 2x">
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
                    /images/content/concept--tile--smartphone--2x.jpg 240w 2x">
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
                    /images/content/design--tile--smartphone--2x.jpg 240w 2x">
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
                    /images/content/build--tile--smartphone--2x.jpg 240w 2x">
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
              <h3 class="title title--section leader trailer">Onze visie</h3>
              <p>Slimme organisaties begrijpen mensen én techniek. Ze weten dat het digitale landschap het belangrijkste speelveld voor innovatie is. Maar bovenal weten ze wat hun klant van ze verwacht en gaat verwachten.</p>
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
                  <?php echo $_src . '&w=960&h=960'; ?> 480w 2x">
              <figcaption>
                  <h3 class="title title--section leader trailer">In goed gezelschap</h3>
              </figcaption>
            </figure>
          </div>
        </div>
        <figure class="testimonial cover">
          <picture class="cover__image">
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source
              media="<?php echo $gt_small_desktop; ?> and <?php echo $landscape; ?>"
              srcset="/images/content/eigenhuis--desktop.jpg, /images/content/eigenhuis--desktop--2x.jpg 2x">
            <source
              media="<?php echo $gt_large_handheld; ?> and <?php echo $portrait; ?>"
              srcset="/images/content/eigenhuis--landscape--2x.jpg">
            <source
              media="<?php echo $landscape; ?>"
              srcset="/images/content/eigenhuis--landscape.jpg, /images/content/eigenhuis--landscape--2x.jpg 2x">
            <source
              media="<?php echo $portrait; ?>"
              srcset="/images/content/eigenhuis--portrait.jpg, /images/content/eigenhuis--portrait--2x.jpg 2x">
            <!--[if IE 9]></video><![endif]-->
            <img class="cover__image" srcset="/images/content/eigenhuis--portrait.jpg, /images/content/handheld/eigenhuis--portrait--2x.jpg 2x" alt="">
          </picture>
          <figcaption class="handshake__item well well--tile wings">
            <h3 class="title title--section leader trailer">Testimonial</h3>
          </figcaption>
        </figure>
      </div>
      <div class="tools">
        <div class="tools__header">
          <h2 class="title title--section leader trailer">Onze producten</h2>
          <em class="title">Krachtige tools voor slimme stappen</em>
        </div>
        <div class="tools__body">
          <section>
            <h3 class="title title--section title--em leader trailer">Ontdekken</h3>
            <ul class="list list--reset list--tools list--discover body--meta">
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Analysis</h4><!--
                -->data research
              </li>
              <li>customer research</li>
              <li>digital maturity scan</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Challenge</h4><!--
                -->challenge your plan
              </li>
              <li>challenge your organisation</li>
              <li>question your assumptions</li>
            </ul>
          </section>
          <section>
            <h3 class="title title--section title--em leader trailer">Bedenken</h3>
            <ul class="list list--reset list--tools list--concept body--meta">
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Strategie</h4><!--
                -->digital strategie
              </li>
              <li>merk en marketing strategie</li>
              <li>data en ux strategy</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Ideation</h4><!--
                -->brainstorms
              </li>
              <li>triz</li>
              <li>scamper</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Customer mapping</h4><!--
                -->user segmentation
              </li>
              <li>persona&rsquo;s</li>
              <li>klantprofielen</li>
            </ul>
          </section>
          <section>
            <h3 class="title title--section title--em leader trailer">Ontwerpen</h3>
            <ul class="list list--reset list--tools list--design body--meta">
              <li class="list--tools__section">
                <h4 class="title title--section title--em">UX/CX Design</h4><!--
                -->User scenario’s
              </li>
              <li>Use cases</li>
              <li>Customer journey mapping</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Informatiearchitectuur</h4><!--
                -->Data research
              </li>
              <li>Interactieontwerp</li>
              <li>Flowcharts &amp; sitemaps</li>
              <li>Wireframes</li>
              <li>Mockups</li>
              <li>Interactive prototypes</li>
              <li>Digital style guide</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Content strategie</h4><!--
                -->Content- en dataarchitectuur
              </li>
              <li>Taxonomie</li>
              <li>Workflow design</li>
            </ul>
          </section>
          <section>
            <h3 class="title title--section title--em leader trailer">Bouwen</h3>
            <ul class="list list--reset list--tools list--build body--meta">
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Prototyping</h4><!--
                -->Paper prototype
              </li>
              <li>Digital prototype</li>
              <li>POC</li>
              <li>MVP</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Development</h4><!--
                -->Frontend development
              </li>
              <li>Serverside programming</li>
              <li>Database design</li>
              <li>Web applications</li>
              <li>Intra- &amp; extranets</li>
              <li>Integration testing</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">SEO &amp; accessability</h4><!--
                -->Search engine optimisation
              </li>
              <li>Performance optimisation</li>
              <li>Accessibility wcag 2.0 (drempelvrij niveau 2)</li>
              <li class="list--tools__section">
                <h4 class="title title--section title--em">Support</h4><!--
                -->Server management
              </li>
              <li>Performance optimisation</li>
              <li>Server management &amp; configuration</li>
              <li>Backend integration</li>
            </ul>
          </section>
        </div>
      </div>
      <figure class="testimonial cover">
        <picture class="cover__image">
          <!--[if IE 9]><video style="display: none;"><![endif]-->
          <source
            media="<?php echo $gt_small_desktop; ?> and <?php echo $landscape; ?>"
            srcset="/images/content/evean--desktop.jpg, /images/content/evean--desktop--2x.jpg 2x">
          <source
            media="<?php echo $gt_large_handheld; ?> and <?php echo $portrait; ?>"
            srcset="/images/content/evean--landscape--2x.jpg">
          <source
            media="<?php echo $landscape; ?>"
            srcset="/images/content/evean--landscape.jpg, /images/content/evean--landscape--2x.jpg 2x">
          <source
            media="<?php echo $portrait; ?>"
            srcset="/images/content/evean--portrait.jpg, /images/content/evean--portrait--2x.jpg 2x">
          <!--[if IE 9]></video><![endif]-->
          <img class="cover__image" srcset="/images/content/evean--portrait.jpg, /images/content/handheld/evean--portrait--2x.jpg 2x" alt="">
        </picture>
        <figcaption class="handshake__item well well--tile wings">
          <h3 class="title title--section leader trailer">Testimonial</h3>
        </figcaption>
      </figure>
      <div class="contact">
      Contact
      </div>
    </div>
  </body>
</html>
