<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'application'

    protected $fillable = [
    	'fullname', 'contact_number', 'email_address', 'resume'
    ];

    protected $guard = ['id', 'job_id'];
}
