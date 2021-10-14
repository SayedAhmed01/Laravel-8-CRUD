<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function show()
    
    {   $cruds = Crud::all();
        return view('pages.dashboard',compact('cruds'));
    }
    public function addnew()
    {
        return view('pages.add_new');
    }

     public function create(Request $request)
    {    $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',

    ]);

        $store = new Crud();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->address = $request->address;
        $store->save();
        session()->flash('success','Insert Successfully');
        return back();
        
    }

    public function update_show($id)
    {
         $update = Crud::where('id',$id)->first();
        return view('pages.update',compact('update'));
    }

    public function update(Request $request, $id)
    {   
       
        $update = Crud::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->address = $request->address;
        $update->save();
        session()->flash('success','Updated Successfully');
         return redirect()->route('dashboard');
    }


    public function delete($id) 
    {   
         
         Crud::find($id)-> delete();
         session()->flash('success','Deleted Successfully');
         return back();
         
    }

}
