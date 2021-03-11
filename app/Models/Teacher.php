<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $primarykey = 'Tid';

    public function Course()
    {
        return $this->hasMany(Course::Class,'Tid','Tid');
    }
    public function Group()
    {
        return $this->hasMany(Group::Class,'Tid','Tid');
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
