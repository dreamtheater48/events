<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable= ['title','description','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
