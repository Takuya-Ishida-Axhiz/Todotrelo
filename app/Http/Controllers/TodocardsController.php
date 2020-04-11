<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \App\todocard;
use App\Http\Requests\PostRequest;

class Todocardscontroller extends Controller
{
    public function index(){
        $todocard = todocard::latest() ->get();
        
        // dd($todocard->toArray());
        return view('todotrelo.index',['todocard' => $todocard]);
    
    }
    
    
    public function show($id){
        try {
        $card= todocard::findOrFail($id);
        return view('todotrelo.show',['todocard' => $card]);
        } catch(ModelNotFoundException $e) {
        // return view(ろぐへ)
        }
    }
    
    
    public function create(){
         return view('todotrelo.create');
         
    }
    
    
    public function store(PostRequest $request){
        
        $newcard = new Todocard();
        $newcard->body = $request->body;
        $newcard->save();
        
        return redirect('/');
    }
    
    
    public function edit($id){
        try {
        $card= todocard::findOrFail($id);
        return view('todotrelo.edit',['todocard' => $card]);
        } catch(ModelNotFoundException $e) {
        // return view(ろぐへ)
        }
    }
    
    
    public function update(PostRequest $request){
       
        $upcard = Todocard::findOrFail($request->id);
        $upcard->body = $request->body;
        $upcard->save();
        
        return redirect('/');
    }
    
    
    
    public function destroy (Request $req){
        
        $delcard = Todocard::findOrFail($req->id);
        // dd($delcard);
        $delcard->delete();
        
        
        
        
        // $delcard = Todocard::find($request->id)->delete();
        // // Todocard::find($request->id)->delete();
        // dd($delcard);
        return redirect('/');
    }
    
}