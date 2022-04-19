<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{

    public function index()
    {
        return view ('index');
    }

    public function buying(Request $request)
    {
              
        $select = DB::table('buying')->find($request->id);
        return view ('buying', ['select' => $select]);
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