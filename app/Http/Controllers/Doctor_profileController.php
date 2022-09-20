<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Booking;

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
        'doctors_id'=> $request->doctors_id,
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
       $doctor = new Doctor();
      if ($request->hasFile('doc_image')){
        $file = $request ->File('doc_image');
        $filename = time().'.'.$file-> getClientOriginalExtension();
        
        $file-> move(public_path('backend/img/doctorImage'), $filename);
        $img= 'backend/img/doctorImage/'.$filename;
        // $file -> move($path,$filename);
      }
      
      $doctor->name = $request['name'];
      $doctor->phone = $request['phone_number'];
      $doctor->email = $request['email'];
      $doctor->specialist_id = $request['specialist_id'];
      $doctor->address = $request['address'];
      $doctor->description = $request['description'];
      $doctor->education = $request['education'];
      $doctor->date_of_birth = $request['date_of_birth'];
      
      $doctor->price = $request['visit'];
      $doctor->type= 2;
      // $doctor->doc_imag = $request['filename'];
      $doctor['doc_image']= $img;
      $doctor->save();
      return redirect()->back()->with('status','Data insert Successfell');
      

    }
    public function all_doctor(){
      $allDoctor = Doctor::paginate(12);
      return view('dashboard/dashboard view/allDoctor',compact('allDoctor'));
    }
    public function editDoctor($id){
      // return $id;
      $specialist=Specialist::all();
      $editDoctor= Doctor:: find($id);

      // return $editDoctor;
      return view ('dashboard/dashboard view/editDoctor',compact('editDoctor','specialist'));
    }
    public function updateDoctor(Request $request,$id){
      // return $request->all()
      // return $request->doc_image;
      $updateDoctor= Doctor:: find($id);
      // return $updateDoctor;
      if($request->doc_image){
        $file = $request->doc_image;
        // return $file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file-> move(public_path('backend/img/doctorImage'), $filename);
        $img= 'backend/img/doctorImage/'.$filename;
        // $file -> move($path,$filename);
      }

        $updateDoctor['name'] = $request->name;
        $updateDoctor['phone'] = $request->phone_number;
        $updateDoctor['email'] = $request -> email;
        $updateDoctor['specialist_id']=$request ->specialist_id;
        $updateDoctor['address']= $request -> address;
        $updateDoctor['description'] = $request->description;
        $updateDoctor['education'] = $request->education;
        $updateDoctor['date_of_birth']= $request->date_of_birth ;
        
        $updateDoctor['price'] = $request->visit;
        
        // $doctor->doc_imag = $request['filename']
        
        $updateDoctor['doc_image']= $img;
        $updateDoctor->save();
      // if ($request->doc_image)
      // {
      //   $file = $request ->doc_image;
      //   $filename = time().'.'.$file->getClientOriginalExtension();
        
      //   $file-> move(public_path('backend/img/doctorImage'), $filename);
      //   $img = 'backend/img/doctorImage/'.$filename;
      //   // $file -> move($path,$filename);
      // }
      
      
     
      return redirect()->route('AllDoctor')->with('message',"Data updated successfully");
      
    }
// Delete data 
    public function delete_doctor($id){
      $deleteData = Doctor :: find($id);
      $deleteData->delete();
      return redirect()->route('AllDoctor')->with('message',"Data Delete successfully");

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

