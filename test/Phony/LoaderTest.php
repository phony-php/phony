<?php

namespace Phony\Test\Phony;

use Phony\Phony;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class LoaderTest extends TestCase
{
    /** @test */
    public function throws_exception_if_file_not_found(): void
    {
        $this->expectException(RuntimeException::class);

        $🙃 = new Phony('invalid-locale');

        $🙃->alphabet->uppercase_letter;
    }
}
