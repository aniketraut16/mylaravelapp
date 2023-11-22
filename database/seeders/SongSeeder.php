<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
        public function run(): void
        {
            // Seed a few songs
            Song::create([
                'artist' => 'Ed Sheeran',
                'title' => 'Shape of You',
            ]);
            
            Song::create([
                'artist' => 'Billie Eilish',
                'title' => 'Bad Guy',
            ]);
            
            Song::create([
                'artist' => 'Drake',
                'title' => 'Hotline Bling',
            ]);
            
            Song::create([
                'artist' => 'The Weeknd',
                'title' => 'Blinding Lights',
            ]);
            
            Song::create([
                'artist' => 'Taylor Swift',
                'title' => 'Shake It Off',
            ]);
            
            Song::create([
                'artist' => 'Post Malone',
                'title' => 'Circles',
            ]);
            
            Song::create([
                'artist' => 'Dua Lipa',
                'title' => 'Don\'t Start Now',
            ]);
            
            Song::create([
                'artist' => 'Justin Bieber',
                'title' => 'Sorry',
            ]);
            
            
        }
    
}
