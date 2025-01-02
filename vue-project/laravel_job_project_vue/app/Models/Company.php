<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','address'
    ];
    public function job(){
        return $this->hasMany(Job::class);
    }

    public function employeer(){
        return $this->hasMany(Employeer::class);
    }
}
