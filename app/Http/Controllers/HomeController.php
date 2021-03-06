<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Job;
use App\JobQualification;
use App\Application;
use App\Setting;
use App\Content;

use App\Mail\SendResume;
use App\Services\Site;

class HomeController extends Controller
{	
	protected $views;

    function __construct(Site $site)
    {
        //First let's update all the jobs with expired date
        $site->updateJobsExpired();
    }

    public function index()
    {   
    	$views['news'] = News::latest()->where('status', 1)->get();
    	$views['jobs'] = Job::latest()->where('status', 1)->get();
        $views['settings'] = Setting::take(1)->first();
        $views['contents'] = Content::latest()->where('status', 1)->get();

    	return view('home.index', $views);
    }

    public function send_request(Request $request)
    {   
        
        $file_name = null;

        $this->validate($request, [
            'fullname'      => 'required',
            'contact'       => 'required',
            'email'         => 'required|email',
            'resume'        => 'required|mimes:pdf,doc,docx'
        ]);

        if ($request->hasFile('resume')) {
            $file_name = strtolower(str_replace(" ", "-", $request->get('fullname')))."-".time().'.'.$request->resume->getClientOriginalExtension();
            $path = $request->resume->storeAs('public/uploads/resume', $file_name);
        }
       
        $create = Application::create([
            'fullname'         => $request->get('fullname'),
            'contact_number'   => $request->get('contact'),
            'email_address'    => $request->get('email'),
            'resume'           => $file_name
        ]);

        if ($create) {
            \Mail::to($create->email_address)->send(new SendResume($create));
        }

        return response()->json([
            'data'    => $create,
            'message' => 'Your Application has been Sent!'
        ]);
    }

    public function get_content_info($content_id, Request $request)
    {
        return Content::find($content_id);
    }

    public function get_news_info($news_id, Request $request)
    {
        return News::find($news_id);
    }

    public function get_job_info($job_id, Request $request)
    {
        return Job::find($job_id);
    }
}

