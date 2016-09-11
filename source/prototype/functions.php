<?php

function frontpage($twig, $model, $route) {
    $client = $model->getScrClient();

    $post = $client->getArticle(array('articleId' => '68fbf1b7-2cf0-4e7e-80a4-a441ad0dd039'));
    $post['label'] = array();
    $post['label'][] = 'Featured Story';

    $women = $client->getChannelArticles(array('channelId' => '8c713f30-eab9-4042-8761-e286bfa4445c', 'language' => $route['_locale'], 'limit' => 5, 'skip' => 5));
    $brussels = $client->getChannelArticles(array('channelId' => 'a61cc3adbcfe4573180e34da073f2951', 'language' => $route['_locale'], 'limit' => 5));
    $cassave = $client->getChannelArticles(array('channelId' => 'e3b7f5ec-1548-4a9d-a400-fbf953137db5', 'language' => $route['_locale'], 'limit' => 5));
    $western = $client->getChannelArticles(array('channelId' => '0778e33a-cc0a-4579-9e88-fe79a666fbeb', 'language' => $route['_locale'], 'limit' => 5));
    $western_cassava = $client->getChannelArticles(array('channelId' => '49392d6e-cc5e-4480-8027-4b72f0f3282a', 'language' => $route['_locale'], 'limit' => 5));
    $women = $women['items'];
    $channels = $client->getChannels(array('language' => $route['_locale'], 'limit' => 5));

    $template = $twig->loadTemplate('frontpage.twig');

    echo $template->render(array(
        'item' => $post,
        'locale' => $route['_locale'],
        'channels' => $channels['items'],
        'women_first' => array_shift($women),
        'women' => $women,
        'brussels' => $brussels['items'],
        'cassava' => $cassave['items'],
        'western' => $western['items'],
        'western_cassava' => $western_cassava['items']
    ));
};

function youth($twig, $model, $route) {
    $client = $model->getScrClient();
    $post = $client->getArticle(array('articleId' => '3942cc12-028f-41c0-aea3-17d4bdc501d6'));
    $post['label'] = array();
    $post['label'][] = 'Featured Story';

    $articles = $client->getChannelArticles(array('channelId' => '7121d55a-e7eb-4df7-9828-3b766af85898', 'language' => $route['_locale'], 'limit' => 20, 'skip' => 5));

    $template = $twig->loadTemplate('youth.twig');
    echo $template->render(array(
      'feature' => $post,
      'articles' => $articles['items']
    ));
};

function publications($twig, $model) {
    $template = $twig->loadTemplate('publications.twig');
    echo $template->render($model->fetchStub());
};

function resources($twig, $model) {
    $template = $twig->loadTemplate('resources.twig');
    echo $template->render($model->fetchStub());
};

function events($twig, $model, $route) {
    $featured = $model->getScrClient()->getEvent(array('eventId' => '295ee33e-72a4-4695-85e4-ef585f54b211'));
    $events = $model->getScrClient()->getEvents(array('language' => $route['_locale']));

    // $post = array_shift($posts['items'])
    $featured['headline'] = $featured['name'];
    $featured['isCrowned'] = true;
    $featured['label'][] = 'Upcoming Events';

    // var_dump($post);
    // die('called');

    echo render($twig, 'events', array('items' => $events['items'], 'featured' => $featured, 'locale' => $route['_locale'] ));
};

function blog($twig, $model) {
    $template = $twig->loadTemplate('blog.twig');
    echo $template->render($model->fetchStub());
};

function topics($twig, $model) {
    $template = $twig->loadTemplate('topics.twig');
    echo $template->render($model->fetchStub());
};

function single_post($twig, $model, $route, $template) {
    $post = $model->getScrClient()->getArticle(array('articleId' => $route['id']));

    echo render($twig, $template, array('item' => $post, 'locale' => $route['_locale']));
}

function single_event($twig, $model, $route, $template) {
    $post = $model->getScrClient()->getEvent(array('eventId' => $route['id']));

    echo render($twig, $template, array('item' => $post, 'locale' => $route['_locale']));
}

// Global functions.

function layout($twig, $model, $route, $template) {
    echo render($twig, $template, array());
};

function render($twig, $layout, $data) {
    return $twig->render($layout . '.twig', $data);
}
