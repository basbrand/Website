<?php

require './vendor/autoload.php';
require './lib/model.php';
require './functions.php';
require './configuration.php';

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use \Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Generator\UrlGenerator;

// $development = true;
// $debug = true;

/**
 * This is to be a simple quick and dirty router/ data dispatcher.
 */
// We need to register some urls.
// These urls are to be pasted into some place so we can redirect them.

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => $development ? null : 'cache',
    'debug' => $debug
));

if( $debug ) {
  $twig->addExtension(new Twig_Extension_Debug());
}

$routes = new RouteCollection();

// Here we will register all the routes;
$routes->add('frontpage',     new Route('/{_locale}', array('method' => 'frontpage', 'template' => '', '_locale' => 'en')));
$routes->add('publications',  new Route('/{_locale}/publications', array('method' => 'publications', '_locale' => 'en')));
$routes->add('resources',     new Route('/{_locale}/resources', array('method' => 'resources', '_locale' => 'en')));
$routes->add('events',        new Route('/{_locale}/events', array('method' => 'events', 'template' => '', '_locale' => 'en')));
$routes->add('blog',          new Route('/{_locale}/blog', array('method' => 'blog', '_locale' => 'en')));
$routes->add('news',          new Route('/{_locale}/news', array('method' => 'layout', 'template' => 'news', '_locale' => 'en')));

$routes->add('post',          new Route('/{_locale}/article/{id}', array('method' => 'single_post', 'template' => 'post', '_locale' => 'en')));
$routes->add('event',         new Route('/{_locale}/events/{id}', array('method' => 'single_event', 'template' => 'event', '_locale' => 'en')));

// Secondary menu
$routes->add('programmes',    new Route('/{_locale}/programmes', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('regions',       new Route('/{_locale}/regions', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('topics',        new Route('/{_locale}/topics', array('method' => 'topics', '_locale' => 'en')));

// Network menu
$routes->add('cta',               new Route('/{_locale}/cta', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('cta.about',         new Route('/{_locale}/cta/about', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('cta.contact',       new Route('/{_locale}/cta/contact', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('cta.opportunities', new Route('/{_locale}/cta/working-with-cta', array('method' => 'frontpage', '_locale' => 'en')));
$routes->add('press',             new Route('/{_locale}/press', array('method' => 'layout', 'template' => 'press', '_locale' => 'en')));

// Secondary menu
$routes->add('youth',        new Route('/{_locale}/channels/youth', array('method' => 'youth', '_locale' => 'en')));
$routes->add('woman',        new Route('/{_locale}/channels/woman', array('method' => 'frontpage', 'template' => 'channel', '_locale' => 'en')));

$matcher = new UrlMatcher($routes, new RequestContext('/'));
$match = $matcher->match($_SERVER['PATH_INFO']);

// var_dump($match);

$router = function($route, $parameters) use ($routes, $match) {
    $generator = new UrlGenerator($routes, new RequestContext());

    if(!array_key_exists('_locale', $parameters)) {
        $parameters['_locale'] = $match['_locale'];
    }
    return '/index.php' . $generator->generate($route, $parameters);
};
$twig->addFunction(new Twig_SimpleFunction('route', $router));

$resizer = function($image, $width, $height) {
    $uri = parse_url($image);

    if(strpos($uri['host'], 'cloudinary') === false) {
        return $image;
    }

    $resize = 'c_fill,h_' . $height . ',w_' . $width;
    $path = explode('/', $image);
    $file = array_pop($path);
    array_pop($path);
    $path[] = $resize;
    $path[] = $file;

    return implode('/', $path);
};
$twig->addFunction(new Twig_SimpleFunction('resize', $resizer));

call_user_func($match['method'], $twig, Model::getInstance(), $match, (array_key_exists('template', $match) ? $match['template'] : 'null'));
