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
}
