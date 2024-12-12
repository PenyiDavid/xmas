<?php

namespace App\Models;

use App\Models\Model;
//use App\Models\Animal;
use App\Models\Breeds;
use App\Models\Roles;
use App\Models\Shelters;
use App\Models\Spieces;







class Animal extends Model
{
    protected $fillable = ['name','gender','age', 'breed_id', 'shelter_id'];

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
