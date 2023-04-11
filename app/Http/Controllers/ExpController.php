<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\expense;
class ExpController extends Controller
{
    public function index()
    {
      $expenses = expense::all();
        return view('expenses/' , compact('expenses'));
    }

    public function store(Request $request) 
    {

        expense::create([
        'name' => $request->name
        , 'Category' => $request -> Category
        , 'date' => now()
        , 'amount' => $request -> amount
    ]);

        return redirect()->back();
    }

 public function delete($id)
    {
     
      $expenses = expense::find($id);
           $expenses->delete();

        return redirect()->back();
    }

public function update($id){
       $expenses = DB::table('tasks')->where('id', $id)->get();
        return redirect()->back();
    }

}
