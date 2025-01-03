<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\JobNotificationEmail;
use App\Models\Applicant;
use App\Models\Category;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Employeer;
use App\Models\Job;
use App\Models\Jobtype;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request){
        $companies=Company::orderBy('id','desc')->get();
        $jobtypes = Jobtype::all();
        $locations = Location::all();
        $categories = Category::all();
       $job = Job::where('status',1)
                        ->orderBy('id','desc')
                        ->where('isFeatured',1)->take(6)->get();
    //     return view('frontend.home',compact('jobs','companies'));
    $data['user'] = Auth::check();
    return Inertia::render('Home',[ 'job' => $job,'companies' => $companies, 'locations' => $locations, 'categories' => $categories, 'jobtypes' => $jobtypes, 'user' => $data['user'] ]);
    }

    public function about(Request $request){
       // return Inertia::render('About');
       // return view('frontend.about');
       $data['user'] = Auth::check();
       return Inertia::render('About',$data);
    }

    public function contact_form(Request $request){
       // return view('frontend.contact');
       $data['user'] = Auth::check();
       return Inertia::render('Contact',$data);
    }

    public function contact(Request $request){

        // $contact=new Contact;
        // $contact->name=$request->name;
        // $contact->email=$request->email;
        // $contact->subject=$request->subject;
        // $contact->comment=$request->comment;
        // $contact->candidate_id=$request->candidate_id;
        // $contact->save();

       
        // return view('frontend.contact');
        return Inertia::render('Contact');
    }

    public function blog(Request $request){
        $data['user'] = Auth::check();
        return Inertia::render('Blog',$data);
        //return view('frontend.blog');
    }

    public function profile_setting(Request $request){
       
        return view('frontend.profile_setting');
    }


    public function application_view($jobId)
    {
         $userId = Auth::id();
         $job = Job::find($jobId);
         $application = Applicant::where('job_id', $jobId)->where('candidate_id', $userId)->first();
        $candidate= User::find($userId);
        $data['user'] = Auth::check();
       // return view('frontend.applicant', compact('job','application'));
      //  return Inertia::render('Applicant',$data);
        return Inertia::render('Applicant', [ 'job' => $job,'application' =>  $application,'candidate' =>  $candidate,'user' => $data['user'] ]);
    }

   public function application(Request $request) {
    $request->validate([ 
    'pdf' => 'required|mimes:pdf|max:2048',
    ]); 
if ($bio = $request->file('pdf')) { 
$destinationPath = 'images/';
$postImage = date('YmdHis') . "." . $bio->getClientOriginalExtension(); 
$bio->move($destinationPath, $postImage); 
$bio = $destinationPath.$postImage; 
} 
$applicant = new Applicant; 
$applicant->name = $request->name; 
$applicant->email = $request->email; 
$applicant->contact = $request->contact; 
$applicant->cv = $bio; 
$applicant->candidate_id = $request->candidate_id; 
$applicant->job_id = $request->job_id; 
$applicant->employeer_id = $request->employeer_id; 
$applicant->save(); 
$job = Job::where('id', $request->job_id)->first();
 $employer = Employeer::where('id', $job->employeer_id)->first(); 
$mailData = [ 
'employer' => $employer, 
'user' => Auth::user(), 
'job' => $job, 
];
 Mail::to('yasinrobiul336@gmail.com')->send(new JobNotificationEmail($mailData)); 
//return redirect()->back()->with('msg', "Successfully Applied");
$data['user'] = Auth::check();
return Inertia::render('ApplicantSuccess', ['msg' => "Successfully Applied",'user' => $data['user']]);

}

    public function myJobs(Request $request){

       $userId = Auth::id(); 
         $items = Applicant::where('candidate_id', $userId)->get();
        // dd($items);
        return view('frontend.myjobs',compact('items'));
    }
    

    
}
