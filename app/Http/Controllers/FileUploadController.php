<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
     public function fileUpload()
    {
        return view('fileUpload');
		 
    }
	   public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:70000',
        ]);
		   
  
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('uploads'), $fileName);
		$path = public_path('public/uploads' . $fileName);
		$myTheory->image = $path;

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
		  
   return response()->file($path);
   
    }}
