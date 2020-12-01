<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventobjective extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function event()
    {
        return belongsTo(Event::class);
    }
}