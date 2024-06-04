<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apiservice_tokentype extends Model
{
    protected $fillable = [
        'apiservice_id',
        'tokentype_id',
    ];
}
