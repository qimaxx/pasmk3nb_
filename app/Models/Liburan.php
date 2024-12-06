<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Liburan extends Model
{
    use HasFactory;

    protected $fillable = ['title','picture','price'];
}
