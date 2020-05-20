<?php

namespace Phonyland\Tests\Group\Standard;

use Phonyland\Tests\BaseTest;

class CosmereTest extends BaseTest
{
    // region Attributes

    /** @test */
    public function aon_attribute(): void
    {
        $value = $this->🙃->cosmere->aon;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function shard_world_attribute(): void
    {
        $value = $this->🙃->cosmere->shard_world;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function shard_attribute(): void
    {
        $value = $this->🙃->cosmere->shard;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function surge_attribute(): void
    {
        $value = $this->🙃->cosmere->surge;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function knight_radiant_attribute(): void
    {
        $value = $this->🙃->cosmere->knight_radiant;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function metal_attribute(): void
    {
        $value = $this->🙃->cosmere->metal;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function allomancer_attribute(): void
    {
        $value = $this->🙃->cosmere->allomancer;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function feruchemist_attribute(): void
    {
        $value = $this->🙃->cosmere->feruchemist;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function herald_attribute(): void
    {
        $value = $this->🙃->cosmere->herald;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    /** @test */
    public function spren_attribute(): void
    {
        $value = $this->🙃->cosmere->spren;

        $this->assertMatchesRegularExpression('/\w+/', $value);
    }

    // endregion
}
