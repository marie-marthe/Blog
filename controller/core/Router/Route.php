<?php

namespace app\core\Router;

/**
 * Class Route
 * @package app\core\Router
 * Represent a match routes
 */

class Route {

    /**
     * Route constructor.
     *
     * @var string
     */

    private $name;

     /**
     * @var callable
     */

     private $callback;

      /**
      * @var array
     */

      private $parameters;




    public function __construct(string $name, callable $callback,  array $parameters)
    {

        $this->name=$name;
        $this->callback=$callback;
        $this->parameters=$parameters;
    }


    public function getName(): string {

        return $this->name;

    }

    /**
     * @return callable
     */

    public function getCallback(): callable {

        return $this->callback;


    }


    /**
     * Get the URL parameters
     * @return string[]
     */

    public function getParams(): array {

        return $this->parameters


    }
}