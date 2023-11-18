<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {
    
            // Seed a few songs
            Song::create([
                'artist' => 'Eminem',
                'title' => 'Stan',
            ]);
    
            Song::create([
                'artist' => 'A P Dhillon',
                'title' => 'With You',
            ]);
    
        }
    
}
