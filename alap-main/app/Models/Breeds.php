<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Breeds extends Model
{
    protected $fillable = ['name','spieces_id',];

    public function breed()
    {
        return $this->belongsTo(Breed::class);

    }

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);

    }

    public function caretakers()
    {
        return $this->belongsToMany(User::class,'animal_caretaker' );

    }
}
