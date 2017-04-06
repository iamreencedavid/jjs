<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\News;
use App\Job;
use App\JobQualification;
use App\Application;
use App\Setting;
use App\Content;

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
        //On this part let's create a default account for super admin
        $this->createSuperAdmin();

        $this->views['title'] = 'Login';

        return view('login', $this->views);
    }

    private function createSuperAdmin()
    {
        //First we need to check if there is an existing super admin
        $object = User::where('role', 'super_admin')->first();

        if (count($object) == 0)
        {
            //No Super admin Found Then let's create it
            $create = User::forceCreate([
                'name'      => 'Super Admin',
                'email'     => 'superadmin@jjs.com.ph',
                'password'  => \Hash::make('1234567890987654321'),
                'role'      => 'super_admin',
                'status'    => 1
            ]);
        } 
    }

    public function applicants()
    {
        $this->views['title'] = 'Applicants';
        $this->views['tab']   = 'applicants';

        $this->views['applicants'] = Application::latest()->get();

        return view('admin.applicants.index', $this->views);
    }

    public function applicants_archived()
    {
        $this->views['title'] = 'Applicants Archived';
        $this->views['tab']   = 'applicants';

        $this->views['applicants'] = Application::onlyTrashed()->get();

        return view('admin.applicants.archived', $this->views);
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
    	$this->views['title'] = 'Jobs';
        $this->views['tab']   = 'jobs';

        $this->views['jobs']  = Job::latest()->get();

    	return view('admin.jobs.index', $this->views);
    }

    public function jobs_create()
    {
    	$this->views['title'] = 'Create Job';
        $this->views['tab']   = 'jobs';

    	return view('admin.jobs.create', $this->views);
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
        $this->views['title'] = 'Update Job';
        $this->views['tab']   = 'jobs';

        $this->views['job']   = Job::find($job_id);

        return view('admin.jobs.edit', $this->views);
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
        $this->views['title'] = 'News';
        $this->views['tab']   = 'news';

        $this->views['news']  = News::latest()->get();

        return view('admin.news.index', $this->views);
    }

    public function news_create()
    {
        $this->views['title'] = 'Create News';
        $this->views['tab']   = 'news';

        return view('admin.news.create', $this->views);
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
        $this->views['title'] = 'Update News';
        $this->views['tab']   = 'news';

        $this->views['news']   = News::find($news_id);

        return view('admin.news.edit', $this->views);
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
        $this->views['title'] = 'Users';
        $this->views['tab']   = 'users';
        $this->views['users'] = User::latest()->whereNotIn('role', ['super_admin'])->where('status', 1)->get();

        return view('admin.users.index', $this->views);
    }

    public function users_inactive()
    {
        $this->views['title'] = 'In-Active Users';
        $this->views['tab']   = 'users';
        $this->views['users']   = User::latest()->where('status', 0)->get();

        return view('admin.users.inactive', $this->views);
    }


    public function users_create()
    {
        $this->views['title'] = 'Create User';
        $this->views['tab']   = 'users';

        return view('admin.users.create', $this->views);
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
            'status'    => $request->get('status')
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'User has been added'
        ]);
    }

    public function users_edit($user_id, Request $request)
    {
        $this->views['title'] = 'Update User';
        $this->views['tab']   = 'users';

        $this->views['user']  = User::find($user_id);

        return view('admin.users.edit', $this->views);
    }

    public function users_update($user_id, Request $request)
    {   
        $password = $request->get('password');

        $data = [
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'status'    => $request->get('status')
        ];

        $this->validate($request , [
            'name'      => 'required', 
            'email'     => 'required|email|unique:users,email,'.$user_id
        ]);

        if (isset($password) && !empty($password))
        {
            $this->validate($request , [
                'password'  => 'required|alpha_num|between:8,20'
            ]);

            $data = array_merge($data, ['password' => \Hash::make($password)]);
        }

        $update = User::find($user_id)->update($data);

        return response()->json([
            'data'    => $update,
            'message' => 'User has been updated'
        ]);
    }

    public function users_delete($user_id, Request $request)
    {
        User::find($user_id)->delete();

        return response()->json([
            'message' => 'User has been removed.'
        ]);
    }

    public function users_set_status($user_id, $status, Request $request)
    {
        $status_message = ($status) ? 'Restored' : 'Disabled';

        User::find($user_id)->update([
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

            if($auth->user()->status)
            {
                return [
                    'status' => true,
                    'user'   => User::find($auth->user()->id),
                    'message'=> 'Account Found'
                ];
            } 
            else
            {
                return [
                'status'   => false,
                'message'  => 'Sorry your accunt is in-active <br> Please contact your Administrator.'
            ];
            }
        } else {
            return [
                'status'   => false,
                'message'  => 'Invalid Login Account <br> Please check your email/password'
            ];
        }
    }

    /**
    * Contents Part
    **/
    public function contents()
    {
        $this->views['title'] = 'Contents';
        $this->views['tab']   = 'contents';
        $this->views['contents'] = Content::latest()->get();

        return view('admin.contents.index', $this->views);
    }

    public function contents_create()
    {
        $this->views['title'] = 'Create Content';
        $this->views['tab']   = 'contents';

        return view('admin.contents.create', $this->views);
    }

    public function contents_store(Request $request)
    {       
        $image_name = null;

        $this->validate($request, [
            'title'       => 'required',
            'caption'     => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/uploads/contents', $image_name);
        }
       
        $create = Content::create([
            'title'         => $request->get('title'),
            'caption'       => $request->get('caption'),
            'description'   => $request->get('description'),
            'photo'         => $image_name,
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'Content has been added'
        ]);
    }

    public function contents_edit($content_id, Request $request)
    {
        $this->views['title'] = 'Update Content';
        $this->views['tab']   = 'contents';

        $this->views['content']   = Content::find($content_id);

        return view('admin.contents.edit', $this->views);
    }

    public function contents_update($content_id, Request $request)
    {
        $image_name = $request->get('old_image');

        $this->validate($request, [
            'title'       => 'required',
            'caption'     => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/uploads/contents', $image_name);
        }

       
        $create = Content::find($content_id)->update([
            'title'         => $request->get('title'),
            'caption'       => $request->get('caption'),
            'description'   => $request->get('description'),
            'photo'         => $image_name,
            'status'        => $request->get('status')
        ]);

        return response()->json([
            'data'    => $create,
            'message' => 'Content has been updated'
        ]);
    }

    public function contents_delete($content_id, Request $request)
    {
        Content::find($content_id)->delete();

        return response()->json([
            'message' => 'Content has been removed.'
        ]);
    }


    /**
    * Settings Part
    **/
    public function settings()
    {
        $this->views['title'] = 'Settings';
        $this->views['tab']   = 'settings';
        $this->views['settings'] = Setting::take(1)->first();

        return view('admin.settings.index', $this->views);
    }

    public function settings_store(Request $request)
    {
        $type = $request->get('type');

        //let's check if there is an existing data on settings
        $settings = Setting::take(1)->first(['id']);

        if ($type == "footer")
        {
            $this->validate($request, [
                'footer_address_1' => 'required'
            ]);

            if (count($settings) == 0)
            {
                $data = Setting::create([
                    'footer_address_1' => $request->get('footer_address_1'),
                    'footer_address_2' => $request->get('footer_address_2'),
                    'footer_address_3' => $request->get('footer_address_3')
                ]);
            }
            else 
            {
                $data = Setting::find($settings->id)->update([
                    'footer_address_1' => $request->get('footer_address_1'),
                    'footer_address_2' => $request->get('footer_address_2'),
                    'footer_address_3' => $request->get('footer_address_3')
                ]);
            }

            return response()->json([
                'data'    => $data,
                'message' => 'Footer Settings has been added'
            ]);
        }
        else if ($type == "social-media")
        {
            if (count($settings) == 0)
            {
                $data = Setting::create([
                    'facebook'  => $request->get('facebook'),
                    'twitter'   => $request->get('twitter'),
                    'linkedin'  => $request->get('linkedin'),
                    'google'    => $request->get('google')
                ]);
            }
            else 
            {
                $data = Setting::find($settings->id)->update([
                    'facebook'  => $request->get('facebook'),
                    'twitter'   => $request->get('twitter'),
                    'linkedin'  => $request->get('linkedin'),
                    'google'    => $request->get('google')
                ]);
            }

            return response()->json([
                'data'    => $data,
                'message' => 'Social Medial Links has been added'
            ]);
        }
    }

    public function users_signout()
    {
        auth()->logout();
        return redirect()->to('/admin/login');
    }
}
