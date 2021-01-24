<?php 

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\JsonResponse;

    $app->get("/", function () {
        return "Hello Silex From Route1!";
    });

    $app->get("/route2", function () {
        return new Response("Hello Silex From Route2");
    });

    $app->get("/jsonRoute", function () {
        return new JsonResponse(['data' => ['hello' => 'json']]);
        // $response->headers->set('Content-Type', 'application/json');
    });