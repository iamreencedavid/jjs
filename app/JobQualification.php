<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobQualification extends Model
{
	protected $table = 'jobs_qualification'

    protected $fillable = [
    	'job_id', 'qualification'
    ];

    protected $guard = ['id', 'job_id'];
    
    public function job()
    {
    	return $this->belongsTo(Job::class);
    }
}
