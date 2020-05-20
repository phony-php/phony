<?php

namespace Phonyland\Tests;

use Phonyland\Locale;
use Phonyland\Phony;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

abstract class BaseTest extends TestCase
{
    protected Phony $🙃;

    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::en);
    }

    protected function callPrivateFakeMethod($name, ...$args)
    {
        return $this->callPrivateMethod($this->🙃->alphabet, $name, ...$args);
    }

    protected function callPrivateMethod($instance, $name, ...$args)
    {
        $method = new ReflectionMethod($instance, $name);
        $method->setAccessible(true);

        return $method->invokeArgs($instance, $args);
    }
}
