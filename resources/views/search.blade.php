@extends('layouts.header')


@section('content')
<section class="container products my-5 p-5 text-center d-flex justify-content-center ">
        @foreach($products as $product)
        <div class="me-3 my-2">
            <img src="images/{{$product->filename}}" alt="" class="card_photo">
            <div class="product_name"><div>{{$product->name}}</div>
           <div class="pink"> Price: {{$product->price}}.00$</div>
            </div>
            
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-half-empty-24.png" alt="">
            
            <div>
                <i class="fa-regular fa-heart me-2"></i>
               
                   <a href="/cart/cartstore/{{$product->id}}">
            
                   <button class="btn"><i class="fa-solid fa-cart-shopping me-2"></i></button>
                   </a>
                
                <i class="fa-solid fa-share-nodes me-2"></i>
            </div>
        </div>
       
       
       @endforeach
       @foreach($men as $men)
        <div class="me-3 my-2">
            <img src="images/{{$men->filename}}" alt="" class="card_photo">
            <div class="product_name"><div>{{$men->name}}</div>
           <div class="pink"> Price: {{$men->price}}.00$</div>
            </div>
            
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-half-empty-24.png" alt="">
            
            <div>
            <i class="fa-regular fa-heart me-2"></i>
               
               <a href="/cart/cartstorem/{{$men->id}}">
        
               <button class="btn"><i class="fa-solid fa-cart-shopping me-2"></i></button>
               </a>
            
            <i class="fa-solid fa-share-nodes me-2"></i>
            </div>
        </div>
       
        
       @endforeach
       @foreach($feet as $feet)
        <div class="me-3 my-2">
            <img src="images/{{$feet->filename}}" alt="" class="card_photo">
            <div class="product_name"><div>{{$feet->name}}</div>
           <div class="pink"> Price: {{$feet->price}}.00$</div>
            </div>
            
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-half-empty-24.png" alt="">
            
            <div>
            <i class="fa-regular fa-heart me-2"></i>
               
               <a href="/cart/cartstoref/{{$feet->id}}">
        
               <button class="btn"><i class="fa-solid fa-cart-shopping me-2"></i></button>
               </a>
            
            <i class="fa-solid fa-share-nodes me-2"></i>
            </div>
        </div>
       
        
       @endforeach
       @foreach($accessories as $accessories)
        <div class="me-3 my-2">
            <img src="images/{{$accessories->filename}}" alt="" class="card_photo">
            <div class="product_name"><div>{{$accessories->name}}</div>
           <div class="pink"> Price: {{$accessories->price}}.00$</div>
            </div>
            
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-filled-24.png" alt="">
                <img src="images/icons8-star-half-empty-24.png" alt="">
            
            <div>
                <i class="fa-regular fa-heart me-2"></i>
               
                   <a href="/cart/cartstoreA/{{$accessories->id}}">
            
                   <button class="btn"><i class="fa-solid fa-cart-shopping me-2"></i></button>
                   </a>
                
                <i class="fa-solid fa-share-nodes me-2"></i>
            </div>
        </div>
       
       
       @endforeach
       
 </section>
@endsection