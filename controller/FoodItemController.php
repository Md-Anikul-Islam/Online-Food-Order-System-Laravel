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

class FoodItemController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_food_item');
    }



    public function all_item()
    {
        $this->AdminAuthCheck();
        $item_info=DB::table('tbl_item')->get();
        $manage_item=view('admin.all_food_item')
           ->with('all_item_info', $item_info);

        return view('pages.admin_home_contant')
              ->with('admin.all_food_item',$manage_item);

        //return view('admin.all_category');
    }


    public function save_item(Request $request)
    {
        $this->AdminAuthCheck();
        $data=array();
        $data['item_id']=$request->item_id;
        $data['item_name']=$request->item_name;
        $data['item_description']=$request->item_description;
        $data['publication_status']=$request->publication_status;
        
        $result=DB::table('tbl_item')->insert($data);
        Session::put('messege','Data are Succesully Inserted');
        return Redirect::to('/add-item');
    }

    public function unactive_item($item_id)
    {
        DB::table('tbl_item')
           ->where('item_id',$item_id)
           ->update(['publication_status' => 1]);
           Session::put('messege','Item Active Succesully');
           return Redirect::to('/all-item');
    }
    public function active_item($item_id)
    {
        DB::table('tbl_item')
           ->where('item_id',$item_id)
           ->update(['publication_status' => 0]);
           Session::put('messege','Item UnActive Succesully');
           return Redirect::to('/all-item');
    }


    public function delete_item($item_id)
    {
                 $this->AdminAuthCheck();
                 DB::table('tbl_item')
                ->where('item_id',$item_id)
                ->delete();

                Session::get('messege','Data Delete Succesully');
                return Redirect::to('/all-item');

    }


     public function AdminAuthCheck()
    {
      $admin_id=Session::get('admin_id');
      if($admin_id)
      {
        return;
      }
      else
      {
        return Redirect::to('/admin')->send();
      }
    }

}
