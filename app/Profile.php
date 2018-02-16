<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Profile extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'profiles';

    protected $fillable = [
        'name',
    ];
}
