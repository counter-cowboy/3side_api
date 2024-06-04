<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
        'name',
        'apiservice_id',
        'tokentype_id',
    ];

    public function Tokentype()
    {
        return $this->belongsTo(Tokentype::class);
    }
}
