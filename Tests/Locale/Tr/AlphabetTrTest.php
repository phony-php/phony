<?php

namespace Phonyland\Tests\Standard;

use Phonyland\Tests\Locale\Tr\BaseTrTest;

class AlphabetTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function uppercase_letter_attribute(): void
    {
        $value = $this->🙃->alphabet->uppercase_letter;

        $this->assertEquals(1, mb_strlen($value, 'utf8'));
    }

    /** @test */
    public function lowercase_letter_attribute(): void
    {
        $value = $this->🙃->alphabet->lowercase_letter;

        $this->assertEquals(1, mb_strlen($value, 'utf8'));
    }

    /** @test */
    public function letter_attribute(): void
    {
        $value = $this->🙃->alphabet->letter;

        $this->assertEquals(1, mb_strlen($value, 'utf8'));
    }

    // endregion
}
