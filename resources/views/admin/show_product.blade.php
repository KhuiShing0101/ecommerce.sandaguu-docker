<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .center {
            margin: auto;
            width: 80%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size {
            height: 30px;
            width: 30px;
        }

        .th_color {
            background: white;
        }

        .th_deg {

            color: black;
            font-size: 5px;
        }

        .deg {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->


        @include('admin.header')

        <!-- partial -->

        <div class="main-panel">

            <div class="content-wrapper">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button"class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif


                <h2 class="font_size">All Products</h2>

                <table class="center">
                    <thead class="thead-dark">
                        <tr class="th_color">

                            <th class="deg">Product title</th>
                            <th class="deg">Description</th>
                            <th class="deg">Quantity</th>
                            <th class="deg">Category</th>
                            <th class="deg">Price</th>
                            <th class="deg">Discount Price</th>
                            <th class="deg">Product Image</th>
                            <th class="deg">Delete</th>
                            <th class="deg">Edit</th>

                        </tr>
                    </thead>
                    @foreach ($product as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>
                            <td><img class="img_size" src="/product/{{ $product->image }}">
                            </td>
                            <td>
                                <a href="{{ url('delete_product', $product->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete')">
                                    Delete
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ url('update_product', $product->id) }}">
                                    Edit
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <!-- page-body-wrapper ends -->
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
