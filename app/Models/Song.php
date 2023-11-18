<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // Add fillable fields corresponds to database columns
    protected $fillable=['title', 'artist'];
}
