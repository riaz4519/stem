<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitionparticipant extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
