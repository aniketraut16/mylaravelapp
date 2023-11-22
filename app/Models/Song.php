<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // Add fillable fields corresponds to database columns
    protected $fillable=['title', 'artist'];
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getArtist() {
        return $this->artist;
    }


    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getGenre() {
        return $this->genre;
    }


    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getTempo() {
        return $this->tempo;
    }


    public function setTempo($tempo) {
        if (!is_numeric($tempo) || is_float($tempo)) {
            throw new \InvalidArgumentException("inputs must be numeric.");
        }
        $this->tempo = $tempo;
    }
}
