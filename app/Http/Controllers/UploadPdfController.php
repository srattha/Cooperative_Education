<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Auth;
class UploadPdfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function delete($name, $id){
        File::where('id', $id)->delete();
        $path = public_path().'/adminpdf';
        unlink($path.'/'.$name);
        return redirect('uploadPdf');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user();
        $users_type_id = $user->user_type_id;
        switch ($users_type_id) {
            case '1':
            return redirect("/");
            break;
            case '2':
           $file = File::orderBy('id','desc')->get();
            return view('admin.uploadPdf.index', ['file' => $file]);
            break;

        }

    }
    public function storeFile(request $request){
        // return public_path();
        $user = Auth::user();
        if ($request->hasFile('file')) {

           $file = $request->file('file');
            // $extension = $file->getClientOriginalExtension(); // you can also use file name
            // $fileName = time().'.'.$extension; 
           $fileName = $file->getClientOriginalName();
            $path = public_path().'/adminpdf';
            $uplaod = $file->move($path,$fileName); 
           $fileModel = new File;
           $fileModel->user_id = $user->id;
           $fileModel->name = $fileName;
           $fileModel->status_file = $request->status;
           $fileModel->save();
 }
 return redirect('uploadPdf');

}
}
