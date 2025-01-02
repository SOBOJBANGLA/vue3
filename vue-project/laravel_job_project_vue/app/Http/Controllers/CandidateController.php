<?php

namespace App\Http\Controllers;

use App\Models\CandidateDetails;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class CandidateController extends Controller
{
    

    public function register(Request $request){
        return Inertia::render('Register');
        //return view('frontend.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
     

        //Auth::guard('employeer')->login($employeer);
        //return redirect('/employeer/login');
        return redirect()->route('candidate_login_form');
        //return redirect(RouteServiceProvider::EMPLOYEER_DASHBOARD);
    }


    public function login(Request $request){
        return Inertia::render('Login');
        //return view('frontend.login');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               //return Inertia::render('Profile');
             //return redirect()->route('user_profile');
             // return Inertia::visit('Profile');
            // $data['user'] = Auth::check();
             return Inertia::location(route('user_profile'));
            } else {
                return redirect()->route('candidate_login_form')->with('error','Either Email/Password is incorrect');
            }
        } else {
            return redirect()->route('candidate_login_form')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('candidate_login_form');
    }

    public function candidateCreate()
    {
        // $candidate =CandidateDetails::all();
        // $users = User::all();
        $id=Auth::user()->id;
        $candidate=CandidateDetails::find($id);
       
        return view('frontend.profile_setting',compact('users','candidate')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function candidateStore(Request $request)
    {
        $request->validate([
            
            'photo'=>'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'pdf' => 'required|mimes:pdf|max:2048',
            
        ]);
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        }else {
            $photo = 'images/nophoto.jpg';
        }

        if ($bio = $request->file('pdf')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $bio->getClientOriginalExtension();
            $bio->move($destinationPath, $postImage);
            $bio = $destinationPath.$postImage;
        }

        // $id=Auth::user()->id;
        // $candidate=CandidateDetails::find($id);
         $candidate=new CandidateDetails;
        $candidate->f_name=$request->fname;
        $candidate->l_name=$request->lname;
        $candidate->occupation=$request->occupation;
        $candidate->phone=$request->phone;
        $candidate->image=$photo;
        $candidate->bio=$bio;
        $candidate->address=$request->address;
        $candidate->about=$request->about;
        $candidate->user_id=$request->user_id;
        $candidate->save();
        //return redirect('admin/specialist');
        return redirect()->route('user_profile')->with('msg',"Successfully created");
    }

    public function user_profile(Request $request){
        // $items=CandidateDetails::orderBy('id','desc')->get();
        $userId = Auth::id(); 
        $candidate = CandidateDetails::where('user_id', $userId)->get();
       
        return view('frontend.profile',compact('candidate'));
    }



    public function editProfile($userId)
{
    $id = Auth::user()->id;
    $candidate = CandidateDetails::where('user_id', $id)->first();

    return view('frontend.profile_setting_edit', compact('candidate'));
}

    

    public function updateProfile(Request $request, $userId)
{
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'pdf' => 'nullable|mimes:pdf|max:2048',
    ]);

    $candidate = CandidateDetails::where('user_id', $userId)->first();

    if ($candidate) {
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $candidate->image = $destinationPath.$postImage;
        }

        if ($bio = $request->file('pdf')) {
            $destinationPath = 'documents/';
            $postPdf = date('YmdHis') . "." . $bio->getClientOriginalExtension();
            $bio->move($destinationPath, $postPdf);
            $candidate->bio = $destinationPath.$postPdf;
        }

        $candidate->f_name = $request->fname;
        $candidate->l_name = $request->lname;
        $candidate->occupation = $request->occupation;
        $candidate->phone = $request->phone;
        $candidate->address = $request->address;
        $candidate->about = $request->about;
        $candidate->save();

        return redirect()->route('user_profile')->with('msg', "Successfully updated");
    }

    return back()->with('error', 'Profile not found');
}


}
