<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cairo:wght@900;1000&family=Kanit:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->


<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
</head>
<body>


    <header class="position-sticky bg_navbarvolor">
        <div class="container">
         <nav class="navbar text-dark navbar-expand-lg">
          <div class="container colorm">
          <div class="d-flex justify-content-between w-100">                                    <!--  updateddd hereeeeeeeeeeeeeeeeee -->
                <div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item   ">
                            <a href="#" class="nav-link colorm hooverr home-nav  H_l">Free Shipping on All Orders Over $75!</a>
                           </li>
                        </ul>
                </div>
                <div>
                    <button class="navbar-toggler colorm " data-bs-toggle="collapse" data-bs-target="#topNav">
                        <span class="text-dark">Menu</span>
                         <span class="navbar-toggler-icon fs-3"></span>
                     </button>
                </div>

            </div>
         <div class="collapse navbar-collapse" id="topNav">
           <ul class="navbar-nav ms-auto">
             <!-- <li class="nav-item   ">
              <a href="#" class="nav-link colorm hooverr home-nav  H_l">My Account</a>
             </li> -->
             <li class="nav-item ps-2" >
              <a href="#about" class="nav-link colorm hooverr H_l">Wishlist</a>
             </li>
            <li class="nav-item  ps-2 ">
              <a href="#symptoms" class="nav-link colorm hooverr H_l">Currency:USD</a>
             </li>
              <li class="nav-item  ps-2">
                  <a href="/cart" class="nav-link colorm hooverr H_l">MyCart</a>
              </li>
              <li class="nav-item  ps-2">
              <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed sm:block d-md-flex">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm nav-link text-gray-700 dark:text-gray-500 underline">MyAccount</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm nav-link text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 nav-link text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
              </li>
       
           </ul>
         </div>
       </div>
     </nav>

    </header>

    <section class=" my-4 me-2 d-flex justify-content-center">
         <form class="text-center d-flex" action="{{route('search')}}">
            <input class="form-control me-2 btn search" type="search" placeholder="Search Here...." name="search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>
    </section>

    <header class="position-stick bg_secnavbarcolor">
        <div class="container">
         <nav class="navbar text-dark navbar-expand-lg">
          <div class="container colorm">
           <div class="d-flex justify-content-between w-100" >
                <div>
                <a class="navbar-brand" href="{{ url('/') }}"> <img class="card-img-top border_bottom" src="images/logo.png" alt="Card image cap"></a>
                </div>
                <button class="navbar-toggler colorm " data-bs-toggle="collapse" data-bs-target="#topNav2">
                   <span class="text-light">Menu</span>
                    <span class="navbar-toggler-icon fs-3"></span>
                </button>
            </div>
       
         <div class="collapse navbar-collapse" id="topNav2">
           <ul class="navbar-nav ms-auto">
             <li class="nav-item   ">
              <a href="/" class="nav-link hooverr text-light home-nav  H_l">Home</a>
             </li>
             <li class="nav-item ps-2" >
              <a href="{{route('women.index')}}" class="nav-link text-light hooverr H_l">Women</a>
             </li>
            <li class="nav-item  ps-2 ">
              <a href="{{route('men.index')}}" class="nav-link  text-light  hooverr H_l">Men</a>
             </li>
              <li class="nav-item ps-2">
                  <a href="{{route('feetwear.index')}}" class="nav-link  text-light  hooverr H_l">Footwear</a>
              </li>
              <li class="nav-item  ps-2">
                <a href="{{route('accessories.index')}}" class="nav-link text-light  hooverr H_l">Accessories</a>
            </li>
            <li class="nav-item  ps-2">
                <a href="/sales" class="nav-link  text-light hooverr H_l">Sales</a>
            </li>
            <li class="nav-item ps-2 ">
                <a href="/blog" class="nav-link  text-light hooverr H_l">Blog</a>
            </li>
           
             
           </ul>
         </div>
       </div>
     </nav>

    </header>

    @yield('content')

    <footer >
          <div class="d-md-flex text-light p-5 justify-content-between container">
            <div>
                <p class="header">SHOPS</p>
                <p>
                    <div class="grey">New In</div>
                    <div class="grey">Women</div>
                    <div class="grey">Men</div>
                    <div class="grey">Schuhe Shoes</div>
                    <div class="grey">Bags & Accessories</div>
                    <div class="grey">Top Brands</div>
                    <div class="grey">Sale & Special Offers</div>
                    <div class="grey">Lookbook</div>
                </p>
            </div>
            <div>
                <p class="header">INFORMATION</p>
                <p>
                    <div class="grey">About Us</div>
                    <div class="grey">Customer Service</div>
                    <div class="grey">New collection</div>
                    <div class="grey">Best Sellers</div>
                    <div class="grey">Manufacturers</div>
                    <div class="grey">Privacy policy</div>
                    <div class="grey">Terms & conditions</div>
                    <div class="grey">Blog</div>
                </p>
            </div>
            <div>
                <p class="header">CUSTOMER SERVICE</p>
                <p>
                    <div class="grey">Search Terms</div>
                    <div class="grey">Advanced Search</div>
                    <div class="grey">Orders and Returns</div>
                    <div class="grey">Contact Us</div>
                    <div class="grey">RSS</div>
                    <div class="grey">Help & FAQS</div>
                    <div class="grey">Consultant</div>
                    <div class="grey">Store Locations</div>
                </p>
            </div>
            <div>
                <p class="header">NEWSLETTER</p>
                <p>
                    <div class="mb-3 my-2">Sign Up for News Later</div>
                    <form action="">
                        <input type="text" class="btn"placeholder="Type Your E-mail">
                        <div class="my-2">
                            <button class="text-light btn my-2 bg_pink">SUBSCRIBE</button>
                        </div>
                    </form>
                </p>
            </div>
          </div>
    </footer>

    <section class="position-stick bg_secnavbarcolor">
        <div class="container">
         <nav class="navbar text-dark navbar-expand-lg p-4">
          <div class="container colorm">
            <div >
              <div class="grey">2014 ELLA Fashion Store Shopify. All Rights Reserved. Ecommerce Software by Shopify.</div>
            </div>
       
         <div class="collapse navbar-collapse">
           <ul class="navbar-nav ms-auto">
             <li class="nav-item   ">
              <div class="me-4 grey  H_l" style="font-style: italic;">VISA</div>
             </li>
             <li class="nav-item ps-2" >
              <div class="me-4 grey  H_l" style="font-style: italic;">Master Card</div>
             </li>
            <li class="nav-item  ps-2 ">
              <div class="me-4 grey H_l" style="font-style: italic;">PayPal</div>
             </li>
           </ul>
         </div>
       </div>
     </nav>

    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
</body>
</body>
</html>