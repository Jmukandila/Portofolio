<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('<meta name="robots" content="index, follow">', false)
            ->assertSee('<meta property="og:image"', false)
            ->assertSee('<link rel="icon" type="image/x-icon"', false)
            ->assertSee('id="internship-notice"', false)
            ->assertSee('id="internship-popup"', false)
            ->assertSee('Un stage à me proposer ?', false)
            ->assertSee('id="dismiss-internship-popup"', false)
            ->assertSee('https://miabi.io/badges/running-on-miabi-dark.svg', false);
    }
}
