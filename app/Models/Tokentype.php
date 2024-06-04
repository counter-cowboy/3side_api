<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tokentype extends Model
{
    protected $fillable = [
        'name',
    ];

    public function Tokens()
    {
        return $this->hasMany(Token::class);
    }
}
