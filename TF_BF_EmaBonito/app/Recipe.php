<?php

namespace App;
use App\Ingredient;
use App\Instruction;
use App\User;



use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }

    public function instructions(){
        return $this->hasMany(Instruction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title',
        'description',
        'user_id'
        ];
}
