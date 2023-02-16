<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/favicon.png" type="">
    <title>စန္ဒကူးနံ့သာဖြူ</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

    <style type="text/css">
        .center {
            margin: auto;
            widht: 70%;
            padding: 30px;
            text-align: center;

        }

        table,
        th,
        td {
            border: 1px solid grey;
            vertical-align: middle;
        }

        .th_deg {
            padding: 10px;

            font-size: 25px;

            text-transform: uppercase;
        }

        .tr_deg {
            font-size: 10px;
        }
        .orderImg
        {
            height:50px;
            width:50px;
        }
    </style>


</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @include('sweetalert::alert')

        <div class="center">

            <table>
            <thead class="thead-dark">
                <tr class="table">

                    <th>Product Title</th>

                    <th>Quantity</th>

                    <th>Price</th>

                    <th>Payment Status</th>

                    <th>Delivery Status</th>

                    <th>Image</th>

                    <th>Cancel Order</th>
                </tr>
            </thead>

                @foreach ($order as $order)
                    <tr class="td_deg">
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>{{ $order->delivery_status }}</td>
                        <td>
                            <img class="orderImg" src="product/{{ $order->image }}" alt="">
                        </td>

                        <td>
                            @if ($order->delivery_status == 'processing')
                                <a onclick="return confirm ('Are You  Sure to Cancel this Order!!!')"
                                    class="btn btn-danger" href="{{ url('cancel_order', $order->id) }}">
                                    Cancel Order</a>
                            @else
                                <p style="color:blue">not allow</p>
                        </td>
                @endif
                </tr>
                @endforeach
            </table>



        </div>




    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>
