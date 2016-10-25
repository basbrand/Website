<?php include '../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>Analyse en Challenge | Brickson</title>
    <meta name="description" content="Brickson is er voor organisaties die de volgende stap in digitaal willen maken. Werken met Brickson betekent samen ontdekken, bedenken, ontwerpen of bouwen."/>
    <?php include '../head.php'; ?>
  </head>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>">
    <nav class="navbar media">
      <ol class="menu menu--hero list--reset fx bleed" id="menu">
        <li class="gutters meta meta--hero">
          <a class="menu__home fx" href="/"><span class="is-narrative">Home</span></a>
        </li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/cases/">Cases</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx is-active" href="/over-brickson/">Over Brickson</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/werken-bij-brickson/">Werken bij Brickson</a></li>
      </ol>
    </nav>
    <article class="post">
      <header class="hero hero--beta seed pod pod--hippo cover cover--middle isolation">
        <img
          sizes="100vw"
          scrset="/images/content/w800_h400px_3x--invitation.jpg 2400w, /images/content/w800_h400px_2x--invitation.jpg 1600w, /images/content/w800_h400px--invitation.jpg 800w"
          class="cover__image" src="/images/content/w800_h400px_2x--invitation.jpg"
          alt="">
      <div class="hero__body seed__body backdrop">
        <h1 class="post__title title--inverse leader trailer">Ontdek je digitale kansen</h1>
      </div>
    </header>
      <div class="post__main isolation">
        <div class="wings">
          <nav class="trail meta leader trailer bleed">
            <ol class="list--reset list--inline">
              <li><a class="anchor--shy" href="/cases/">Ontdekken</a></li>
            </ol>
          </nav>
          <p class="lead">Onze ervaren ontdekkers laten zien waar jouw kansen voor digitale innovatie ligt. We helpen je belangrijke signalen herkennen, de uitdaging voor je organisatie te benoemen en je prioriteiten te definiëren.</p>
          <h2>Nog een tussenkopje graag</h2>
          <p>Het speelt binnen iedere organisatie: waardevolle signalen van klanten blijven onopgemerkt en de verandering van de markt wordt genegeerd. Het is complex om overzicht te houden; de digitale ontwikkelingen vliegen je om de oren en de waan van de dag regeert.</p>
          <h2>Definieer je uitdaging</h2>
          <p>Wil je de transitie maken binnen de eerste fase van internet: informatie, services en collaboratie? Of wil je of de stap maken naar de tweede fase van digitale dienstverlening: internet of things, big data, en blockchain?</p>
          <p>Onze insteek: ontdek eerst hoe je markt verschuift en leer je klanten beter kennen.</p>
          <ul>
            <li>Analyseer kwantitatieve data uit transacties en interacties;</li>
            <li>Verzamel kwalitatieve inzichten uit interviews;</li>
            <li>Herken frisse geluiden door samen te werken met medewerkers;</li>
          </ul>
        </div>
        <footer class="well well--challenge seed wings leader--hero">
          <h3 class="seed__header title--section leader"><strong>Challenge accepted</strong></h3>
          <div class="seed__body">
            <p>We helpen je te zien waar de grootste kansen liggen, je prioriteiten te stellen en je leert verder te denken dan de uitdaging van vandaag.</p>
            <ul>
              <li>Startpunt voor digitale strategie en UX design;</li>
              <li>Nieuwe inzichten in klant en markt;</li>
              <li>Scherper beeld van je digitale organisatie;</li>
            </ul>
            <p>We werken met je samen op project-, consultancy- of interim-basis.</p>

          </div>
          <div class="seed__footer">
            <div class="leader trailer--hero"><a class="button button--inverse anchor--shy" href="mailto:bas@brickson.nl?subject=Ontdekken%20met%20Bas">Wil je digitale kansen ontdekken?</a></div>
          </div>
        </footer>
      </div>
      <aside class="post__aside well well--challenge--stork isolation seed">
        <div class="wings seed__body">

          <h3 class="meta leader trailer">Onze producten</h3>
          <ul>
            <li>Klantprofiel</li>
            <li>Markt analyse</li>
            <li>Marketing data analyse</li>
            <li>Digital maturity scan</li>
            <li>Concept test</li>
            <li>Concurrentie analyse</li>
          </ul>

          <h3 class="meta leader trailer">Zet Brickson in bij</h3>
          <ul>
            <li>Strategievorming</li>
            <li>Visievorming</li>
            <li>Projectinitiatie</li>
            <li>Business cases</li>
          </ul>

          <h3 class="meta leader trailer">Voor (wegstrepen)</h3>
          <ul>
            <li>Business consultants</li>
            <li>ICT managers</li>
            <li>Directie</li>
            <li>Designers</li>
            <li>Agile developers</li>
            <li>Product managers</li>
            <li>Engineers and developers</li>
            <li>Researchers</li>
            <li>Marketing managers</li>
            <li>Communicatiemanagers</li>
            <li>Projectmanagers</li>
            <li>Scrum masters</li>
            <li>Programmamanagers</li>
            <li>Operations Manager</li>
          </ul>

          <hr class="divider leader--giant trailer">


            <blockquote class="quote leader--hero leader--hero trailer"><p>Digital leadership begint met goed te kijken naar je markt en te praten met je klanten.</p></blockquote>
            <figure class="person bleed leader trailer">
              <span class="person__picture gutters">
                <img src="/images/heads/bas_brand.jpg" class="person__image" width="56" height="56" style="background: Grey;">
              </span>
              <figcaption class="person__body">
                <a href="mailto:bas@brickson.nl" class="anchor--shy person__name meta">Bas Brand</a><br>
                <small class="person__occupation">Partner bij Brickson</small><br>
              </figcaption>
            </figure>
          </div>
      </aside>
    </article>
    <?php include '../post-body.php'; ?>
  </body>
</html>
