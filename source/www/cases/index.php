<?php include '../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>Brickson</title>
    <meta name="description" content="Brickson is er voor organisaties die de volgende stap in digitaal willen maken. Werken met Brickson betekent samen ontdekken, bedenken, ontwerpen of bouwen."/>
    <?php include '../head.php'; ?>
  </head>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>">
    <nav class="navbar media">
      <ol class="menu menu--hero list--reset fx bleed" id="menu">
        <li class="gutters meta meta--hero">
          <a class="menu__home fx" href="/"><span class="is-narrative">Home</span></a>
          <a class="menu__item anchor--reset anchor--shy is-current is-active" href="/cases/#menu">Cases</a>
        </li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/over-brickson/">Over Brickson</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx is-active" href="/cases/">Cases</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/werken-bij-brickson/">Werken bij Brickson</a></li>
      </ol>
    </nav>
    <section class="layout">
      <header class="hero hero--navbar seed pod pod--hippo cover isolation is-cleared">
        <picture class="cover__image">
          <!--[if IE 9]><video style="display: none;"><![endif]-->
          <source
            media="<?php echo $landscape; ?>"
            sizes="100vw"
            srcset="/images/content/w1022px_h520px--eigenhuis.jpg 1022w, /images/content/w1022px_h520px_2x--eigenhuis.jpg 2044w">
          <source
            media="<?php echo $portrait; ?>"
            sizes="100vw"
            srcset="/images/content/w520px_h1022px--eigenhuis.jpg 520w, /images/content/w520px_h1022px_2x--eigenhuis.jpg 1040w">
          <!--[if IE 9]></video><![endif]-->
          <img class="cover__image" src="/images/content/w320px_h576px--eigenhuis.jpg" alt="">
        </picture>
        <div class="hero__header seed__header">
          <img
            class="brand-client--hero"
            sizes="<?php echo $gt_small_desktop; ?> 23vw, 50vw"
            srcset="/images/logos/veh_h80w237_2x.png 474w, /images/logos/veh_h80w237.png 237w, /images/logos/veh_h40w119.png 119w"
            src="/images/logos/veh_h80w237.png"
            alt="Afbeelding logo Vereniging Eigen Huis"
            width="237"
            height="80"
            />
        </div>
        <div class="hero__body seed__body backdrop">
          <h1 class="post__title title--inverse leader trailer">UX design voor Vereniging Eigen Huis</h1>
          <p class="lead body--inverse leader trailer">Vereniging Eigen Huis is met ruim 700.000 leden een van de grootste ledenorganisaties in Nederland. De Vereniging is belangenbehartiger en dienstverlener in één. Een unieke positie die vraagt om effectief op te komen voor de belangen voor iedereen die een huis heeft of van plan is te kopen. Daarnaast is Vereniging Eigen Huis een partner voor alle sectoren die met huizenbouw te maken hebben en de politiek.</p>
        </div>
        <div class="hero__body seed__footer backdrop backdrop--body">
          <p class="leader trailer"><a class="button button--hero button--inverse" href="/cases/vereniging-eigen-huis/">Lees verder</a></p>
        </div>
      </header>
      <div class="layout__cell layout__cell--main">
        <article class="pod--leopard isolation">
          <div class="pod__seed seed cover">
            <img
              class="cover__image"
              sizes="<?php echo $gt_small_desktop; ?> 50vw, 100vw"
              srcset="/images/content/w683px_h1024px_2x--evean.jpg 1366w, /images/content/w683px_h1024px--evean.jpg 683w"
              src="/images/content/w683px_h1024px--evean.jpg"
              alt=""
              width="1024"
              height="683"
              />
            <div class="seed__header leader-inside trailer-inside">
              <img
                class="brand-client"
                sizes="<?php echo $gt_small_desktop; ?> 10vw, 25vw"
                srcset="/images/logos/evean_h58w256.png 256w, /images/logos/evean_h20w128.png 128w"
                src="/images/logos/evean_h20w128.png"
                alt="Afbeelding logo Evean"
                width="256"
                height="58"
                />
            </div>
            <div class="seed__footer">
              <small class="meta meta--tiny meta--inverse leader-inside trailer-inside">Case</small>
            </div>
          </div>
          <div class="pod__seed seed">
            <div class="seed__body">
              <h2 class="title title--body leader trailer">Evean staat naast haar klant</h2>
              <p>Hoe zorg je dat je klanten een gevoel van regie geeft? En welke digitale mogelijkheden moet je ze dan als eerste geven? Waar ga je investeren? Hoe ben je relevant in een ondoorzichtige zorgmarkt?</p>
            </div>
            <p class="seed__footer leader trailer">
              <a class="anchor--shy meta" href="/cases/evean">Lees verder</a>
            </p>
          </div>
        </article>
        <article class="pod--leopard isolation">
          <div class="pod__seed seed cover">
            <picture>
              <img class="cover__image" src="https://hd.unsplash.com/photo-1428542244207-0aaec316e609" alt="">
            </picture>
            <div class="seed__header leader-inside trailer-inside">
              <img
                class="brand-client"
                sizes="<?php echo $gt_small_desktop; ?> 10vw, 25vw"
                srcset="/images/logos/evean_h58w256.png 256w, /images/logos/evean_h20w128.png 128w"
                src="/images/logos/evean_h20w128.png"
                alt="Afbeelding logo Evean"
                width="256"
                height="58"
                />
            </div>
            <div class="seed__footer">
              <small class="meta meta--tiny meta--inverse leader-inside trailer-inside">Case</small>
            </div>
          </div>
          <div class="pod__seed seed">
            <div class="seed__body">
              <h2 class="title title--body leader trailer">Lorem Ipsum Dolor Sit Amet</h2>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>
            <p class="seed__footer leader trailer">
              <a class="anchor--shy meta" href="/">Lees verder</a>
            </p>
          </div>
        </article>
        <article class="pod--leopard isolation">
          <div class="pod__seed seed cover">
            <picture>
              <img class="cover__image" src="https://hd.unsplash.com/photo-1428542244207-0aaec316e609" alt="">
            </picture>
            <div class="seed__header leader-inside trailer-inside">
              <img class="brand-client" src="../images/logos/veh.png" alt="Vereniging Eigen Huis" width="112" height="25">
            </div>
            <div class="seed__footer">
              <small class="meta meta--tiny meta--inverse leader-inside trailer-inside">Case</small>
            </div>
          </div>
          <div class="pod__seed seed">
            <div class="seed__body">
              <h2 class="title title--body leader trailer">Lorem Ipsum Dolor Sit Amet</h2>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>
            <p class="seed__footer leader trailer">
              <a class="anchor--shy meta" href="/">Lees verder</a>
            </p>
          </div>
        </article>
        <article class="pod--leopard isolation">
          <div class="pod__seed seed cover">
            <picture>
              <img class="cover__image" src="https://hd.unsplash.com/photo-1428542244207-0aaec316e609" alt="">
            </picture>
            <div class="seed__header leader-inside trailer-inside">
              <img class="brand-client" src="../images/logos/veh.png" alt="Vereniging Eigen Huis" width="112" height="25">
            </div>
            <div class="seed__footer">
              <small class="meta meta--tiny meta--inverse leader-inside trailer-inside">Case</small>
            </div>
          </div>
          <div class="pod__seed seed">
            <div class="seed__body">
              <h2 class="title title--body leader trailer">Lorem Ipsum Dolor Sit Amet</h2>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>
            <p class="seed__footer leader trailer">
              <a class="anchor--shy meta" href="/">Lees verder</a>
            </p>
          </div>
        </article>
      </div>
      <aside class="layout__cell well well--stok isolation wings seed is-gt-medium-desktop tile">
        <div class="seed__body">
          <blockquote class="quote leader--hero trailer"><p>Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</p></blockquote>
          <figure class="person bleed leader trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/marja_smits.jpg" class="person__image" width="56" height="56"/>
            </span>
            <figcaption class="person__body">
              <span class="person__name meta">Marja Smits</span>
              <small class="person__occupation">Manager Strategie en Marketing Evean</small>
            </figcaption>
          </figure>
          <hr class="divider leader--hero trailer--hero"/>
          <blockquote class="quote trailer"><p>Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</p></blockquote>
          <figure class="person bleed leader trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/marja_smits.jpg" class="person__image" width="56" height="56"/>
            </span>
            <figcaption class="person__body">
              <span class="person__name meta">Marja Smits</span>
              <small class="person__occupation">Manager Strategie en Marketing Evean</small>
            </figcaption>
          </figure>
        </div>
        <div class="seed__footer">
          <h3 class="title title--section leader">Over Brickson</h3>
          <p class="body--tiny leader--tiny trailer">Brickson is er voor ambitieuze merken in traditionele markten. Wij helpen ze om relevant te blijven en meer voor klanten te betekenen. Succesvolle merken kijken vooruit en stellen zich de vraag: hoe maak ik mijn klant blijer, gezonder en welvarender?</p>
        </div>
      </aside>
    </section>
  </body>
</html>
