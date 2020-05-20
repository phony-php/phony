<?php

namespace Phonyland\Tests\Standard;

use Phonyland\Tests\Locale\Tr\BaseTrTest;

class PersonTrTest extends BaseTrTest
{
    // region Attributes

    /** @test */
    public function male_first_name_attribute(): void
    {
        $value = $this->🙃->person->male_first_name;

        $this->assertIsString($value);
    }

    /** @test */
    public function female_first_name_attribute(): void
    {
        $value = $this->🙃->person->female_first_name;

        $this->assertIsString($value);
    }

    /** @test */
    public function last_name_attribute(): void
    {
        $value = $this->🙃->person->last_name;

        $this->assertTrue(mb_ereg_match('(\w+\.? ?){3,4}', $value));
    }

    // endregion

    // region Methods

    /** @test */
    public function initials_method_with_default_length(): void
    {
        $value = $this->🙃->person->initials();

        $this->assertEquals(6, mb_strlen($value, 'utf-8'));
    }

    /** @test */
    public function initials_method_with_given_length(): void
    {
        $times = random_int(2, 10);
        $value = $this->🙃->person->initials($times);

        $this->assertEquals($times * 2, mb_strlen($value, 'utf-8'));
    }

    // endregion
}
