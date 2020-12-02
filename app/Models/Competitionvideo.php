<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitionvideo extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
