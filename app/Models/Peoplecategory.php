<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ourpeople;

class Peoplecategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ourpeoples()
    {
        return $this->hasMany(Ourpeople::class,'peoplecategory_id','id');
    }
}
