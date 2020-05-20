<?php

namespace Phonyland\Tests\Phony;

use Phonyland\Tests\BaseTest;

class FakeOperationTest extends BaseTest
{
    /** @test */
    public function can_numerify_with_hash_sign(): void
    {
        $value = (int) $this->callPrivateFakeMethod('numerify', '###');

        $this->assertMatchesRegularExpression('/^[\d]{0,3}$/', $value);
    }

    /** @test */
    public function can_hexify_with_hash_sign(): void
    {
        $value = $this->callPrivateFakeMethod('hexify', '###');

        $this->assertMatchesRegularExpression('/^[a-z0-9]{3}$/', $value);
    }

    /** @test */
    public function can_hexify_arrays(): void
    {
        $testArray = [
            '#',
            '##',
            '###',
        ];

        $result = $this->callPrivateFakeMethod('hexify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[a-z0-9]{1,3}$/', $item);
        }
    }

    /** @test */
    public function can_numerify_with_percentage_sign(): void
    {
        $value = (int) $this->callPrivateFakeMethod('numerify', '%%%');

        $this->assertMatchesRegularExpression('/^[\d]{3}$/', $value);
    }

    /** @test */
    public function can_numerify_arrays(): void
    {
        $testArray = [
            '##',
            '%%',
            '#%',
        ];

        $result = $this->callPrivateFakeMethod('numerify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[\d]{1,2}$/', (int) $item);
        }
    }

    /** @test */
    public function can_letterify(): void
    {
        $value = $this->callPrivateFakeMethod('letterify', '???');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_letterify_arrays(): void
    {
        $testArray = [
            '?',
            '??',
            '???',
        ];

        $result = $this->callPrivateFakeMethod('letterify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[A-Za-z]{1,3}$/', $item);
        }
    }

    /** @test */
    public function can_bothify(): void
    {
        $value = $this->callPrivateFakeMethod('bothify', '?#%');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_bothify_with_asterix(): void
    {
        $value = $this->callPrivateFakeMethod('bothify', '***');

        $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
    }

    /** @test */
    public function can_bothify_arrays(): void
    {
        $testArray = [
            '#',
            '?',
            '*',
            '**',
            '#?*',
        ];

        $result = $this->callPrivateFakeMethod('bothify', $testArray);

        foreach ($result as $item) {
            $this->assertMatchesRegularExpression('/^[\w]{1,3}$/', $item);
        }
    }
}
