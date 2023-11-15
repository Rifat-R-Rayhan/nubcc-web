<?php

namespace App\Http\Controllers;

use App\Models\Cr;
use App\Models\Nubccuser;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    function homePage(){
        return view('welcome');
    }

    function aboutPage(){
        return view('client/pages/about-us');
    }

    function contactPage(){
        return view('client/pages/contact');
    }

    function fullTeamPage(){
        $members = Member::all();
        return view('client/pages/full-team', compact('members'));
    }

    function fullCrPage(){
        $crs = Cr::all();
        return view('client/pages/cr-team', compact('crs'));
    }

    function eventPage(){
        return view('client/pages/event');
    }

    function galleryPage(){
        return view('client/pages/gallery');
    }

    function coursePage(){
        return view('client/pages/courses');
    }

    function productPage(){
        return view('client/pages/product');
    }
    function shirtPage(){
        return view('client/pages/shirt');
    }
    function confirmPage(){
        return view('client/pages/order_confirmed');
    }
    function userRegistrationPage(){
        return view('client/pages/user-reg');
    }
    function forgotPassword(){
        return view('client/pages/forgot-password');
    }

    function memberRegistration(){
        return view('client/pages/addMember');
    }

    function crRegistration(){
        return view('client/pages/cr');
    }


    function forgotUserPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:nubccusers'
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("client/email/forgot-password", ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect('forgot-password');
    }

    function resetPassword($token){
        return view('client/pages/new-password', compact('token'));
    }

    function resetUserPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:nubccusers',
            'password' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        // dd("Heere");

        // if(!$updatePassword){
        //     return back();
        // }

    
        Nubccuser::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' =>$request->email])->delete();

        return redirect('user-login');
    }

    function userInsert(Request $request){
        $user = new Nubccuser;
        $user->username = $request->username;
        $user->program = $request->program;
        $user->student_id = $request->student_id;
        $user->semester = $request->semester;
        $user->section = $request->section;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->contact = $request->contact;
        $user->blood_group = $request->blood_group;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->professional_skill = $request->professional_skill;
        $user->interest = $request->interest;
        $user->goal = $request->goal;
        $user->leadership = $request->leadership;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid().'_'. $user->username;
            $file->move('uploads/images/users', $filename);
            $user->image = $filename;
        }
        $user->trans_id = $request->trans_id;
        $request->validate([
            'email' => 'required|unique:nubccusers',
            'student_id' => 'required|unique:nubccusers'

        ]);

        $result = $user->save();
        if($result){
            return back()->with('success', 'Congrats!!! You have registered successfully.');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }

    function login(Request $request){
        return view('client.pages.user-login');
    }

    function loginCheck(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = Nubccuser::where('email', '=', $request->email)->where('is_active', '=', 2)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('UserLoginId', $user->id);
                return redirect('user-dashboard');
            }
            else if($user->password == md5($request->password)){
                $request->session()->put('UserLoginId', $user->id);
                return redirect('user-dashboard');
            }
            // else if($request->password == $user->password){
            //     $request->session()->put('UserLoginId', $user->id);
            //     // $request->session()->put('loginName', $user->username);
            //     return redirect('user-dashboard');
            // }
            else{
                return back()->with('fail', 'Your entered information are not save in our members list');
            }
        }
        else{
            return back()->with('fail', 'Your entered information are not save in our members list');
        }
    }

    public function dashboard(){
        $data = array();
        if(Session::has('UserLoginId')){
            $data = Nubccuser::where('id', '=', Session::get('UserLoginId'))->first();
        }
        return view('client/pages/userDashboard', compact('data'));
    }

    function logout(){
        if(Session::has('UserLoginId')){
            Session::pull('UserLoginId');
            return redirect('user-login');
        }
    }

    public function userEdit(Request $request)
    {
        $editData = Nubccuser::find($request->id); 
        return view('client/pages/userEdit', compact('editData'));
    }

    public function userUpdate(Request $request)
    {
        // dd($request->id);
        $user = Nubccuser::find($request->id);
        $user->username = $request->username;
        $user->program = $request->program;
        $user->student_id = $request->student_id;
        $user->semester = $request->semester;
        $user->section = $request->section;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->contact = $request->contact;
        $user->blood_group = $request->blood_group;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->professional_skill = $request->professional_skill;
        $user->interest = $request->interest;
        $user->goal = $request->goal;
        $user->leadership = $request->leadership;
        if($request->hasFile('newimage')){
            $destination = public_path('uploads/images/users/' . $request->oldimage);
            // dd($destination);
            if(file_exists($destination))
            {
                unlink($destination);
            }
            $file = $request->file('newimage');
            $filename = uniqid().'_update_'. $user->member_name;
            $file->move('uploads/images/users', $filename);
            $user->image = $filename;
        }
       
        $user->update();
        return redirect('/user-dashboard');
    }



    function memberInsert(Request $request){
        $member = new Member;
        $member->member_name = $request->member_name;
        $member->designation = $request->designation;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->mobile = $request->mobile;
        $member->fb_link = $request->fb_link;
        $member->student_id = $request->student_id;
        $member->program = $request->program;
        $member->semester = $request->semester;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid().'_'. $member->member_name;
            $file->move('uploads/images/members', $filename);
            $member->image = $filename;
        }

        $result = $member->save();

        if($result){
            return back()->with('success', 'Congrats!!! You have registered successfully.');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }



    function crInsert(Request $request){
        $cr = new Cr;
        $cr->cr_name = $request->cr_name;
        $cr->email = $request->email;
        $cr->mobile = $request->mobile;
        $cr->fb_link = $request->fb_link;
        $cr->student_id = $request->student_id;
        $cr->program = $request->program;
        $cr->semester = $request->semester;
        $cr->section = $request->section;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid().'_'. $cr->cr_name;
            $file->move('uploads/images/crs', $filename);
            $cr->image = $filename;
        }

        $result = $cr->save();

        if($result){
            return back()->with('success', 'Congrats!!! You have registered successfully.');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }
}
