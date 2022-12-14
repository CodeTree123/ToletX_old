<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;
use Carbon\carbon;
use Image;
class AdvertiseController extends Controller
{
    //
    public function advertise(Request $request){
      $ad=Advertise::create([
        'user_id'=>auth()->id(),
        'title'=>$request->title,
        'photo'=>$request->photo,
        'active'=>1,
        'created_at'=>Carbon::now()

    ]);

      if($request->file('photo')){
       $file= $request->file('photo');
       $filename= date('YmdHi') . 'photo' . '.' . $file->getClientOriginalExtension();
       $file->move(public_path('uploads/advertise/'), $filename);
       $ad['photo']= $filename;

}
      $ad->save();
    //   Image::make($photo)->resize(1000, 1000)->save(base_path("uploads/hotels/" . $photoName), 100);
      return redirect()->route('index');
    }

    public function get_add(){
      return view('advertise.advertise');
    }
}
