<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function victim()
    {
        return $this->belongsTo('App\Victim');
    }
}