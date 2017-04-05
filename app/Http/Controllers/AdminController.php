<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\News;
use App\Job;
use App\JobQualification;
use App\Application;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{	
    use AuthenticatesUsers;

	protected $views;

    function __construct()
    {

    }

    public function login()
    {
        $views['title'] = 'Login';

        return view('login', $views);
    }

    public function applicants()
    {
        $views['title'] = 'Applicants';
        $views['tab']   = 'applicants';

        $views['applicants'] = Application::latest()->get();

        return view('admin.applicants.index', $views);
    }

    public function applicants_archived()
    {
        $views['title'] = 'Applicants Archived';
        $views['tab']   = 'applicants';

        $views['applicants'] = Application::onlyTrashed()->get();

        return view('admin.applicants.archived', $views);
    }

    public function archive_applicant($applicant_id, Request $request)
    {
        $applicant = Application::find($applicant_id)->delete();

        return response()->json([
            'message' => 'Applicant has been removed.'
        ]);
    }

    public function applicant_delete($applicant_id, Request $request)
    {   
        $applicant = Application::where('id', $applicant_id)->forceDelete();

        return response()->json([
            'message' => 'Applicant has been deleted.'
        ]);
    }

    public function jobs()
    {
    	$views['title'] = 'Jobs';
        $views['tab']   = 'jobs';

        $views['jobs']  = Job::latest()->get();

    	return view('admin.jobs.index', $views);
    }

    public function jobs_create()
    {
    	$views['title'] = 'Create Job';
        $views['tab']   = 'jobs';

    	return view('admin.jobs.create', $views);
    }

    public function jobs_store(Request $request)
    {   
        
        $this->validate($request, [
            'position'        => 'required',
            'closed_date'     => 'required',
            'description'     => 'required'
        ]);

       
        $create = Job::create([
            'position'      => $request->get('position'),
            'closed_date'   => $request->get('closed_date'),
            'description'   => $request->get('description'),
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'Job has been added'
        ]);
    }

    public function jobs_edit($job_id)
    {
        $views['title'] = 'Update Job';
        $views['tab']   = 'jobs';

        $views['job']   = Job::find($job_id);

        return view('admin.jobs.edit', $views);
    }

    public function jobs_update($job_id, Request $request)
    {
        $this->validate($request, [
            'position'        => 'required',
            'closed_date'     => 'required',
            'description'     => 'required'
        ]);

       
        $update = Job::find($job_id)->update([
            'position'      => $request->get('position'),
            'closed_date'   => $request->get('closed_date'),
            'description'   => $request->get('description'),
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $update,
            'message' => 'Job has been updated'
        ]);
    }

    public function jobs_delete($job_id, Request $request)
    {   
        $job = Job::find($job_id)->delete();

        return response()->json([
            'message' => 'Job has been removed.'
        ]);
    }

    public function news()
    {
        $views['title'] = 'News';
        $views['tab']   = 'news';

        $views['news']  = News::latest()->get();

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
        
        $image_name = null;

        $this->validate($request, [
            'title'        => 'required',
            'date'         => 'required',
            'caption'      => 'required',
            'description'  => 'required',
            //'image'        => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/uploads/news', $image_name);
        }
       
        $create = News::create([
            'title'         => $request->get('title'),
            'date'          => $request->get('date'),
            'caption'       => $request->get('caption'),
            'description'   => $request->get('description'),
            'photo'         => $image_name,
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'News has been added'
        ]);
    }

    public function news_edit($news_id)
    {
        $views['title'] = 'Update News';
        $views['tab']   = 'news';

        $views['news']   = News::find($news_id);

        return view('admin.news.edit', $views);
    }

    public function news_update($news_id, Request $request)
    {
        $image_name = $request->get('old_image');

        $this->validate($request, [
            'title'        => 'required',
            'date'         => 'required',
            'caption'      => 'required',
            'description'  => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/uploads/news', $image_name);
        }
       
        $update = News::find($news_id)->update([
            'title'         => $request->get('title'),
            'date'          => $request->get('date'),
            'caption'       => $request->get('caption'),
            'description'   => $request->get('description'),
            'photo'         => $image_name,
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $update,
            'message' => 'News has been updated'
        ]);
    }

    public function news_delete($news_id, Request $request)
    {   
        $job = News::find($news_id)->delete();

        return response()->json([
            'message' => 'News has been removed.'
        ]);
    }

    public function users()
    {
        $views['title'] = 'Users';
        $views['tab']   = 'users';
        $views['users']   = User::latest()->where('status', 1)->get();

        return view('admin.users.index', $views);
    }

    public function users_inactive()
    {
        $views['title'] = 'In-Active Users';
        $views['tab']   = 'users';
        $views['users']   = User::latest()->where('status', 0)->get();

        return view('admin.users.inactive', $views);
    }


    public function users_create()
    {
        $views['title'] = 'Create User';
        $views['tab']   = 'users';

        return view('admin.users.create', $views);
    }

    public function users_store(Request $request)
    {
        $this->validate($request , [
            'name'      => 'required', 
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|alpha_num|between:8,20'
        ]);

        $create = User::forceCreate([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => \Hash::make($request->get('password')),
            'role'      => 'admin',
            'status'    => 1
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'User has been added'
        ]);
    }

    public function users_edit($user_id, Request $request)
    {

    }

    public function users_update($user_id, Request $request)
    {

    }

    public function users_delete($user_id, Request $request)
    {
        $job = User::find($user_id)->delete();

        return response()->json([
            'message' => 'User has been removed.'
        ]);
    }

    public function users_set_status($user_id, $status, Request $request)
    {
        $status_message = ($status) ? 'Restored' : 'Disabled';

        $job = User::find($user_id)->update([
            'status'  => $status
        ]);

        return response()->json([
            'message' => 'User has been ' . $status_message . '.'
        ]);
    }
    
    public function users_signin(Request $request, Guard $auth)
    {   
        $this->validate($request, [
            'email'      => 'required|email',
            'password'   => 'required'
        ]);

        if( auth()->attempt(['email' => $request->get('email') , 'password' => $request->get('password')])) {
            return [
                'status' => true,
                'user'   => User::find($auth->user()->id)
            ];
        } else {
            return [
                'status' => false
            ];
        }
    }

    public function users_signout()
    {
        auth()->logout();
        return redirect()->to('/admin/login');
    }
}
