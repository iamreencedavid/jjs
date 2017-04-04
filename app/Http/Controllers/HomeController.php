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
}

