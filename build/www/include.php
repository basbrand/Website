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

// $portrait = "(orientation: portrait)";
// $landscape = "(orientation: landscape)";
$portrait = "(max-aspect-ratio: 6/5)";
$landscape = "(min-aspect-ratio: 6/5)";

$extension = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
$analytics_code = '';
switch($extension) {
    case 'nl':
        $analytics_code = 'UA-84990043-1';
        break;
    case 'eu':
        $analytics_code = 'UA-84990043-2';
        break;
}

$debug = false;
