<?php include '../../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <?php include '../../head.php'; ?>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>p-case">
    <section class="panel is-active">
      <?php include 'catalog.php'; ?>
      <div class="article">
        <div class="article__body well">
          <h1 class="well__title title">Vereniging Eigen Huis</h1>
          <h2 class="well__title title title--section">De uitdaging</h2>
          <p>Nam non diam nec ipsum consequat convallis. Sed nec ultricies neque. Nulla facilisi. Donec eget accumsan diam. Donec non eros ligula. Mauris finibus nibh pharetra enim consectetur, ac placerat lectus luctus. Donec laoreet sollicitudin placerat. Donec ante erat, pellentesque vitae vestibulum eget, cursus vel tellus. Maecenas vulputate tincidunt ultricies. Nam ex ex, auctor ut semper ac, ultrices sed nisl. Morbi iaculis ullamcorper nibh, quis posuere metus imperdiet vel. Morbi vitae libero sem.</p>
          <blockquote class="quote lead leader"><p>Met oog en gevoel voor de mensen in je organisatie gaat Brickson altijd een stap verder.</p></blockquote>
        </div>
        <div class="well leader--hero trailer--hero">
            <div class="grid grid--tile">
              <figure class="grid__cell tile cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/challenge--tile--smartphone.jpg"
                  sizes="
                    (min-width: 1024x) 1024px,
                    (min-width: 768px) 384px,
                    (min-width: 520px) 520px,
                    (min-width: 320px) 320px,
                    280w"
                  srcset="
                    /images/content/challenge--tile--tablet--2x.jpg 1040w,
                    /images/content/challenge--tile--tablet.jpg 320w,
                    /images/content/challenge--tile--smartphone.jpg 240w,
                    /images/content/challenge--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <p></p>
                </figcaption>
              </figure>
              <figure class="grid__cell tile cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/concept--tile--smartphone.jpg"
                  srcset="
                    /images/content/concept--tile--tablet--2x.jpg 1040w,
                    /images/content/concept--tile--tablet.jpg 320w,
                    /images/content/concept--tile--smartphone.jpg 240w,
                    /images/content/concept--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <p></p>
                </figcaption>
              </figure>
              <figure class="grid__cell tile cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/design--tile--smartphone.jpg"
                  srcset="
                    /images/content/design--tile--tablet--2x.jpg 1040w,
                    /images/content/design--tile--tablet.jpg 320w,
                    /images/content/design--tile--smartphone.jpg 240w,
                    /images/content/design--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <p></p>
                </figcaption>
              </figure>
              <figure class="grid__cell tile cover">
                <img
                  class="cover__image"
                  alt=""
                  src="/images/content/build--tile--smartphone.jpg"
                  srcset="
                    /images/content/build--tile--tablet--2x.jpg 1040w,
                    /images/content/build--tile--tablet.jpg 320w,
                    /images/content/build--tile--smartphone.jpg 240w,
                    /images/content/build--tile--smartphone--2x.jpg 2x">
                <figcaption class="tile__body gutters">
                  <p></p>
                </figcaption>
              </figure>
            </div>
        </div>
        <div class="article__body well">
          <h2 class="well__title title title--section">De oplossing</h2>
          <p>Nam non diam nec ipsum consequat convallis. Sed nec ultricies neque. Nulla facilisi. Donec eget accumsan diam. Donec non eros ligula. Mauris finibus nibh pharetra enim consectetur, ac placerat lectus luctus. Donec laoreet sollicitudin placerat. Donec ante erat, pellentesque vitae vestibulum eget, cursus vel tellus. Maecenas vulputate tincidunt ultricies. Nam ex ex, auctor ut semper ac, ultrices sed nisl. Morbi iaculis ullamcorper nibh, quis posuere metus imperdiet vel. Morbi vitae libero sem.</p>
        </div>
        <div class="article__body well">
          <h2 class="well__title title title--section">Het resultaat</h2>
          <p>Nam non diam nec ipsum consequat convallis. Sed nec ultricies neque. Nulla facilisi. Donec eget accumsan diam. Donec non eros ligula. Mauris finibus nibh pharetra enim consectetur, ac placerat lectus luctus. Donec laoreet sollicitudin placerat. Donec ante erat, pellentesque vitae vestibulum eget, cursus vel tellus. Maecenas vulputate tincidunt ultricies. Nam ex ex, auctor ut semper ac, ultrices sed nisl. Morbi iaculis ullamcorper nibh, quis posuere metus imperdiet vel. Morbi vitae libero sem.</p>
        </div>
        <div class="article__body well trailer-inside--hero">
          <h2 class="well__title title title--section">De tools</h2>
          <p>Nam non diam nec ipsum consequat convallis. Sed nec ultricies neque. Nulla facilisi. Donec eget accumsan diam. Donec non eros ligula. Mauris finibus nibh pharetra enim consectetur, ac placerat lectus luctus. Donec laoreet sollicitudin placerat. Donec ante erat, pellentesque vitae vestibulum eget, cursus vel tellus. Maecenas vulputate tincidunt ultricies. Nam ex ex, auctor ut semper ac, ultrices sed nisl. Morbi iaculis ullamcorper nibh, quis posuere metus imperdiet vel. Morbi vitae libero sem.</p>
        </div>
      </div>
      <?php include '../../testimonials/eigenhuis.php'; ?>
      <?php include '../../landingpage/introduction.php'; ?>
      <?php include '../../landingpage/contact.php'; ?>
    </section>
  </body>
</html>
