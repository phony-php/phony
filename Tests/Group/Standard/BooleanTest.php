<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class BooleanTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function boolean_attribute(): void
    {
        $value = $this->🙃->boolean->boolean;

        $this->assertIsBool($value);
    }

    // endregion

    // region Methods

    /** @test */
    public function boolean_method_returns_a_boolean_value(): void
    {
        $value = $this->🙃->boolean->boolean();

        $this->assertIsBool($value);
    }

    /** @test */
    public function boolean_method_with_100_truePercentage_returns_always_true(): void
    {
        $value = $this->🙃->boolean->boolean(100);

        $this->assertTrue($value);
    }

    /** @test */
    public function boolean_method_with_0_truePercentage_returns_always_false(): void
    {
        $value = $this->🙃->boolean->boolean(0);

        $this->assertFalse($value);
    }

    // endregion
}
