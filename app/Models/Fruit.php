<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fruit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color', 'price'];
}
