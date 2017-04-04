<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Job;
use App\JobQualification;
use App\Application;

class HomeController extends Controller
{	
	protected $views;

    function __construct()
    {

    }

    public function index()
    {
    	$views['news'] = News::latest()->get();
    	$views['jobs'] = Job::latest()->get();

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
            $file_name = time().'.'.$request->resume->getClientOriginalExtension();
            $path = $request->resume->storeAs('public/uploads/resume', $file_name);
        }
       
        $create = Application::create([
            'fullname'         => $request->get('fullname'),
            'contact_number'   => $request->get('contact'),
            'email_address'    => $request->get('email'),
            'resume'           => $file_name
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'Your Application has been Sent!'
        ]);
    }
}

