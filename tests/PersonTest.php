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
    public function assignsAndRetrievesName()
    {
        $this->person->setName('John Doe');

        $this->assertEquals('John Doe', $this->person->getName());
    }
}
