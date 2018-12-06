<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
class EstablishmentController extends Controller
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
             $company = Company::orderBy('id','desc')->get();
            return view('admin.establishment.index',['company' => $company]);
            break;
        }
    }
    public function create_establishment(){
        return view('admin.establishment.create_establishment');
    }
    public function add_establishment(Request $request){

         $arr[] = ['company_name' => $request->company_name, 'coordinator' => $request->coordinator, 'coordinator_number' => $request->coordinator_number, 'email' => $request->email, 'home_number' => $request->home_number, 'moo' => $request->moo, 'industrial_estate' => $request->industrial_estate, 'building' => $request->building, 'soi' => $request->soi, 'road' => $request->road,
              'district' => $request->district, 'amphure' => $request->amphure, 'province' => $request->province, 'post_code' => $request->post_code, 'tel' => $request->tel, 'fax' => $request->fax, 'is_active' => 1];
            if(!empty($arr)){

                Company::insert($arr);

            }
            return back()->with('success', 'Insert Record successfully.');

    }

    public function edit_establishment($id)
    {

         $company = Company::where('id',$id)->first();
        return view('admin.establishment.edit_establishment',['company' => $company]);
    }

    public function update_establishment(Request $request)
    {
       $update[] = ['company_name' => $request->company_name, 'coordinator' => $request->coordinator, 'coordinator_number' => $request->coordinator_number, 'email' => $request->email, 'home_number' => $request->home_number, 'moo' => $request->moo, 'industrial_estate' => $request->industrial_estate, 'building' => $request->building, 'soi' => $request->soi, 'road' => $request->road,
              'district' => $request->district, 'amphure' => $request->amphure, 'province' => $request->province, 'post_code' => $request->post_code, 'tel' => $request->tel, 'fax' => $request->fax, 'is_active' => 1];
        $update_company = Company::where('id',$request->company_ID)->first();
        $update_company->company_name = $request->company_name;
        $update_company->coordinator = $request->coordinator;
        $update_company->coordinator_number = $request->coordinator_number;
        $update_company->email = $request->email;
        $update_company->moo = $request->moo;
        $update_company->industrial_estate = $request->industrial_estate;
        $update_company->building = $request->building;
        $update_company->soi = $request->soi;
        $update_company->road = $request->road;
        $update_company->district = $request->district;
        $update_company->amphure = $request->amphure;
        $update_company->province = $request->province;
        $update_company->post_code = $request->post_code;
        $update_company->tel = $request->tel;
        $update_company->fax = $request->fax;
        $update_company->home_number = $request->home_number;
        $update_company->save();
        if ($update_company) {
            return back()->with('success', 'Update Record successfully');
        }


    }

    public function destroy($id)
    {
         $delete_user = Company::where('id',$id)->delete();
        if($delete_user){
          return back()->with('success', 'Delete Record successfully.');
        }else{
            return "error message..";
        }
    }
}
