<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
     public function create()
    {
        return view('create');
		 
    }
	 public function index()
    {
$file=Document::all();
		 return view('view',compact('file'));
    }
	 public function store(Request $request){
$data=new Document;
		 if($request->file('file')){
			 $file=$request->file('file');
			 $filename=time().'.'.$file->getClientOriginalExtension();
			 $request->file->move('storage/',$filename);
			 $data->file=$filename;
		 }
		 $data->title=$request->title;
		 $data->discription=$request->discription;
		 $data->save();
		 return redirect()->back();
	 }
	public function show($id)
    {
$data=Document::find($id);
		 return view('details',compact('data'));
    }
	public function download($file)
    {
return response()->download('storage/'.$file);
    }
}
