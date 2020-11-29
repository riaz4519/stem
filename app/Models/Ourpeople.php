<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peoplecategory;

class Ourpeople extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function peoplecategory(){
        return $this->belongsTo(Peoplecategory::class);
    }
}
