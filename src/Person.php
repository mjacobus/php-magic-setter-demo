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
            return $this->setFirstName($propertyValue);
        }

        if ($propertyName === 'lastName') {
            return $this->setLastName($propertyValue);
        }

        throw new \Exception("property '$propertyName' does not exist");
    }
}
