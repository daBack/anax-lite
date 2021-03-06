<?php
/**
 * Routes for session page.
 */

/**
*   Route for session
*/
    $app->router->add("session", function () use ($app) {
        $app->view->add("mePage/header", ["title" => "Session"]);
        $app->view->add("mePage/session/session");

        $app->response->setBody([$app->view, "render"])
                ->send();
    });



     /**
     *   Route for increment
     */
    $app->router->add("increment", function () use ($app) {
        $app->view->add("mePage/header", ["title" => "Session | increment"]);
        $app->view->add("mePage/session/increment");

        $app->response->setBody([$app->view, "render"])
                    ->send();
    });



    /**
    *   Route for decrement
    */
    $app->router->add("decrement", function () use ($app) {
        $app->view->add("mePage/header", ["title" => "Session | decrement"]);
        $app->view->add("mePage/session/decrement");

        $app->response->setBody([$app->view, "render"])
                    ->send();
    });



    /**
    *   Route for status
    */
    $app->router->add("Sstatus", function () use ($app) {
        $app->view->add("mePage/header", ["title" => "Session | status"]);
        $app->view->add("mePage/session/status");

        $app->response->setBody([$app->view, "render"])
                    ->send();
    });




    /**
    *   Route for dump
    */
    $app->router->add("dump", function () use ($app) {
        $app->view->add("mePage/header", ["title" => "Session | dump"]);
        $app->view->add("mePage/session/dump");

        $app->response->setBody([$app->view, "render"])
                ->send();
    });




    /**
    *   Route for destroy
    */
     $app->router->add("destroy", function () use ($app) {
         $app->view->add("mePage/header", ["title" => "Session | destroy"]);
         $app->view->add("mePage/session/destroy");

         $app->response->setBody([$app->view, "render"])
                    ->send();
     });
