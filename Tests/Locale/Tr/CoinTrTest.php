<?php

namespace Phonyland\Tests\Locale\Tr;

class CoinTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function flip_attribute(): void
    {
        $value = $this->🙃->coin->flip;

        $this->assertIsString($value);
    }

    // endregion
}
