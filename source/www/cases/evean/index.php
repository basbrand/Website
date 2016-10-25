<?php include '../../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <title>Brickson</title>
    <meta name="description" content="Brickson is er voor organisaties die de volgende stap in digitaal willen maken. Werken met Brickson betekent samen ontdekken, bedenken, ontwerpen of bouwen."/>
    <?php include '../../head.php'; ?>
  </head>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>">
    <nav class="navbar media">
      <ol class="menu menu--hero list--reset fx bleed" id="menu">
        <li class="gutters meta meta--hero">
          <a class="menu__home fx" href="/"><span class="is-narrative">Home</span></a>
          <a class="menu__item anchor--reset anchor--shy is-current is-active" href="/cases/evean/#menu">Cases</a>
        </li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/over-brickson/">Over Brickson</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx is-active" href="/cases/">Cases</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/werken-bij-brickson/">Werken bij Brickson</a></li>
      </ol>
    </nav>
    <article class="post">
      <header class="hero hero--navbar seed pod pod--hippo cover isolation">
        <picture class="cover__image">
          <!--[if IE 9]><video style="display: none;"><![endif]-->
          <source
            media="<?php echo $gt_large_handheld; ?> and <?php echo $portrait; ?>"
            srcset="/images/content/w896px_h640px--evean.jpg 896w, /images/content/w896px_h640px_2x--evean.jpg 1792w">
          <source
            media="<?php echo $gt_medium_handheld; ?> and <?php echo $landscape; ?>"
            srcset="/images/content/w1022px_h520px--evean.jpg 1022w, /images/content/w1022px_h520px_2x--evean.jpg 2044w">
          <source
            media="<?php echo $gt_small_handheld; ?> and <?php echo $portrait; ?>"
            srcset="/images/content/w520px_h1022px--evean.jpg 520w, /images/content/w520px_h1022px_2x--evean.jpg 1040w">
          <!--[if IE 9]></video><![endif]-->
          <img class="cover__image" src="/images/content/w1280px_h1280px--evean.jpg" alt="">
        </picture>
        <div class="hero__header seed__header">
          <img
            class="brand-client--hero"
            sizes="<?php echo $gt_small_desktop; ?> 23vw, 50vw"
            srcset="/images/logos/evean_h58w256_2x.png 512w, /images/logos/evean_h58w256.png 256w, /images/logos/evean_h20w128.png 128w"
            src="/images/logos/evean_h58w256.png"
            alt="Afbeelding logo Evean"
            width="256"
            height="58"
            />
        </div>
        <div class="hero__body seed__body backdrop">
          <h1 class="post__title title--inverse leader trailer">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</h1>
          <p class="post__lead body--inverse leader trailer">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </header>
      <div class="post__main isolation">
        <div class="wings">
          <nav class="trail meta leader trailer bleed">
            <ol class="list--reset list--inline">
              <li><a class="anchor--shy" href="/cases/">Cases</a></li>
              <li><a class="anchor--reset anchor--shy" href="/cases/vereniging-eigen-huis">Evean</a></li>
            </ol>
          </nav>
          <h2>Lorem Ipsum Dolor Sit Amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <h2>Lorem Ipsum Dolor Sit Amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <h2>Lorem Ipsum Dolor Sit Amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <h2>Lorem Ipsum Dolor Sit Amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <h2>Lorem Ipsum Dolor Sit Amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
        </div>
        <footer class="well seed wings leader--hero">
          <h3 class="seed__title title--section leader trailer"><strong>Het resultaat</strong></h3>
          <div class="seed__body leader trailer">
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
    <?php include 'post-body.php'; ?>
  </body>
</html>
