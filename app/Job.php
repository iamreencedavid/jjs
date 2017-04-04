<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs'

    protected $fillable = [
    	'position', 'description', 'closed_date', 'status'
    ];

    protected $guard = ['id'];

    public function qualifications()
    {
    	return $this->hasMany(JobQualification::class);
    }
}
