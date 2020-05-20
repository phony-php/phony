<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class AddressTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function city_attribute(): void
    {
        $value = $this->🙃->address->city;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function city_with_state_attribute(): void
    {
        $value = $this->🙃->address->city_with_state;

        $this->assertMatchesRegularExpression('/\w+, \w+/', $value);
    }

    /** @test */
    public function street_name_attribute(): void
    {
        $value = $this->🙃->address->street_name;

        $this->assertMatchesRegularExpression('/\w+\s\w+/', $value);
    }

    /** @test */
    public function secondary_address_attribute(): void
    {
        $value = $this->🙃->address->secondary_address;

        $this->assertMatchesRegularExpression('/\w+\.?\s\d+/', $value);
    }

    /** @test */
    public function street_address_attribute(): void
    {
        $value = $this->🙃->address->street_address;

        $this->assertMatchesRegularExpression("/^\d+\s[A-Za-z']+\s[A-Za-z']+/", $value);
    }

    /** @test */
    public function street_address_with_secondary_address_attribute(): void
    {
        $value = $this->🙃->address->street_address_with_secondary_address;

        $this->assertMatchesRegularExpression(
            "/\d+\s[A-Za-z0-9\']+\s\w+\s\w+\.?\s\d+/",
            $value
        );
    }

    /** @test */
    public function building_number_attribute(): void
    {
        $value = $this->🙃->address->building_number;

        $this->assertMatchesRegularExpression('/\d+/', $value);
    }

    /** @test */
    public function community_attribute(): void
    {
        $value = $this->🙃->address->community;

        $this->assertMatchesRegularExpression('/\w+\s\w+/', $value);
    }

    /** @test */
    public function mail_box_attribute(): void
    {
        $value = $this->🙃->address->mail_box;

        $this->assertMatchesRegularExpression('/[\w ]+\d+/', $value);
    }

    /** @test */
    public function time_zone_attribute(): void
    {
        $value = $this->🙃->address->time_zone;

        $this->assertMatchesRegularExpression('/\w+\/\w+/', $value);
    }

    /** @test */
    public function street_suffix_attribute(): void
    {
        $value = $this->🙃->address->street_suffix;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function city_suffix_attribute(): void
    {
        $value = $this->🙃->address->city_suffix;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function city_prefix_attribute(): void
    {
        $value = $this->🙃->address->city_prefix;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function state_abbreviation_attribute(): void
    {
        $value = $this->🙃->address->state_abbreviation;

        $this->assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    /** @test */
    public function state_attribute(): void
    {
        $value = $this->🙃->address->state;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function country_attribute(): void
    {
        $value = $this->🙃->address->country;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function country_code_attribute(): void
    {
        $value = $this->🙃->address->country_code;

        $this->assertMatchesRegularExpression('/[A-Z]{2}/', $value);
    }

    /** @test */
    public function country_code_long_attribute(): void
    {
        $value = $this->🙃->address->country_code_long;

        $this->assertMatchesRegularExpression('/[A-Z]{3}/', $value);
    }

    /** @test */
    public function full_address_attribute(): void
    {
        $value = $this->🙃->address->full_address;

        $this->assertIsString($value);
    }

    /** @test */
    public function default_country_attribute(): void
    {
        $value = $this->🙃->address->default_country;

        $this->assertIsString($value);
    }

    // endregion

    // region Methods

    /** @test */
    public function zip_code_method(): void
    {
        $value = $this->🙃->address->zip_code();

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    /** @test */
    public function zip_code_method_with_state_abbreviation(): void
    {
        $value = $this->🙃->address->zip_code('CO');

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    /** @test */
    public function country_by_code_method(): void
    {
        $value = $this->🙃->address->country_by_code('NL');

        $this->assertEquals('Netherlands', $value);
    }

    /** @test */
    public function country_by_name_method(): void
    {
        $value = $this->🙃->address->country_by_name('united_states');

        $this->assertEquals('US', $value);
    }

    /** @test */
    public function latitude_method_returns_a_float_within_the_range(): void
    {
        $value = $this->🙃->address->latitude();

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-90, $value);
        $this->assertLessThanOrEqual(90, $value);
    }

    /** @test */
    public function longitude_method_returns_a_float_within_the_range(): void
    {
        $value = $this->🙃->address->longitude();

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-180, $value);
        $this->assertLessThanOrEqual(180, $value);
    }

    /** @test */
    public function coordinate_method_returns_an_array_with_latitude_and_longitude(): void
    {
        $value = $this->🙃->address->coordinate();

        $this->assertIsArray($value);
        $this->assertCount(2, $value);

        // latitude()
        $this->assertIsFloat($value[0]);
        $this->assertGreaterThanOrEqual(-90, $value[0]);
        $this->assertLessThanOrEqual(90, $value[0]);

        // longitude()
        $this->assertIsFloat($value[1]);
        $this->assertGreaterThanOrEqual(-180, $value[1]);
        $this->assertLessThanOrEqual(180, $value[1]);
    }

    // endregion

    // region Methods as Attributes

    /** @test */
    public function zip_code_method_as_attribute(): void
    {
        $value = $this->🙃->address->zip_code;

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    /** @test */
    public function latitude_method_as_attribute(): void
    {
        $value = $this->🙃->address->latitude;

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-90, $value);
        $this->assertLessThanOrEqual(90, $value);
    }

    /** @test */
    public function longitude_method_as_attribute(): void
    {
        $value = $this->🙃->address->longitude;

        $this->assertIsFloat($value);
        $this->assertGreaterThanOrEqual(-180, $value);
        $this->assertLessThanOrEqual(180, $value);
    }

    /** @test */
    public function coordinate_method_as_attribute(): void
    {
        $value = $this->🙃->address->coordinate;

        $this->assertIsArray($value);
        $this->assertCount(2, $value);

        // latitude()
        $this->assertIsFloat($value[0]);
        $this->assertGreaterThanOrEqual(-90, $value[0]);
        $this->assertLessThanOrEqual(90, $value[0]);

        // longitude()
        $this->assertIsFloat($value[1]);
        $this->assertGreaterThanOrEqual(-180, $value[1]);
        $this->assertLessThanOrEqual(180, $value[1]);
    }

    // endregion

    // region Method Aliases

    /** @test */
    public function zip_method_alias(): void
    {
        $value = $this->🙃->address->zip();

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    /** @test */
    public function postcode_method_alias(): void
    {
        $value = $this->🙃->address->postcode();

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    // endregion

    // region Method Aliases as Attributes

    /** @test */
    public function zip_method_alias_as_attribute(): void
    {
        $value = $this->🙃->address->zip;

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    /** @test */
    public function postcode_method_alias_as_attribute(): void
    {
        $value = $this->🙃->address->postcode;

        $this->assertMatchesRegularExpression('/^\d+-?\d*$/', $value);
    }

    // endregion
}
