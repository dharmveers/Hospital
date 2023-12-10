<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth ::id()){
            if(Auth :: user()->userType=='0'){
                $doctor=doctor::all();
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        $doctor=doctor::all();
        if(Auth::id()){
            return redirect('home');
        }else{
            return view('user.home',compact('doctor'));
        }
    }

    public function dr_Appointment(Request $request){
        $data= new appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->doctor=$request->doctor;
        $data->desc=$request->message;
        $data->mob=$request->mob;
        $data->status='in progress';
        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        }else{
            $data->user_id='';
        }
        $data->save();
        return redirect()->back()->with('message',"your request submitted successfully.we will contact you soon...");
    }

    public function showAppointment(){
        if(Auth::id()){
            $user_id=Auth::user()->id;
            $appoint=appointment::where('user_id',$user_id)->get();
            return view('user.appointmentDetails',compact('appoint'));
        }else{
            return redirect()->back();
        }
    }
    function delete_Appointment($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
