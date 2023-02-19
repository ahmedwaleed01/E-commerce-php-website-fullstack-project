<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use  App\Models\womenproduct;
use  App\Models\menproduct;
use  App\Models\Feet;
use  App\Models\accessories;
use auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cart=cart::all()->where('userid', Auth::user()->id);
       return view('users.cart',compact('cart'));
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
       
      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
        cart::where('productid',$productid)->where('userid',Auth::user()->id)->delete();
        return redirect()->back();
    }
    public function cartstore($id){
        $womenproduct = womenproduct::find($id);
        cart::insert([
            'userid'=>Auth::user()->id,
            'productid'=>$womenproduct->id,
            'name'=>$womenproduct->name,
            'filename'=>$womenproduct->filename,
            'price'=>$womenproduct->price,
           ]);
           return redirect()->back();
    }
    public function cartstorem($id){
        $menproduct = menproduct::find($id);
        cart::insert([
            'userid'=>Auth::user()->id,
            'productid'=>$menproduct->id,
            'name'=>$menproduct->name,
            'filename'=>$menproduct->filename,
            'price'=>$menproduct->price,
           ]);
           return redirect()->back();
    }
    public function cartstoref($id){
        $feet = Feet::find($id);
        cart::insert([
            'userid'=>Auth::user()->id,
            'productid'=>$feet->id,
            'name'=>$feet->name,
            'filename'=>$feet->filename,
            'price'=>$feet->price,
           ]);
           return redirect()->back();
    }
    public function cartstoreA($id){
        $accessories = accessories::find($id);
        cart::insert([
            'userid'=>Auth::user()->id,
            'productid'=>$accessories->id,
            'name'=>$accessories->name,
            'filename'=>$accessories->filename,
            'price'=>$accessories->price,
           ]);
           return redirect()->back();
    }

}
