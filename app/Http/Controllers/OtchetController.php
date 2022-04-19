<?php

namespace App\Http\Controllers;
use App\Models\Prihod;
use Illuminate\Support\Facades\DB;
use App\Models\Otchet;
use App\Models\Rashod;
use Illuminate\Http\Request;




class OtchetController extends Controller
{
    public function otchet()
    {
       
        $products = Prihod::orderBy('id','DESC')->paginate(5);
        $name = DB::table('name_product')->get();
        return view("pages.otchet", compact("products"), ['name'=>$name]);
      }

    public function showTovar($code)
    {
        $number = Prihod::where('number', $code)->get();
        return $number;
    }

    public function showRashod($date)
    {
        
        $date_in = explode("&", $date);
        $rashods = Rashod::whereDate('rashods.date', ">=",  $date_in[0])
        ->whereDate('rashods.date', "<=",  $date_in[1])->get();
        return $rashods;
    }    
}
