<?php

namespace App\Http\Controllers;

use App\Mail\TshirtMail;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Nubccuser;
use App\Models\Shirt;
use App\Models\User;
use App\Exports\ShirtsExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class AdminController extends Controller
{
    function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Admin::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }

    public function usersTable(){
        
        $users = Nubccuser::all();
        return view('server/pages/usersTable', compact('users'));
    }


    // *************User
    function userTable(){
        $users = Nubccuser::all();
        return view('server/pages/usersTable', compact('users'));
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

        $user->save();
        return redirect('/users');
    }

    public function userConfirmation(Request $request)
    {
        // dd($request->id);
        $user = Nubccuser::find($request->id);
        $user->is_active = 2;
    
        $user->update();

        //$name = $user->username;
        //$student_id = $user->student_id;


        //$send_mail = $user->email;
    
        
        //Mail::to($send_mail)->send(new TshirtMail($name,$student_id));

        return redirect('/users');
    }

    public function userDelete(Request $request){
        $user = Nubccuser::find($request->id);
        $image_path = public_path('uploads/images/users/'.$user->image);
        if(file_exists($image_path)) {
            unlink($image_path);
        }
        $user->delete();
        return redirect('/users');
    }

    public function userSearch(Request $request){
        
        $search = $request->search;
        $users = Nubccuser::where('student_id','like','%'.$search.'%')->orWhere('username','like','%'.$search.'%')->get();
        return view('server/pages/usersTable', compact('users'));
    }

    // *************End User


    // *************Members

    function membersTable(){
        $members = Member::all();
        return view('server/pages/membersTable', compact('members'));
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

        $member->save();
        return redirect('/members');
    }

    public function memberDelete(Request $request){
        $member = Member::find($request->id);
        $image_path = public_path('uploads/images/members/'.$member->image);
        if(file_exists($image_path)) {
            unlink($image_path);
        }
        $member->delete();
        return redirect('/members');
    }

    public function memberEdit(Request $request)
    {
        $editData = Member::find($request->id); 
        return view('server/pages/memberEdit', compact('editData'));
    }

    public function memberUpdate(Request $request)
    {
        // dd($request->id);
        $member = Member::find($request->id);
        $member->member_name = $request->member_name;
        $member->designation = $request->designation;
        $member->email = $request->email;
        $member->password = Hash::make($request->password);
        $member->mobile = $request->mobile;
        $member->fb_link = $request->fb_link;
        $member->student_id = $request->student_id;
        $member->program = $request->program;
        $member->semester = $request->semester;
        
        if($request->hasFile('newimage')){
            $destination = public_path('uploads/images/members/' . $request->oldimage);
            // dd($destination);
            if(file_exists($destination))
            {
                unlink($destination);
            }
            $file = $request->file('newimage');
            $filename = uniqid().'_update_'. $member->member_name;
            $file->move('uploads/images/members', $filename);
            $member->image = $filename;
        }
        
        $member->update();
        return redirect('/members');
    }

    public function memberConfirmation(Request $request)
    {
        $member = Member::find($request->id);
        $member->is_active = 2;
    
        $member->update();

        return redirect('/members');
    }

    // *************End Members


    // *************Admin
    function login(Request $request){
        return view('auth.login');
    }

    function loginCheck(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', '=', $request->email)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('loginId', $admin->id);
                return redirect('dashboard');
            }else if($request->password == $admin->password){
                $request->session()->put('loginId', $admin->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Login details are not valid');
            }
        }
        else{
            return back()->with('fail', 'Login details are not valid');
        }
    }

    function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    } 


    function adminsTable(){
        $admins = Admin::all();
        return view('server/pages/adminsTable', compact('admins'));
    }

    function adminInsert(Request $request){
        $admin = new Admin;
        $admin->admin_name = $request->admin_name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->mobile = $request->mobile;

        $admin->save();
        return redirect('/admins');
    }

    public function adminDelete(Request $request){
        Admin::find($request->id)->delete();
        return redirect('/admins');
    }

    public function adminEdit(Request $request)
    {
        $editData = Admin::find($request->id); 
        return view('server/pages/adminEdit', compact('editData'));
    }

    public function adminUpdate(Request $request)
    {
        // dd($request->id);
        $admin = Admin::find($request->id);
        $admin->admin_name = $request->admin_name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->mobile = $request->mobile;
       
        $admin->update();
        return redirect('/admins');
    }

    // *************End Admin


    // *************t_Shirt
    function tShirtsTable(){
        $tshirts = Shirt::all();
        return view('server/pages/t-shirtsTable', compact('tshirts'));
    }

    function tshirtInsert(Request $request){
        $tshirt = new Shirt;
        $tshirt->category = $request->category;
        $tshirt->buyer_name = $request->buyer_name;
        $tshirt->semester = $request->semester;
        $tshirt->nub_id = $request->nub_id;
        $tshirt->email = $request->email;
        $tshirt->contact = $request->contact;
        $tshirt->quantity = $request->quantity;
        $tshirt->size = $request->size;
        $tshirt->amount = $request->amount;
        $tshirt->payment_method = $request->payment_method;
        $tshirt->payment_num = $request->payment_num;
        $tshirt->trans_id = $request->trans_id;
        $tshirt->sent_num = $request->sent_num;
        $tshirt->address = $request->address;
        $request->validate([
            'trans_id' => 'required|unique:shirts'
        ]);

        $tshirt->save();
        return redirect('/confirm_order');
    }

    public function tshirtUpdate(Request $request)
    {
        // dd($request->id);
        $shirt = Shirt::find($request->id);
        $shirt->is_active = 2;
       
        $shirt->update();

        $name = $shirt->buyer_name;
        $size = $shirt->size;


        $send_mail = $shirt->email;
    
        
        Mail::to($send_mail)->send(new TshirtMail($name,$size));

        return redirect('/tshirts');
    }
    
    public function tshirtDelete(Request $request){
        Shirt::find($request->id)->delete();
        return redirect('/tshirts');
    }

    public function search(Request $request){
        
        $search = $request->search;
        $tshirts = Shirt::where('nub_id','like','%'.$search.'%')->orWhere('payment_num','like','%'.$search.'%')->get();
        return view('server/pages/t-shirtsTable', compact('tshirts'));
    }

    public function export(){
        return Excel::download(new ShirtsExport, 'shirts.xlsx');
    }
    // *************End t_Shirt

    function underMaintenance(){
        return view('server/pages/under-maintenance');
    }


    function send_mail(Request $request){
        $content = "Your Order is Confirmed";
        $send_mail = $request->mail;
    
        
        Mail::to($send_mail)->send(new TshirtMail($content));


        return "Mail Sent Successfully";
    }

    function mail_page(){

        return view('mail');
    }
    function load_test(){

        return view('test');
    }
}
