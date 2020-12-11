<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function contact(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['description']=$request->description;

        $contact=DB::table('contacts')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
    }


    public function index()
    {
        $contact=DB::table('contacts')->orderBy('id','DESC')
        ->get();
        return view('admin.contact.index',compact('contact'));
    }

       public function DeleteContact($id)
    {
         DB::table('contacts')->where('id',$id)->delete();
         $notification=array(
                 'messege'=>'Contact Successfully Deleted',
                 'alert-type'=>'success'
                       );
            return Redirect()->back()->with($notification);
    }

     public function ViewContact($id)
    {
        $show=DB::table('contacts')->where('contacts.id',$id)->first();
        return view('admin.contact.show',compact('show'));

    }
}