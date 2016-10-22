<?php include '../../include.php'; ?>
<!DOCTYPE html>
<html lang="nl">
  <?php include '../../head.php'; ?>
  <body class="<?php echo $debug ? 'debug-layout ' : ''; ?>">
    <nav class="navbar navbar">
      <ol class="menu menu--hero list--reset fx bleed media" id="menu">
        <li class="gutters meta meta--hero media__stretcher">
          <a class="menu__home fx" href="/"><span class="is-narrative">Home</span></a>
          <a class="menu__item anchor--shy is-current is-active" href="/cases/">Cases</a>
        </li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/over-brickson/">Over Brickson</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx is-active" href="/cases/">Cases</a></li>
        <li><a class="menu__item anchor--shy meta meta--tiny fx" href="/werken-bij-brickson/">Werken bij Brickson</a></li>
      </ol>
    </nav>
  </body>
</html>
