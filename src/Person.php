<?php

namespace Rrim\PhpUnitTesting;


class Person
{
    public function __construct(
        private string $name
    ) {
    }

    public function sayHello(?string $name): string
    {
        if ($name == null) throw new \Exception("Name is null");
        return "Hi $name, my name is {$this->name}";
    }

    public function sayGoodbye(): void
    {
        echo "Good bye $this->name";
    }
}
