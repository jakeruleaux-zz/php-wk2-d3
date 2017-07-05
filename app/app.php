<?php
    date_default_timezone_set('America/LosAngeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    session_start();
    if (empty($_SESSION['list_of_anagrams'])) {
            $_SESSION['list_of_anagrams'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    $app->get('/', function () use ($app) {
        return $app['twig']->render('anagram.html.twig', array('anagram' => Anagram::getAll()));
    })

    return $app;
?>
