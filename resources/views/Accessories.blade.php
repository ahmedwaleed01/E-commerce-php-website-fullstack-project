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
               
                   <a href="/cart/cartstoreA/{{$product->id}}">
            
                   <button class="btn"><i class="fa-solid fa-cart-shopping me-2"></i></button>
                   </a>
                
                <i class="fa-solid fa-share-nodes me-2"></i>
            </div>
        </div>
       
       
       @endforeach
       
 </section>
@endsection