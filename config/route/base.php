<?php
/**
 * Routes.
 */

 /**
 * Route for start
 * @param "title" sending title as Start, cool.
 */
$app->router->add("", function () use ($app) {
    $app->view->add("mePage/header", ["title" => "Start"]);
    $app->view->add("navbar2/navbar");
    $app->view->add("mePage/startPage");
    //  $app->view->add("test1/home");

    $app->response->setBody([$app->view, "render"])
               ->send();
});



 /**
 * Route for Home
 * @param "title" sending title as Home, cool.
 */
$app->router->add("home", function () use ($app) {
    $app->view->add("mePage/header", ["title" => "Home"]);
    $app->view->add("mePage/home");
    //  $app->view->add("test1/home");

    $app->response->setBody([$app->view, "render"])
               ->send();
});




 /**
 * Route for About
 * @param "title" sending title as About, cool.
 */
$app->router->add("about", function () use ($app) {
    $app->view->add("mePage/header", ["title" => "About"]);
    $app->view->add("mePage/about");

    $app->response->setBody([$app->view, "render"])
               ->send();
});



 /**
 * Route for Report
 * @param "title" sending title as Report, cool.
 */
$app->router->add("report", function () use ($app) {
    $app->view->add("mePage/header", ["title" => "Report"]);
    $app->view->add("mePage/report");

    $app->response->setBody([$app->view, "render"])
               ->send();
});



$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];

    $app->response->sendJson($data);
});
