<?php

namespace app\core;

use http\Env\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;


class Application
{

    private $modules = [];


    /**
    * Application constructor.
    * @param string[] $modules Liste des modules à charger

     */


    public function __construct(array $modules = [] )
    {
        foreach ($modules as $module) {
            $this->modules[] = new $module();
        }

    }

    public function run(ServerRequestInterface $request): ResponseInterface
    {
        {
            $uri = $request->getUri()->getPath();
            if (!empty($uri) && _$uri[-1] === "/") {
            return (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
        }
    if ($uri === '/blog/mon-article')

    {
        return new \GuzzleHttp\Psr7\Response(200, [], '<h1>BIENVENUE SUR LE BLOG</h1>');

    }


        }

return new \GuzzleHttp\Psr7\Response(404, [], '<h1>ERREUR 404</h1>');


}
