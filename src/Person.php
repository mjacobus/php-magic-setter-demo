<?php

namespace MyApp;

class Person
{
    /**
     * @var string
     */
    private $firstName;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}
