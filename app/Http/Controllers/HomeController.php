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
       
        $doctor= Doctor::limit(4)->orderBy('id','DESC')->get();
        $specialist= Specialist:: limit(10)->get();
        $posts= Post :: limit(3)->get();

       return view('home', compact('doctor','specialist','posts',));
   }
//    public function doctorInHome($id){
//     $doctor = Doctor :: findorFail($id);
//     return view ('home', compact('doctor'));
//   }


// ////////////////search///////////////



public function search_result(Request $request)
{
    $query = $request->search;
    $doctors = Doctor::where('name', 'LIKE', '%'. $query. '%')->orWhere('email', 'LIKE', '%'. $query. '%')->get();
    return view('search', compact('doctors'));

}










    public function index()
    {

        $doctor = Doctor :: all();
        return view ('doctors',compact('doctor'));
    }  
    public function allSpecialist(){
        $allSpecialist = Specialist :: all();
        return view ('allSpecialist',compact('allSpecialist'));
    }

    public function specialistDoctor($id)
    {
        // dd($id);
        $specialist = Specialist::find($id);
        // dd($specialist);
        $doctor = Doctor::where('specialist_id',$id)->get();
        // dd($specialist);
        // dd($specialist->doctor());
        $doctor_list = $specialist->doctors()->get();
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
        $specialist = Specialist::get();
        return view ('dashboard/dashboard view/add-specialist',compact('specialist'));
    }
    public function storeSpecialist(Request $request){
        // dd($request->image);
        $specialist= new Specialist();
        // if($request->hasFile('image')){
           
        // }
        $img= $request->file('image');
        $name_gen = hexdec(uniqid()). '.' .$img->getClientOriginalExtension();
        Image::make($img)->resize(300,200)->save('backend/img/category/'.$name_gen);
        $last_img = 'backend/img/category/'.$name_gen;
        // $path= 'img/category/';
        // $img -> move($path ,$last_img); 
        $specialist->name = $request['name'];
        $specialist->image = $last_img ?? Null;
        $specialist->save();
        return redirect()->back();
    }


}

