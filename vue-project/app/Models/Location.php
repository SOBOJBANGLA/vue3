<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable=[
        'location_name'
    ];

    public function job(){
        return $this->hasMany(Job::class);
    }
    public function employeer(){
        return $this->hasMany(Employeer::class);
    }
}
