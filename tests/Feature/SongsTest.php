<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SongsTest extends TestCase
{
    /**
     * A basic feature test songs.
     */
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');

        $response->assertStatus(200);
    }
}
