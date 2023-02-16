<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .logincss {
            margin-right: 30px;
        }

        .header_section {
            background:rgb(255, 255, 255);
            opacity: 90%;
            position: relative;
            top: 0;
            width: 100%;
            /* height: 70px; */
            z-index: 999;
        }
        .nav-link i{
            margin-right:5px;
        }


    </style>
</head>
<body>

<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/redirect')}}"><img width="250" src="{{ asset('/images/logohome.png') }}" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item {{Request::is('/')?'active':'';}}">
                   <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{Request::is('products')?'active':'';}}">
                   <a class="nav-link" href="{{url('products')}}">Products</a>
                </li>


                <li class="nav-item {{Request::is('show_cart')?'active':'';}}">
                    <a class="nav-link" href="{{url('show_cart')}}">
                        <i class="fas fa-shopping-cart"></i> Cart
                    </a>
                </li>
                <li class="nav-item {{Request::is('show_order')?'active':'';}}">
                    <a class="nav-link" href="{{url('show_order')}}">
                        <i class="fas fa-truck"></i> Order
                    </a>
                </li>

                <li class="nav-item {{Request::is('contact')?'active':'';}}">
                    <a class="nav-link" href="{{url('contact')}}">
                        <i class="fas fa-phone"></i> Contact
                    </a>
                </li>


            @if (Route::has('login'))

                 @auth

                <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                 </li>

                 @else

                 <li class="nav-item">
                    <a class="btn btn-outline-primary" href="{{ route('login') }}">Sign In</a>
                </li>

                <li class="nav-item" style="margin-left:10px;">
                    <a class="btn btn-outline-success" href="{{ route('register') }}">Sign Up</a>
                </li>

                @endauth

            @endif

             </ul>
          </div>
       </nav>
    </div>
 </header>

</body>
