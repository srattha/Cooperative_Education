<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
class UploadPdfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = File::orderBy('id','desc')->get();
        return view('admin.uploadPdf.index', ['file' => $file]);
    }
    public function storeFile(request $request){

        if ($request->hasFile('file')) {

           $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/upload/uploadPdf';
            $uplaod = $file->move($path,$fileName);
           $fileModel = new File;
           $fileModel->file_name = $fileName;
           $fileModel->save();
 }
 return redirect('uploadPdf');

}
}
