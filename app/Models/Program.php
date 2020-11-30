<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramKeyPoint;

class Program extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function programkeypoints()
    {
        return $this->hasMany(ProgramKeyPoint::class,'program_id','id');
    }
}
