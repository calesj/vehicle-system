<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable = ['nome', 'ano', 'file_path'];
}
