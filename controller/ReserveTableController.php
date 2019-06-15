<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ReserveTableController extends Controller
{



    public function index()
   {
     
       return view('home');
   }
    
    public function save_reserve(Request $request)
    {
       
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['datepicker']=$request->datepicker;
        $data['message']=$request->message;
        
        $result=DB::table('tbl_reserve')->insert($data);
        Session::put('messege','Reserve Table Request are Succes');
        return Redirect::to('home');
    }



    public function all_reserve()
    {
        //$this->AdminAuthCheck();
        $reserve_info=DB::table('tbl_reserve')->get();
        $manage_reserve=view('admin.reserve_table')
           ->with('all_reserve_info', $reserve_info);

        return view('pages.admin_home_contant')
              ->with('admin.reserve_table',$manage_reserve);

        //return view('admin.all_category');
    }


    public function delete_reserve($id)
    {
                 //$this->AdminAuthCheck();
                 DB::table('tbl_reserve')
                ->where('id',$id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all-reserve');

    }



}
