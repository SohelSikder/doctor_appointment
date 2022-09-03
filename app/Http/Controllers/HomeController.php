<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Post;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;

class HomeController extends Controller
{
    public function home()
     {
        $doctor= Doctor::limit(4)->get();
        $specialist= Specialist:: limit(10)->get();
        $posts= Post :: limit(3)->get();

       return view('home', compact('doctor','specialist','posts'));
   }
//    public function doctorInHome($id){
//     $doctor = Doctor :: findorFail($id);
//     return view ('home', compact('doctor'));
//   }
    public function index()
    {
        $doctor = Doctor :: all();
        return view ('doctors',compact('doctor'));
    }  

    public function specialistDoctor($id)
    {
        // dd($id);
        $specialist = Specialist :: find($id);
        $doctor = Doctor::where('specialist_id',$id)->grt();
        // dd($specialist);
        // dd($specialist->doctor());
        // $doctor_list = $specialist->doctors()->get();
        // return($doctor_list); 
        return view('specialist',compact('specialist','doctor_list'));
    }
    public function booking($id)
    {
        // dd($id);
        $doctor= Doctor::findorFail($id);
        return view ('booking_form', compact('doctor'));
    } 

    public function all_post()
    {
        $all_posts= Post:: all();
        return view ('all_post',compact('all_posts'));
    }
    public function post_details ($id)

    { 
        $post_details= Post :: findorFail($id);
       
        return view ('post_details',compact('post_details'));
    }

    public function specialist(){
        return view ('dashboard/dashboard view/add-specialist');
    }
    public function storeSpecialist(Request $request){
        // dd($request->image);
        $specialist= new Specialist();
        // if($request->hasFile('image')){
           
        // }
        $img= $request->file('image');
        $name_gen = hexdec(uniqid()). '.' .$img->getClientOriginalExtension();
        Image::make($img)->resize(300,200)->save('img/category/'.$name_gen);
        $last_img = 'img/category/'.$name_gen;
        $specialist->name = $request['name'];
        $specialist->img = $last_img ?? Null;
        $specialist->save();
    }


}

