<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(Request $req){
       $data = new Register;
       $data->Full_name=$req->input('Full_name');
       $data->Email=$req->input('Email');
       $data->City=$req->input('City');
       $data->Age=$req->input('Age');
       if($req->hasFile('Profile_Img')){
        $file=$req->file('Profile_Img');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/Images/',$filename);
        $data->Profile_Img=$filename;
       }
       $data->save();
       toastr()->success('Registered sucessfully.', '', ['timeOut' => 5000]);
       return redirect('/');
    }
    public function show(){
        $data=Register::all();
        return view('home',['register'=>$data]);
    }
    public function editId($id){
        $data = Register::where('id',$id)->first();
        return view('edit',['register' =>$data]);
    }
    public function update(Request $req,$id){
        $data = Register::where('id',$id)->first();
        $data->Full_name=$req->input('Full_name');
        $data->Email=$req->input('Email');
        $data->City=$req->input('City');
        $data->Age=$req->input('Age');
        $data->save();
        toastr()->success('updated successfully.', '', ['timeOut' => 5000]);
        return redirect('/');
    }
    public function delete($id, $Profile_Img){
        $data = Register::where('id',$id)->where('Profile_Img',$Profile_Img)->first();
        unlink('uploads/images/'.$Profile_Img);
        $data->delete();
        toastr()->warning('Deleted successfully.', '', ['timeOut' => 5000]);
        return redirect()->back();
    }                      
    
}
