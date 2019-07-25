<?php

require '../vendor/autoload.php';


$application = new \core\Application([

    BlogModule::class

    ]) ;


$response= $application->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());

\Http\Response\send($response);