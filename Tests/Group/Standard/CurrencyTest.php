<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class CurrencyTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name_attribute(): void
    {
        $value = $this->🙃->currency->name;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function code_attribute(): void
    {
        $value = $this->🙃->currency->code;

        $this->assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    /** @test */
    public function symbol_attribute(): void
    {
        $value = $this->🙃->currency->symbol;

        $this->assertIsString($value);
    }

    // endregion
}
