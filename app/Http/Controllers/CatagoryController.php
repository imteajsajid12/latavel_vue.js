<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use App\Models\Save;
use App\Models\Total;
use App\Models\Totl;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
// use SebastianBergmann\Environment\Runtime;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function login()
    {
        //
    
    }

    public function index()
    {
        //
    $catagorys= Save::latest()->get();
        return $catagorys;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $dd=$request->qty - $request->qty1;
        $cart=Save::where('name',$request->name)->first();

        if(!is_null($cart)){
       $cart->increment ('qty');
       $data = Array();
        $data ['qty'] = $dd;
       Catagory::where('name',$request['name'])->update($data);
       }
       else{
         $catagory = new Save();
        $catagory->name= $request['name'];
        $catagory->slug= $request['slug'];
        $catagory->price= $request['price'];
        $catagory->qty= $request['qty1'];
        $catagory->save();
        $data = Array();
        $data ['qty'] = $dd;
        $cc=Catagory::where('name',$request['name'])->update($data);

      return back();
       }

        echo"$dd";

    }
       
    public function kk($id)
{
    return Catagory:: where('slug',$id)->first();
    echo "hi";
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

    if ($catagory){
        $catagory->where('name','sajid')->get();
     return $catagory;

}
}

public function edit_kk($id)
{
    return Catagory:: where('slug',$id)->first();
    echo "hi";
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
       echo "hi";

            // // return response()->jeson('success',200);
    }
    public function save1(Request $req)
    {
        $dd= Save::all();
        foreach($dd as $pro)
        {
            $total=new Total();
            $total->name =$pro->name;
            $total->qty =$pro->qty;
            $total->price =$pro->price;
            $total->slug =$pro->slug;
            $total->save();

        }
           Save::query()->delete();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id,Save $save)
    {
         $qty= $save->where('slug',$id)->first();
        $user= Catagory::where('slug',$id)->sum('qty');
        $ss= $user + $qty->qty;
        //sum
        // $dd=$save->where('id',$id)->first();
        $data = Array();
        $data ['qty'] = $ss;
        Catagory::where('slug',$id)->update($data);
        $qty->delete();
        return back();

    }
    public function Show1()
    {
        return Catagory::all();
    }
}
