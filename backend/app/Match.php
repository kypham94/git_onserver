<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['name', 'time', 'link_1', 'link_2', 'link_3', 'link_4','image', 'slug'];
    protected $table="match";
}
