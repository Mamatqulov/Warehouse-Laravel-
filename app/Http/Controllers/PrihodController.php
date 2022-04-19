<?php

namespace App\Http\Controllers;
use App\Models\Prihod;
use Illuminate\Http\Request;
class PrihodController extends Controller
{

    public function index()
    {
        return view("pages.prihods");
    }

    public function prihod(Request $request)
    {
        $prihod = Prihod::create([
            "name" => $request->name,
            "premechanie" => $request->premechanie,
            "razmer" => $request->razmer,
            "white" => $request->white,
            "dcolor" => $request->dcolor,      
            "pdcolor" => $request->pdcolor,
            "count_p"=>$request->count_p
        ]);
        return redirect()->back();
    }
    


    public function create()
    {
       
    }

    public function store(Request $request)
    {
       
    }

 
    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
      
    }

    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
       
    }
}
