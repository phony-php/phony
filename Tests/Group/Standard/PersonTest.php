<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class PersonTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function name_attribute(): void
    {
        $value = $this->🙃->person->name;

        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $value);
    }

    /** @test */
    public function name_with_middle_attribute(): void
    {
        $value = $this->🙃->person->name_with_middle;

        $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
    }

    /** @test */
    public function first_name_attribute(): void
    {
        $value = $this->🙃->person->first_name;

        $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
    }

    /** @test */
    public function middle_name_attribute(): void
    {
        $value = $this->🙃->person->middle_name;

        $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
    }

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

        $this->assertMatchesRegularExpression('/(\w+\.? ?){3,4}/', $value);
    }

    /** @test */
    public function prefix_attribute(): void
    {
        $value = $this->🙃->person->prefix;

        $this->assertMatchesRegularExpression('/[A-Z][a-z]+\.?/', $value);
    }

    /** @test */
    public function suffix_attribute(): void
    {
        $value = $this->🙃->person->suffix;

        $this->assertMatchesRegularExpression('/[A-Z][a-z]*\.?/', $value);
    }

    // endregion

    // region Methods

    /** @test */
    public function initials_method_with_default_length(): void
    {
        $value = $this->🙃->person->initials();

        $this->assertEquals(3, strlen($value));
    }

    /** @test */
    public function initials_method_with_given_length(): void
    {
        $value = $this->🙃->person->initials($times = random_int(2, 10));

        $this->assertEquals($times, strlen($value));
    }

    // endregion

    // region Methods as Attributes

    /** @test */
    public function initials_method_as_an_attribute(): void
    {
        $value = $this->🙃->person->initials;

        $this->assertEquals(3, strlen($value));
    }

    // endregion
}
