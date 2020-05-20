<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class AncientTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function god_attribute(): void
    {
        $value = $this->🙃->ancient->god;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function primordial_attribute(): void
    {
        $value = $this->🙃->ancient->primordial;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function titan_attribute(): void
    {
        $value = $this->🙃->ancient->titan;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function hero_attribute(): void
    {
        $value = $this->🙃->ancient->hero;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    // endregion
}
