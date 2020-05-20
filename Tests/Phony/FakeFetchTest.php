<?php

namespace Phonyland\Tests\Phony;

use Phonyland\Tests\BaseTest;

class FakeFetchTest extends BaseTest
{
    /** @test */
    public function can_fetch_a_value(): void
    {
        $value = $this->callPrivateFakeMethod('fetch', 'alphabet.uppercase_letter');

        $this->assertNotNull($value);
    }

    /** @test */
    public function can_fetch_many_values(): void
    {
        $times = random_int(2, 10);
        $value = $this->callPrivateFakeMethod('fetchMany', $times, false, '', static function () {
            return 'value';
        });

        $this->assertCount($times, $value);
    }

    /** @test */
    public function can_fetch_many_values_as_a_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->callPrivateFakeMethod('fetchMany', $times, true, ' ', static function () {
            return 'value';
        });

        $this->assertEquals(
            $times - 1,
            substr_count($value, ' ')
        );
    }

    /** @test */
    public function can_fetch_many_values_as_glued_string(): void
    {
        $times = random_int(2, 10);
        $value = $this->callPrivateFakeMethod('fetchMany', $times, true, '🙃', static function () {
            return 'value';
        });

        $this->assertEquals(
            $times - 1,
            substr_count($value, '🙃')
        );
    }
}
