<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordpressOption extends Model
{
    protected $guarded = [];
    protected $table = 'options';
    public $timestamps = false;
}
