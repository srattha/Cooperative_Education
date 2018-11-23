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
        $user = Auth::user();
        if ($request->hasFile('file')) {

           $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path().'/upload/uploadPdf';
            $uplaod = $file->move($path,$fileName);
           $fileModel = new File;
           $fileModel->user_id = $user->id;
           $fileModel->name = $fileName;
           $fileModel->save();
 }
 return redirect('uploadPdf');

}
}
