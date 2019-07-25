<?php

namespace Tests\Myblog;

use core\Application;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;


class Applicationtest extends TestCase {


    public function testRedirectTrailingSlash()
    {
        $application = new Application();
        $request = new ServerRequest('GET', '/demolash/');
        $response = $application->run($request);
        $this->assertContains('/demolash', $response->getHeader('Location'));
        $this->assertEquals(301, $response->getStatusCode());
    }


    public function testBlog ()
    {
        $application = new Application();
        $request = new ServerRequest('GET', '/blog/');
        $response = $application->run($request);
        $this->assertContains('<h1>BIENVENUE SUR LE BOG</h1>', (string)$response->getBody());
        $this->assertEquals(200, $response->getStatusCode());
    }


    public function testError404() {

        $application = new Application();
        $request = new ServerRequest('GET', '/aze/');
        $response = $application->run($request);
        $this->assertContains('<h1>ERREUR 404</h1>', (string)$response->getBody());
        $this->assertEquals(404, $response->getStatusCode());
    }

}

