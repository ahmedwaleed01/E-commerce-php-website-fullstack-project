@extends('layouts.navbar')


@section('content')

<section class="cart container my-5">
<h2 class="text-center">WOMEN PRODUCTS</h2>
        <table class="table my-5" >
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
            <?php 
                  $count=1;
            ?>
              @foreach($womenproducts as $womenproducts)
               
              <tr>
                <th scope="row">{{$count}}</th>
                <td><img src="images/{{$womenproducts->filename}}" alt="" class="card_img"></td>
                <td>{{$womenproducts->name}}</td>
                <td>{{$womenproducts->price}}</td>
                <td>
                <!-- <form action="" method="post">
                
                <input type="submit" value="Delete" class="btn btn-danger">
                </form> -->
                <a href="/deletewomen/{{$womenproducts->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a>
                </td>
                <?php  
                    $count++;
                ?>
              </tr>
              @endforeach
            </tbody>
          </table>
          <h2 class="text-center my-3">MEN PRODUCTS</h2>
          <table class="table my-5">
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
            <?php 
                  $count=1;
            ?>
              @foreach($menproducts as $menproducts)
               
              <tr>
                <th scope="row">{{$count}}</th>
                <td><img src="images/{{$menproducts->filename}}" alt="" class="card_img"></td>
                <td>{{$menproducts->name}}</td>
                <td>{{$menproducts->price}}</td>
                <td>
                <a href="/deletemen/{{$menproducts->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a>
                </td>
                <?php  
                    $count++;
                ?>
              </tr>
              @endforeach
            </tbody>
          </table>
          <h2 class="text-center my-3">FOOTWEAR PRODUCTS</h2>
          <table class="table my-5">
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
            <?php 
                  $count=1;
            ?>
              @foreach( $feetproducts as  $feetproducts)
               
              <tr>
                <th scope="row">{{$count}}</th>
                <td><img src="images/{{$feetproducts->filename}}" alt="" class="card_img"></td>
                <td>{{ $feetproducts->name}}</td>
                <td>{{ $feetproducts->price}}</td>
                <td>
                <a href="/deletefeet/{{$feetproducts->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a>
                </td>
                <?php  
                    $count++;
                ?>
              </tr>
              @endforeach
            </tbody>
          </table>
          <h2 class="text-center my-3">ACCESSORIES PRODUCTS</h2>
          <table class="table my-5">
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
            <?php 
                  $count=1;
            ?>
              @foreach( $accessoriesproducts as  $accessoriesproducts)
               
              <tr>
                <th scope="row">{{$count}}</th>
                <td><img src="images/{{$accessoriesproducts->filename}}" alt="" class="card_img"></td>
                <td>{{ $accessoriesproducts->name}}</td>
                <td>{{ $accessoriesproducts->price}}</td>
                <td>
                <a href="/deleteaccessories/{{$accessoriesproducts->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a>
                </td>
                <?php  
                    $count++;
                ?>
              </tr>
              @endforeach
            </tbody>
          </table>




          


        
 </section>

@endsection