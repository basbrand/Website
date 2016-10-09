<?php include '../../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <?php include '../../head.php'; ?>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>p-case">
    <div class="navigation media">
      <header class="media media__stretcher">
        <a class="" href="/"><img class="navigation__home" title="Brickson.nl" src="/images/logos/Brickson-Brandmark.svg"></a>
      </header>
      <nav>
        <ul class="list--reset list--inline menu">
          <li>
            <a class="navigation__section-marker anchor--shy title title--section" href="javascript:void();">Cases</a>
          </li>
        </ul>
      </nav>
    </div>
    <section class="panel is-active">
      <?php include 'catalog.php'; ?>
      <div class="article lead">
        <div class="article__body well trailer-inside--hero">
          <p class="well__title title title--section">User experience design</p>
          <h1 class="well__title title">User experience design: eigenhuis.nl</h1>
          <p class="lead well__title">Vereniging Eigen Huis is een van de grootste ledenorganisaties in Nederland met ruim 700.000 leden. Daarnaast is de expertise die de vereniging heeft op alles wat maar met huizenbezit te maken heeft uitputtend. Er is zoveel content dat het naast een grote ledenorganisatie eigenlijk gewoon een grote uitgever is.</p>
          <p class="leader trailer">Natuurlijk is er een presentatielaag die voor iedereen toegankelijk is op eigenhuis.nl. In veel gevallen is specifieke content er alleen voor leden of voor geregistreerde gebruikers. Daarbij beschikt VEH over tal van digitale tools voor huizenbezitters.</p>
          <p class="leader trailer">Bij deze opdracht speelde tijd een grote rol, er moest onder grote druk snel gewerkt worden. In dit geval een voordeel, de iteraties volgden elkaar snel op zodat we in een prettig hoog ritme werkten.</p>
        </div>
        <div class="article__body leader-inside trailer-inside" style="background: whitesmoke;">
          <p class="title title--section trailer">Testimonial</p>
          <blockquote class="quote lead leader">Prettige, deskundige en flexibele gesprekspartners met een schat aan ervaring. Ze luisteren goed naar requirements, berijden geen hinderlijke stokpaardjes en houden zich aan hun afspraken.</blockquote>
          <figure class="person person--s bleed leader--tiny trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/frank_muller.jpg" class="person__image" width="56" height="56" style="background: Grey;">
            </span>
            <figcaption class="person__body">
              <span class="person__name title title--section">Frank Muller</span>
              <small class="person__occupation">Marketing Manager Vereniging Eigen Huis</small>
            </figcaption>
          </figure>
        </div>
        <div class="article__body lead">
          <p class="leader trailer">De kern vormde het ontwikkelen van een model voor context, content en interactie. De uitwerking kwam tot stand op basis van het Meyers-Briggs model waarin uitgangspunt is op welke manier mensen content waarnemen, consumeren en vervolgens beslissen.</p>
          <p class="leader trailer">Met dit model is op ieder niveau een DNA gemaakt voor de website. Dat gecombineerd met een tool box waarmee in het CMS de pagina’s op verschillende manieren samengesteld worden door het stapelen van zogenaamde containers vormde de basis voor het interactie ontwerp.</p>
          <p class="leader trailer">Visueel leverden we een digitale stijlgids waarin ieder container en ieder element tot op detail niveau is uitgewerkt (tot en met de CSS code).</p>
          <h2 class="well__title title">Resultaat</h2>
          <p class="leader trailer">Een content model, een interactiestructuur waarmee VEH efficiënt online communiceert en leden optimaal bedient. Een stijlgids waarmee de eigen site bouwers en content experts van VEH de strategische lijnen moeiteloos kunnen volgen.</p>
        </div>
      </div>
      <?php include '../../testimonials/evean.php'; ?>
      <?php include '../../landingpage/introduction.php'; ?>
      <?php include '../../landingpage/contact.php'; ?>
    </section>
  </body>
</html>
