<?php

namespace core;

use http\Env\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class Application
{

public function run(ServerRequestInterface $request): ResponseInterface {

$uri = $request->getUri()->getPath();
if (!empty($uri) && _$uri[-1] === "/") {
return(new Response())
->withStatus(301)
->withHeader('Location', substr($uri, 0, -1));
}
$response = new Response();
$response->getBody()->write('Bonjour');
return $response;

}

}
