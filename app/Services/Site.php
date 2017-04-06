<?php

namespace App\Services;

use App\Job;
use Carbon\Carbon;

class Site
{
	public function updateJobsExpired()
	{
		//First Let's get all the jobs that are below on the current date with status 1
		$today_date = Carbon::now()->format('Y-m-d');

		//This will do the query
		$query = Job::where([
			'status' => 1
		])->whereDate('closed_date', '<', $today_date)->update([
			'status' => 0
		]);

	}	
}