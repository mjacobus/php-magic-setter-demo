<?php

namespace MyApp;

class Person
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __set($propertyName, $propertyValue)
    {
        if ($propertyName === 'firstName') {
            $this->firstName = $propertyValue;
        }

        if ($propertyName === 'lastName') {
            $this->lastName = $propertyValue;
        }
    }
}
