<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $fillable = ['name', 'career', 'confirmed'];
}