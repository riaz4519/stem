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

    public function programobjectives()
    {
        return $this->hasMany(Programobjective::class,'program_id','id');
    }

    public function programcases()
    {
        return $this->hasMany(Programcase::class,'program_id','id');
    }

    public function events()
    {
        return $this->hasMany(Event::class,'program_id','id');
    }
    
    public function popularcourses()
    {
        return $this->hasMany(Popularcourse::class,'program_id','id');
    }
    
    public function programvideos()
    {
        return $this->hasMany(Programvideo::class,'program_id','id');
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class,'program_id','id');
    }
}
