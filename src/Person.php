<?php

namespace MyApp;

class Person
{
    /**
     * @var string
     */
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
