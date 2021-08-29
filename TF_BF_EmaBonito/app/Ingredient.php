<?php

namespace App;
use App\Recipe;


use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function ingredient(){
        return $this->belongsTo(Recipe::class);
    }

    protected $fillable = [
        'instruction',
        'recipe_id'
        ];
}