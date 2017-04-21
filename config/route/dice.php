<?php



/**
* Route for diceGame
* @param "title" sending title as player 1, cool.
*/
$app->router->add("dice", function () use ($app) {
   $app->view->add("mePage/header", ["title" => "Player 1"]);
   $app->view->add("100dice/player1");

   $app->response->setBody([$app->view, "render"])
              ->send();
});
