<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'userid', 'street_address', 'city', 'state', 'zipcode',
    ];
}
