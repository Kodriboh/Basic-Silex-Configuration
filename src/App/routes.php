<?php 

    $app->get("/", function () {
        return "Hello Silex From Routes!";
    });

    $app->get("/route2", function () {
        return "This is a test for route 2";
    });