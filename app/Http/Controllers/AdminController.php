<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addView(){
        return view('admin.add_doctor');
    }

    public function upload_Details(Request $request){
            $doctor=new doctor;
            // upload image
            $image=$request->file;
            $imageName='image_'.time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorImage',$imageName);
            $doctor->image=$imageName;

            $doctor->username=$request->username;
            $doctor->phone=$request->phone;
            $doctor->speciality=$request->speciality;
            $doctor->room=$request->room;

            $doctor->save();

            return redirect()->back()->with('message',"Doctor details saved successfully..");
    }

    public function showAppointment(){
        $data=appointment::all();

        return view('admin.showAppointDetails',compact('data'));
    }
    public function approveAppointment($id){
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancleAppointment($id){
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function allDoctors(){
            $data=doctor::all();
        return view('admin.viewDoctors',compact('data'));
    }

    public function deleteDoctor($id){
        $doctor=doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }

    public function updateDoctor($id){
            $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request,$id){
        $datas=doctor::find($id);
        //image upload
        if($request->file){
            $image=$request->file;
            $imageName='image_'.time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorImage',$imageName); 
            $datas->image=$imageName;
        }
        
        $datas->username=$request->username;
        $datas->phone=$request->phone;
        $datas->speciality=$request->speciality;
        $datas->room=$request->room;
       
        if($datas->save()){
            return redirect()->back();
        }
    }
}
