<?php

namespace App;
use App\Recipe;


use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    public function instruction(){
        return $this->belongsTo(Recipe::class);
    }

    protected $fillable = [
        'instruction',
        'recipe_id'
        ];
}
