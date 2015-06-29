<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacebookGroup extends Model
{
    protected $table = "bddevs_fbgroups";

    public $timestamps = false;

    protected $fillable = ['name', 'url'];

}
