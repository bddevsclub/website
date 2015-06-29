<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    protected $table = 'bddevs_webinars';
    protected $fillable = ['title', 'description', 'video_embed', 'date_time'];
    public $timestamps = false;
}