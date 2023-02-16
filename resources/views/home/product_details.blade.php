<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>စန္ဒကူးနံ့သာဖြူ</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}"/>
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

        <div class="col-sm-6 col-md-4 col-lg-4"
            style="margin: auto; width: 50%;padding: 30px" >
               <div class="img-box" style="padding:20px">
                  <img src="/product/{{$product->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$product->title}}
                  </h5>

               @if ($product->discount_price!=null)

                   <h6 style="color:red">
                       Discount Price <br>
                       MMK{{$product->discount_price}}
                   </h6>

                   <h6 style="text-decoration : line-through;color:blue">
                       Price
                       <br>
                        MMK{{$product->price}}

                   </h6>
               @else
                   <h6 style="color:blue">
                       Price <br>
                      MMK{{$product->price}}
                   </h6>

               @endif
                    <h6>Product Category:{{$product->category}}</h6>
                    <h6>Product Detail:{{$product->description}}</h6>
                    <h6>Product Quantity:{{$product->quantity}}</h6>
                     <a href="" class="btn btn-primary">Add to Cart</a>
               </div>
            </div>
           </div>

      <!-- footer start -->
        @include('home.footer')
      <!-- footer end -->

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
