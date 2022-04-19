<?php

namespace App\Http\Controllers;

use App\Models\Prihod;
use App\Models\Rashod;
use Illuminate\Http\Request;

class RashodController extends Controller
{

    public function index()
    {
        $rashod = Rashod::orderBy('id', 'DESC')->paginate(5);
        return view("pages.rashods", ['rashods' => $rashod]);
    }
    public function rashod(Request $request)
    {
        $rashod = Rashod::create([
            "id_rashod" => $request->id_rashod,
            "pokupatel" => $request->pokupatel,
            "tel" => $request->tel,
            "date" => $request->date,
            "dostavka" => $request->dostavka,
            "count_r" => $request->count_r
        ]);
        
        $qwe = Prihod::where('name', $request->id_rashod)->first();
        $qwe->count_p = $qwe->count_p - $request->count_r;
        $qwe->save();
        return redirect()->route('rashod');
    }

    public function delete(Request $request)
    {
        $delete =Rashod::find($request->id);
        $delete->delete();
        return redirect()->back();
    }
}
