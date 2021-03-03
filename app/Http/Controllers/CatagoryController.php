<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use SebastianBergmann\Environment\Runtime;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $catagorys= Catagory::latest()->get();
        return $catagorys;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $catagory = new Catagory();
        $catagory->name= $request['name'];
        $catagory->slug= $request['slug'];
       

        $catagory->save();
      return back();
        // echo"$request";
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        
    //
    if ($catagory){
        $catagory->get();
     return $catagory;
    
}

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
  
        $catagory->name= $request['name'];
        $catagory->slug= $request['slug'];
       

        $catagory->save();
        return back();
     
            // // return response()->jeson('success',200);
         
        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        if ($catagory){
            $catagory->delete();
            // return response()->jeson('success',200);
         
        }
        else{
            return response()->jeson('faild',404);
        }
        //
    }
}
