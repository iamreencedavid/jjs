<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Job;
use App\JobQualification;
use App\Application;

class AdminController extends Controller
{	
	protected $views;

    function __construct()
    {

    }

    public function jobs()
    {
    	$views['title'] = 'Jobs';
        $views['tab']   = 'jobs';

    	return view('admin.jobs.index', $views);
    }

    public function jobs_create()
    {
    	$views['title'] = 'Create Job';
        $views['tab']   = 'jobs';

    	return view('admin.jobs.create', $views);
    }

    public function news()
    {
        $views['title'] = 'News';
        $views['tab']   = 'news';

        return view('admin.news.index', $views);
    }

    public function news_create()
    {
        $views['title'] = 'Create News';
        $views['tab']   = 'news';

        return view('admin.news.create', $views);
    }

    public function news_store(Request $request)
    {   
        //return response()->json($request);

        // $this->validate($request, [
        //     'title' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/uploads/news', $image_name);
        }
        
        // $request->image->storeAs(public_path('uploads/news'), $image_name);

    }

    public function users()
    {
        $views['title'] = 'Users';
        $views['tab']   = 'users';

        //return view('admin.news.index', $views);
    }

    public function settings()
    {
        $views['title'] = 'Settings';
        $views['tab']   = 'settings';

        //return view('admin.news.index', $views);
    }
}
