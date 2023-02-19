@extends('layouts.header')


@section('content')
<section class="cart container my-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php $total_price=0;
                  $count=1;
            ?>
              @foreach($cart as $cart)
               
              <tr>
                <th scope="row">{{$count}}</th>
                <td><img src="images/{{$cart->filename}}" alt="" class="card_img" ></td>
                <td>{{$cart->name}}</td>
                <td>{{$cart->price}}</td>
                <td>
                <form action="{{route('cart.destroy',$cart->productid)}}" method="post">
                 @csrf
                 @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
                </form>
                </td>
                <?php $total_price=$total_price+$cart->price; 
                    $count++;
                ?>
              </tr>
              @endforeach
              <th scope="col" class="my-2 ">Total Price</th>
              <td></td>
              <td></td>
              <td>{{$total_price}}</td>
              <td></td>
            </tbody>
          </table>
 </section>
      
@endsection