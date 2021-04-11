<?php

namespace App\Http\Controllers;

use App\Models\record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
	$request->validate(['name'=>'required|min:3|max:15','password'=>'required|min:5|max:20']);
    
	$res=new record;
$res->name=$request->input('name');
$res->password=sha1($request->input('password'));
$res->save();
$request->session()->flash('add','Record added successfully');
return redirect('Add');	
		
	
	
	}

 
    public function show(record $record)
    {
    return view('Home')->with('show_data',record::all());
    }


    public function edit(Request $req,record $record,$id)
    {
        $res=record::find($id);
		$res->name=$req->input('name');
		$res->password=sha1($req->input('password'));
		$res->save();
		$req->session()->flash('updated','Record successfully updated');
		return redirect('/');
		
		
		
    }

  
    public function update(Request $request, record $record,$id)
    {
       return view('update')->with('record',record::find($id));
    }

   
    public function destroy(Request $req ,record $record,$id)
    {
		record::destroy(array('id',$id));
		$req->session()->flash('msg','Record deleted successfully');
		return redirect('/');
    }
}
