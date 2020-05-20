<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class ArtistTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name_attribute(): void
    {
        $value = $this->🙃->artist->name;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    // endregion
}
