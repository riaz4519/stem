<?php

namespace App\Models;

use App\Models\Eventparticipant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function eventparticipants()
    {
        return $this->hasMany(Eventparticipant::class,'event_id','id');
    }
    
    public function eventobjectives()
    {
        return $this->hasMany(Eventobjective::class,'event_id','id');
    }

    public function eventphotos()
    {
        return $this->hasMany(Eventphoto::class,'event_id','id');
    }

    public function eventkeypoints()
    {
        return $this->hasMany(Eventkeypoint::class,'event_id','id');
    }
    
    public function eventvideos()
    {
        return $this->hasMany(Eventvideo::class,'event_id','id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function eventmentors()
    {
        return $this->hasMany(Eventmentor::class,'event_id','id');
    }
}
