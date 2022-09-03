<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Booking;
use App\Models\Add_doctor;
use App\Models\Specialist;
use Illuminate\Support\Carbon;


class Doctor_profileController extends Controller
{
    public function doctorProfile($id){
        $doctor = Doctor :: findorFail($id);
        return view ('doctor_details', compact('doctor'));
      }
    
    public function booking(Request $request){

      if($request-> hasfile('document')){
        $file = $request ->document;
        $filename= time().'.'.$file-> getClientOriginalExtension();
        $path= 'public/fontend/images/document';
        $file -> move($path ,$filename); 
      }

      Booking::insert([
        'doctors_id'=>$request->doctors_id,
        'name'=> $request -> name,
        'phone'=> $request -> phone_number,
        'email'=> $request -> email,
        'booking_date'=> $request -> booking_date,
        'visiting_reason' => $request -> visiting_reason,
        'visit_before' => $request -> seen_before,
        'document'=> $filename,
        'updated_at'=>  Carbon::now(),
        'created_at'=> Carbon::now()
        // 'updated_at'=>$request->format('d.m.Y'),
        // 'created_at'=> $request->format('d.m.Y')
      ]);
      return redirect()->back();
      // $booking= new Booking();
      // $booking -> name= $request ->name;
      // $booking -> save();
      // return redirect()->back();
    }
    public function add_doctor(){
      $specialist=Specialist::all();
      return view ('dashboard/dashboard view/add-doctor',compact('specialist'));
    }
    public function added_doctor(Request $request){
       $doctor = new add_doctor();
      if ($request->hasFile('doc_image')){
        $file = $request ->File('doc_image');
        $filename = time().'.'.$file-> getClientOriginalExtension();
        // $path = 'public/backend/img/doctorImage';
        $file-> move(public_path('backend/img/doctorImage'), $filename);
        // $namet= 'backend/img/doctorImage'.$filename;
        // $file -> move($path,$filename);
      }
      
      $doctor->name = $request['name'];
      $doctor->phone = $request['phone_number'];
      $doctor->email = $request['email'];
      $doctor->specialist = $request['specialist'];
      $doctor->address = $request['address'];
      $doctor->education = $request['education'];
      $doctor->date_of_birth = $request['date_of_birth'];
      // $doctor->doc_imag = $request['filename'];
      $doctor['doc_image']= $filename;
      $doctor->save();
      return redirect()->back();
      

    }
    public function all_doctor(){
      $AllDoctor = Add_doctor::all();
      return view('dashboard/dashboard view/allDoctor',compact('AllDoctor'));
    }
    public function bookingList(){
      $booking_list = Booking:: all();
      return view ('dashboard/dashboard view/bookingList',compact('booking_list'));
    }
    public function patientsList(){
      $patientsList = Booking:: all();
      return view ('dashboard/dashboard view/patientsList',compact('patientsList'));
    }



}

