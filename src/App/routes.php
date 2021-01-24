<?php 

    $app->get("/", function () {
        return "Hello Silex From Route1!";
    });

    $app->get("/route2", function () {
        return new Symfony\Component\HttpFoundation\Response("Hello Silex From Route2");
    });