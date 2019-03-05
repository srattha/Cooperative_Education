<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
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
            $user = User::get();
               return view('admin.user.index', ["user" => $user]);
            break;

        }

    }


    public function createuser()
    {
        return view('admin.user.create_user');
    }

     public function store(Request $request)
    {
       // return $request->all();

        $add_user = new User; 
        $add_user->name = $request->name;
       // $add_user->identification_number = "0000000000-0";
        $add_user->user_type_id = $request->user_type_id;
        $add_user->password = Hash::make($request->password);
        $add_user->save(); 
        if ($add_user) {
           return back()->with('success', 'Insert Record Successfully.'); 
       }
   }

    public function update(Request $request, user $user)
    {
        // return $request->all();
        $update_user = User::where('id',$request->id)->first();
        $update_user->name = $request->name;
        $update_user->user_type_id = $request->user_type_id;
        $update_user->password = Hash::make($request->password);
        $update_user->save();
        if ($update_user) {
           return back()->with('success', 'Update Record Successfully.');
       }
    }


   public function EditUser($id){

    $edit_user = User::where('id',$id)->first();
    return view('admin.user.edit_user', ["edit_user" => $edit_user]);
   }

   public function destroy($id)
    {

        $delete_user = User::where('id',$id)->delete();
        if($delete_user){
          return back()->with('success', 'Delete Record Successfully.');
        }else{
            return "error message..";
        }
    }
}
