<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class SlackEmojiTest extends BaseTest
{
    protected string $regex = '/^:([\w-]+):$/';

    // region Attributes

    /** @test */
    public function people_attribute(): void
    {
        $value = $this->🙃->slack_emoji->people;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function nature_attribute(): void
    {
        $value = $this->🙃->slack_emoji->nature;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function food_and_drink_attribute(): void
    {
        $value = $this->🙃->slack_emoji->food_and_drink;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function celebration_attribute(): void
    {
        $value = $this->🙃->slack_emoji->celebration;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function activity_attribute(): void
    {
        $value = $this->🙃->slack_emoji->activity;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function travel_and_place_attribute(): void
    {
        $value = $this->🙃->slack_emoji->travel_and_place;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function object_and_symbol_attribute(): void
    {
        $value = $this->🙃->slack_emoji->object_and_symbol;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function custom_attribute(): void
    {
        $value = $this->🙃->slack_emoji->custom;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    /** @test */
    public function emoji_attribute(): void
    {
        $value = $this->🙃->slack_emoji->emoji;

        $this->assertMatchesRegularExpression($this->regex, $value);
    }

    // endregion
}
