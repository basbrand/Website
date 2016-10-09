<?php include '../../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <?php include '../../head.php'; ?>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>p-case p-menu">
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
        <div class="article__body well">
          <p class="well__title title title--section">Digitale strategie</p>
          <h1 class="well__title title">Evean staat naast haar klant</h1>
          <p class="leader trailer">De zorg is flink in beweging, zo ook Evean. De veranderingen die het kabinet doorvoert, vragen een behoorlijke omslag in doen en denken. De cliënt van vandaag mag zélf bepalen welke zorg en ondersteuning het beste aansluit bij zijn behoeften en mogelijkheden.</p>
          <p class="leader trailer">Hoe zorg je dat je klanten een gevoel van regie geeft? En welke digitale mogelijkheden moet je ze dan als eerste geven? Waar ga je investeren? Hoe ben je relevant in een ondoorzichtige zorgmarkt?</p>
        </div>
        <div class="article__body leader-inside trailer-inside" style="background: whitesmoke;">
          <p class="title title--section trailer">Testimonial</p>
          <blockquote class="quote lead leader">Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</blockquote>
          <figure class="person person--s bleed leader--tiny trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/marja_smits.jpg" class="person__image" width="56" height="56" style="background: Grey;">
            </span>
            <figcaption class="person__body">
              <span class="person__name title title--section">Marja Smits</span>
              <small class="person__occupation">Manager Strategie en Marketing Evean</small>
            </figcaption>
          </figure>
        </div>
        <div class="article__body lead">
          <h2 class="well__title title">Digitale strategie</h2>
          <p class="leader trailer">Brickson ontwikkelde een gedragen strijdplan voor de komende jaren. De lange termijn visie van de organisatie vertaalden we naar een strategie voor het digitale domein: hoe biedt je transacties aan, hoe informeer je, hoe communiceer je met klanten.</p>
          <h2 class="well__title title">User experience en visual design</h2>
          <p class="leader trailer">De doorvertaling een digitale strategie resulteerde in een UX design en een visual design voor de nieuwe website. De cliënten en hun naasten zijn uitgangspunt, maar ook andere doelgroepen (professionals, huisartsen, collega’s) ervaren hoe Evean er voor ze is.</p>

          <h2 class="well__title title">Hoe kom je tot keuzes?</h2>
          <p class="leader trailer">De aanpak voor Evean was gericht op het begrijpen van de cultuur, processen en aanstaande veranderingen binnen de organisatie en de zorgmarkt.  We onderzochten vanuit 9 hypotheses, deze leidden uiteindelijk tot de inzichten waarmee Evean keuzes kon maken.</p>
          <p class="leader trailer">Geen onderonsjes met de directie, maar gesprekken dwars door de organisatie heen. Daarnaast spraken we vanzelfsprekend veel met cliënten en hun naasten.</p>

          <h2 class="well__title title">Evean kiest een eigen lijn</h2>
          <p class="leader trailer">Evean heeft nieuwe inzichten en een digitale roadmap, maar zet ook concrete stappen: een team van bevlogen professionals is begonnen om Evean.nl opnieuw in te richten. Daarbij kiest Evean voor een duidelijke online positionering en doet een uitgesproken propositie naar cliënten, naasten en verwijzers: waarmee kunnen we u helpen?</p>
        </div>
        <div class="article__body leader-inside trailer-inside" style="background: whitesmoke;">
          <p class="title title--section trailer">Testimonial</p>
          <blockquote class="quote lead leader">Brickson het bureau dat een stap vooruit denkt, niet alleen strategisch ook in de uitvoering.</blockquote>
          <figure class="person person--s bleed leader--tiny trailer">
            <span class="person__picture gutters">
              <img src="/images/heads/danielle_vlaar.jpg" class="person__image" width="56" height="56" style="background: Grey;">
            </span>
            <figcaption class="person__body">
              <span class="person__name title title--section">Danielle Vlaar</span>
              <small class="person__occupation">Projectleider Evean.nl</small>
            </figcaption>
          </figure>
        </div>
        <div class="article__body lead">
          <h2 class="well__title title title--section">Over Evean</h2>
          <p class="leader trailer">Evean biedt thuiszorg, verpleeg- en verzorgingshuiszorg en een breed scala aan gespecialiseerde zorg en behandeling, revalidatie, herstel, zorgondersteuning en welzijn. Evean staat voor het behoud van de identiteit van mensen. De behoefte van de cliënt staat hierbij voorop. Evean werd recent door het Nationale Business Succes Award instituut (NBSA) uitgeroepen tot branchewinnaar Thuiszorg.</p>
        </div>
      </div>
      <?php include '../../testimonials/eigenhuis.php'; ?>
      <?php include '../../landingpage/introduction.php'; ?>
      <?php include '../../landingpage/contact.php'; ?>
    </section>
  </body>
</html>
