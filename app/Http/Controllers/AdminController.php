<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{	
	protected $views;

    function __construct()
    {

    }

    public function index()
    {
    	$views['title'] = 'Jobs';

    	return view('admin.jobs.index', $views);
    }

    public function create()
    {
    	$views['title'] = 'Create Job';

    	return view('admin.jobs.create', $views);
    }
}
