<?php
namespace App\Http\Controllers;
use App\Models\Prihod;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $products = Prihod::orderBy('id','DESC')->paginate(10);
        return view("pages.index", compact("products"));
    }

    public function delete(Request $request)
    {
        $delete =Prihod::find($request->id);
        $delete->delete();
        return redirect()->back();
    }

   
    public function show_data(Request $request)
    {
        $show = Prihod::find($request->id);
        $show->Prihod::orderBy('select * from prihods where name->[$reguest]');
        return redirect()->back();
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
