<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/favicon.png" type="">
    <title></title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}"/>
    <!-- font awesome style -->
    <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('sweetalert::alert')

      <style type="text/css">
            .Center
            {
                margin:auto;
                width:70%;
                text-align:center;
                padding:30px;
            }
            table,th,td
            {
                border:1px solid grey;
                margin-left: 150px;
            }
            .th_deg
            {
                font-size:20px;
                padding:5px;
            }

            .img_deg
            {
                width:100px;
                height:100px;
            }

            .total_deg
            {
                font-size:20px;
                padding:40px;
            }
      </style>

   </head>
   <body>
        @include('sweetalert::alert')

    <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

         @if(session()->has('Success'))
         <script>
             Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: "{{ session()->get('Success') }}",
                 showConfirmButton: false,
                 timer: 1500
             });
         </script>
         @endif

            <div class="Center">
                <table>
                <thead class="thead-dark">
                    <tr class="table">

                        <th scope="col" class="th_deg">product title</th>
                        <th scope="col" class="th_deg">product quantity</th>
                        <th scope="col" class="th_deg">price</th>
                        <th scope="col" class="th_deg">Image</th>
                        <th scope="col" class="th_deg">Action</th>

                    </tr>
                </thead>
                    <?php $totalprice=0; ?>

                    @foreach ($cart as $cart )

                    <tr>
                        <td class="align-middle">{{$cart->product_title}}</td>
                        <td class="align-middle">{{$cart->quantity}}</td>
                        <td class="align-middle">{{$cart->price }}</td>
                        <td class="align-middle"><img class="img_deg" src="/product/{{$cart->image}}"></td>
                        <td class="align-middle">
                            <a class="btn btn-danger"
                               onclick="confirmation(event)"
                                href="{{url('remove_cart',$cart->id)}}">
                                    Remove Product
                            </a>
                        </td>
                    </tr>



                        <?php $totalprice=$totalprice + $cart->price ?>

                    @endforeach

                </table>

                    <div>
                        <h1 class="total_deg">Total Price : {{$totalprice}}</h1>
                    </div>

                    <div>
                        <h1 style="font-size:2px;padding-bottom:15px">Proceed to Order</h1>
                        <a href="{{url('cash_order')}}"class="btn btn-danger">Cash On Delivery</a>
                        <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
                    </div>
            </div>
        </div>


        @include('sweetalert::alert')




        <script>
              function confirmation(ev) {
                ev.preventDefault();
                var urlToRedirect = event.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                swal({
                    title: "Are you sure to cancel this product",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willCancel) => {
                    if (willCancel) {



                        window.location.href = urlToRedirect;

                    }


                });


            }


        </script>



      <!-- jQery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
