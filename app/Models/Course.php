<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primarykey = 'Cid';
    public function Teacher()
    {
        return $this->hasMany(Teacher::Class,'Tid','Tid');
    }
}
