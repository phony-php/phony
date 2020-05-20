<?php

namespace Phonyland\Tests\Locale\Tr;

use Phonyland\Locale;
use Phonyland\Phony;
use Phonyland\Tests\BaseTest;

abstract class BaseTrTest extends BaseTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->🙃 = new Phony(Locale::tr);
    }
}
