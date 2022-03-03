<?php

namespace AppTests;

use MyApp\Person;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;

class PersonTest extends TestCase
{
    /**
     * @var Person
     */
    protected $person;

    /**
     * @before
     */
    public function initialize()
    {
        $this->person = new Person();
    }

    /**
     * @test
     */
    public function assignsAndRetrievesFirstName()
    {
        $this->person->setFirstName('John');

        $this->assertEquals('John', $this->person->getFirstName());
    }

    /**
     * @test
     */
    public function assignsAndRetrievesLastName()
    {
        $this->person->setLastName('Doe');

        $this->assertEquals('Doe', $this->person->getLastName());
    }

    /**
     * @test
     */
    public function setsFirstNameViaMagicSetter()
    {
        $this->person->firstName = 'John';
        // Mesmo que:
        // $this->person->setFirstName('John');

        $this->assertEquals('John', $this->person->getFirstName());
    }

    /**
     * @test
     */
    public function setsLastNameViaMagicSetter()
    {
        $this->person->lastName = 'Doe';
        // Mesmo que:
        // $this->person->setLastName('John');

        $this->assertEquals('Doe', $this->person->getLastName());
    }

    /**
     * @test
     */
    public function setsFirstAndLastNameViaMagicSetter()
    {
        $this->person->firstName = 'John';
        $this->person->lastName = 'Doe';

        $this->assertEquals('John', $this->person->getFirstName());
        $this->assertEquals('Doe', $this->person->getLastName());
    }
}
