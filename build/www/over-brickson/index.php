<?php include '../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>Ontdekken - Analysis &amp; Challenge | Brickson</title>
    <meta name="description" content="Brickson is er voor organisaties die de volgende stap in digitaal willen maken. Werken met Brickson betekent samen ontdekken, bedenken, ontwerpen of bouwen."/>
    <?php include '../head.php'; ?>
  </head>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>">
    <nav class="navbar media">
      <ol class="menu menu--hero list--reset fx bleed" id="menu">
        <li class="gutters meta meta--hero">
          <a class="menu__home fx" href="/"><span class="is-narrative">Home</span></a>
          <a class="menu__item anchor--reset anchor--shy is-current is-active" href="/over-brickson/#menu">Over Brickson</a>
        </li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx is-active" href="/over-brickson/">Over Brickson</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/cases/">Cases</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/werken-bij-brickson/">Werken bij Brickson</a></li>
      </ol>
    </nav>
    <article class="post">
      <header class="hero hero--navbar seed pod pod--hippo cover isolation">
      <picture>
        <img class="cover__image" src="https://hd.unsplash.com/photo-1428542244207-0aaec316e609">
      </picture>
      <div class="hero__header seed__header">
        <video class="cover__image"  autoplay>
          <source src="http://vid.123rf.com/preview/pressmaster/pressmaster1512/pressmaster151201220.mp4" type="video/mp4">
        </video>
      </div>
      <div class="hero__body seed__body backdrop">
        <h1 class="post__title title--inverse leader trailer">Ontdek je digitale kansen</h1>
        <p class="post__lead body--inverse leader trailer">Onze ervaren ontdekkers laten zien waar jouw kansen voor digitale innovatie ligt. We helpen je belangrijke signalen herkennen, de uitdaging voor je organisatie te benoemen en je prioriteiten te definiëren.</p>
      </div>
    </header>
      <div class="post__main isolation">
        <div class="wings">
          <nav class="trail meta leader--tiny trailer bleed">
            <ol class="list--reset list--inline">
              <li><a class="anchor--shy" href="/cases/">Ontdekken</a></li>
            </ol>
          </nav>
          <p>Het speelt binnen iedere organisatie: waardevolle signalen van klanten blijven onopgemerkt en de verandering van de markt wordt genegeerd. Het is complex om overzicht te houden; de digitale ontwikkelingen vliegen je om de oren en de waan van de dag regeert.</p>
          <h2>Definieer je uitdaging</h2>
          <p>Wil je de transitie maken binnen de eerste fase van internet: informatie, services en collaboratie? Of wil je of de stap maken naar de tweede fase van digitale dienstverlening: internet of things, big data, en blockchain?</p>
        </div>
        <footer class="well seed wings leader--hero">
          <h3 class="seed__title title--section leader-inside trailer"><strong>Het resultaat</strong></h3>
          <div class="seed__body leader trailer-inside">
            <h2>Lorem Ipsum Dolor Sit Amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          </div>
        </footer>
      </div>
      <aside class="post__aside well well--stork isolation seed">
        <section class="leader trailer wings seed__body">

          <blockquote class="quote leader--giant leader--hero trailer"><p>Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</p></blockquote>
          <figure class="person bleed leader trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/marja_smits.jpg" class="person__image" width="56" height="56" style="background: Grey;">
            </span>
            <figcaption class="person__body">
              <span class="person__name meta">Marja Smits</span>
              <small class="person__occupation">Manager Strategie en Marketing Evean</small>
            </figcaption>
          </figure>

          <hr class="divider leader--giant trailer--giant">

          <blockquote class="quote leader--hero leader--hero trailer"><p>Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</p></blockquote>
          <figure class="person bleed leader trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/marja_smits.jpg" class="person__image" width="56" height="56" style="background: Grey;">
            </span>
            <figcaption class="person__body">
              <span class="person__name meta">Marja Smits</span>
              <small class="person__occupation">Manager Strategie en Marketing Evean</small>
            </figcaption>
          </figure>

        </section>
        <section class="leader--giant trailer wings seed__footer">
          <h3 class="title title--section leader">Over Brickson</h3>
          <p class="body--tiny leader--tiny trailer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat, condimentum sagittis sem. Praesent porttitor porttitor risus, dapibus rutrum ipsum gravida et. Integer lectus nisi, facilisis sit amet eleifend nec, pharetra ut augue. Integer quam nunc, consequat nec egestas ac, volutpat ac nisi. Sed consectetur dignissim dignissim. Donec pretium est site.</p>
        </section>
      </aside>
    </article>
    <?php include '../post-body.php'; ?>
  </body>
</html>
