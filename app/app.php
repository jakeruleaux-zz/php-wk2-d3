<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    session_start();
    if (empty($_SESSION['list_of_anagrams'])) {
            $_SESSION['list_of_anagrams'] = array();
    }
    use Symfony\Component\Debug\Debug;
    Debug::enable();
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    $app->get('/', function() use ($app) {
        return $app['twig']->render('anagram.html.twig', array('anagram' => AnagramMaker::getAll()));
        var_dump(AnagramMaker);
    });

    $app->post('/List', function() use($app) {
      $newList = new AnagramMaker($_POST['word'], $_POST['list']);
      $newList->save();
      return $app['twig']->render('List.html.twig', array('poops' => $newList));
    });

    return $app;
?>
