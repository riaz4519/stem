<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function competitionparticipants()
    {
        return $this->hasMany(Competitionparticipant::class,'competition_id','id');
    }

    public function competitionwinners()
    {
        return $this->hasMany(Competitionwinner::class,'competition_id','id');
    }

    public function competitionobjectives()
    {
        return $this->hasMany(Competitionobjective::class,'competition_id','id');
    }

    public function competitionphotos()
    {
        return $this->hasMany(Competitionphoto::class,'competition_id','id');
    }
    
    public function competitionkeypoints()
    {
        return $this->hasMany(Competitionkeypoint::class,'competition_id','id');
    }
    
    public function competitionvideos()
    {
        return $this->hasMany(Competitionvideo::class,'competition_id','id');
    }
    
    public function competitionmentors()
    {
        return $this->hasMany(Competitionmentor::class,'competition_id','id');
    }
}
