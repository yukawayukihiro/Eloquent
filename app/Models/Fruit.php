<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fruit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color', 'price'];

    public function insert() {
        $fruit = new Fruit();
    
        $fruit->name = 'grape';
        $fruit->color = 'blue';
        $fruit->price = 320;
    
        $fruit->save();
    }

    public function create () {
        Fruit::create([
            'name' => 'apple',
            'color' => 'red',
            'price' => 100,
        ]);
    }
}
