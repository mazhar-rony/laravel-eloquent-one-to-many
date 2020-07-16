<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'country_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
