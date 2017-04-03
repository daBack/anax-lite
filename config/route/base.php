<?php
/**
 * Routes.
 */

 /**
 * Route for Home
 * @param "title" sending title as Home, cool.
 */
 $app->router->add("", function () use ($app) {
     $app->view->add("test1/header", ["title" => "Home"]);
     $app->view->add("test1/navbar");
     $app->view->add("test1/home");

     $app->response->setBody([$app->view, "render"])
                   ->send();
 });


 /**
 * Route for About
 * @param "title" sending title as About, cool.
 */
 $app->router->add("about", function () use ($app) {
     $app->view->add("test1/header", ["title" => "About"]);
     $app->view->add("test1/navbar");
     $app->view->add("test1/about");

     $app->response->setBody([$app->view, "render"])
                   ->send();
 });
