<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\womenproduct;
use App\Models\menproduct;
use App\Models\Feet;
use App\Models\accessories;
use App\Models\role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\storemrequest;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users=User::all();
        return view('users.allusers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=role::all();
        return view('',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
       
      $request->validated();
 
      $category=$request->category;
       if($category=="womenproduct"){
        womenproduct::insert([
            
            'name'=>$request->name,
            'filename'=>$request->filename,
            'price'=>$request->price,
           ]);
       }elseif($category=="menproduct"){
        menproduct::insert([
            
            'name'=>$request->name,
            'filename'=>$request->filename,
            'price'=>$request->price,
           ]);
       }elseif($category=="feetwear"){
        Feet::insert([
            
            'name'=>$request->name,
            'filename'=>$request->filename,
            'price'=>$request->price,
           ]);
       }elseif($category=="accessories"){
        accessories::insert([
            
            'name'=>$request->name,
            'filename'=>$request->filename,
            'price'=>$request->price,
           ]);
       }
  
       return redirect()->back();
    }
    public function storem(storemrequest $request){
        $request->validated();
        User::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=> Hash::make($request->password),
         'role_id'=>$request->role
        ]);
        return redirect()->back();
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
       $user=User::find($id);
       return view('',compact('user'));
    }
    public function showproduct()
    {
       
        $womenproducts=womenproduct::all();
        $menproducts=menproduct::all();
        $feetproducts=Feet::all();
        $accessoriesproducts=accessories::all();
         return view('users.allproducts',['womenproducts'=>$womenproducts,'menproducts'=>$menproducts,'feetproducts'=> $feetproducts,'accessoriesproducts'=>$accessoriesproducts]);
    }
   public function deletewomen($productid){
    womenproduct::where('id',$productid)->delete();
    return redirect()->back();
    
   }
   public function deletemen($productid){
    menproduct::where('id',$productid)->delete();
    return redirect()->back();
    
   }
   public function deletefeet($productid){
    Feet::where('id',$productid)->delete();
    return redirect()->back();
    
   }
   public function deleteaccessories($productid){
    accessories::where('id',$productid)->delete();
    return redirect()->back();
    
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
 
        $user = User::find($id);
         
        return view('',compact('user'));
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
        $user = User::find($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
           ]);
         return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->Delete();
     
        return redirect()->back();
    }
    public function ShowPosts($id){
        return "helooo".$id;
    }
}
