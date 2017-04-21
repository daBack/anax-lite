<?php
$session = $app->session;
$dice = $app->dice;

$dice->diceCheck();
$session->set("tempPlayer", $dice->tempPlayer);
$session->set("dice", $dice->diceValue);
$app->response->redirect("dice");
