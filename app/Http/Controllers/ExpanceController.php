<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expance;

class ExpanceController extends Controller
{
    public function ExpanceAdd(){
       
        return view('admin.expance_form');
    }

    public function ExpanceStore(Request $request){
        
        Expance::insert([
            'expance_from'=>$request->expance_from,
            'expance_amount'=>$request->expance_amount,
            'bank'=>$request->bank,
            'date'=>$request->date,    
        ]);
        return redirect()->route('income.all');
    }

}
