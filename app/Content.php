<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
    	'title', 'caption', 'description', 'status'
    ];

    protected $guard = ['id'];
}
