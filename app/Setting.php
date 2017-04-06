<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
    	'footer_address_1', 'footer_address_2', 'footer_address_3', 'facebook', 'twitter', 'linkedin', 'google'
    ];

    protected $guard = ['id'];

    public $timestamps = false;
}
