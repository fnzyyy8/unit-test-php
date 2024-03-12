<?php

namespace Rrim\PhpUnitTesting;

use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    private Person $person;

    #[Before]
    protected function createPerson(): void
    {
        $this->person = new Person("Anto");
    }

    public function testSuccess()
    {

        $this->assertEquals("Hi Budi, my name is Anto", $this->person->sayHello("Budi"));
    }

    public function testException()
    {

        $this->expectException(\exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput()
    {
        $this->expectOutputString("Good bye Anto");
        $this->person->sayGoodbye();
    }
}
