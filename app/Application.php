<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
	use SoftDeletes;

    protected $table = 'application';

    protected $fillable = [
    	'fullname', 'contact_number', 'email_address', 'resume'
    ];

    protected $guard = ['id', 'job_id'];

    protected $dates = ['deleted_at'];
}
