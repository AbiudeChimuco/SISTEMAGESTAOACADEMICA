<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
     protected $primaryKey = 'idschool';

     public function users()
{
    return $this->hasMany(User::class, 'idschool', 'idschool');
}
}


