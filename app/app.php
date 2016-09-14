<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    // session_start();
    // if (empty($_SESSION['collection'])) {
    //     $_SESSION['collection'] = array();
    // }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

  //loads actual twig file
    $app->get("/", function() use ($app) {
      return $app['twig']->render("home.html.twig");
    });

  //loads basic php
    $app->post("/rpsResult", function() use ($app) {
      $newGame = new RockPaperScissors;
      $result = $newGame->play($_POST['player1'], $_POST['player2']);
      return $app['twig']->render("result.html.twig", array('result'=>$result));
    });

    return $app;
?>
