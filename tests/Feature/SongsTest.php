<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Practicals\Song;

class SongsTest extends TestCase
{
    public function testSongsOk(): void
    {
        $response = $this->get('/songs');
        $response->assertStatus(200);
    }

    public function testSetTempo(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $song->setTempo(60);
        $result = $song->getTempo();
        $this->assertEquals(60, $result);
    }
    public function testSetTempoAcceptsIntegerString(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $song->setTempo("60");
        $result = $song->getTempo();
        $this->assertEquals(60, $result);
    }
    public function testSetTempoRejectsAlphabetString(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo("60 BPM");
    }
    public function testSetTempoRejectsFloat(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo(60.5);
    }
}
