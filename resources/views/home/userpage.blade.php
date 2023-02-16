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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .commentAndReply {
            display: block;
        }

        .cmt_deg {

            width: 100px;
            max-width: 500px;
            height: 100px;
            background: rgb(171, 171, 172);
            border-color: blue;
            box-flex: 300px;
            box-color: red;
            margin: 30px 100px 50px 20px;
            padding: 20px;

            @media screen {
                max-width: 600px;
                display: flex;
            }
        }

        .comment {}

        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');

        /* Copy and Paste */



        .card {
            position: relative;
            display: flex;
            padding: 20px;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 11px;
            -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
            box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
        }

        .media img {

            width: 60px;
            height: 60px;
        }


        .reply a {

            text-decoration: none;
        }

        /* copy and paste end */
    </style>
</head>

<body>

    @include('sweetalert::alert')

    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
    </div>

    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->




    {{-- ourmission section --}}

    @include('home.ourmission')

    {{-- end ourmission section --}}

    <!-- arrival section -->
    @include('home.new_arrivel')
    <!-- end arrival section -->

    <!-- why section -->

    @include('home.why')

    <!-- end why section -->

    <!-- product section -->
    @include('home.product')
    <!-- end product section -->


    {{-- Comment and reply system starts here --}}

    <div class="commentAndReply" style="background-color:#eee;">
        <div style="text-align:center; padding: 20px;">
            <h1 style="font-size: 30px; text-align: center; padding-top: 20px;">Comments</h1>
            <form action="{{ url('add_comment') }}" method="GET">
                @csrf
                <textarea
                    style="height: 150px; width: 100%; max-width: 600px; font-size: 18px; margin-bottom: 10px;
                border-radius:20px; box-shadow:#d2d2dc; box-shadow: 0px 0px 5px 0px rgb(161 163 164);"
                    placeholder="Comment something here" name="comment"></textarea>
                <br>
                <input type="submit" class="cmt_deg1" value="Comment">
            </form>

            @foreach ($comment as $comment)
                <div class="container mb-5 mt-5">

                    <div class="card">
                        <div class="row" style="margin:0;">
                            <div class="col-md-12">
                                <h3 class="text-center mb-5">
                                    "၀ယ်ယူသူများ၏ မှတ်ချက်များ"
                                </h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview"
                                                src="/images/client3.jpg" />
                                            <div class="media-body">
                                                <div class="row" style="margin: 0px;">
                                                    <div class="col-8 d-flex" style="align-items: center">
                                                        <h5
                                                            style="margin-right: 5px; text-transform: capitalize; font-weight: bold;">
                                                            {{ $comment->name }}</h5>
                                                        <span>- 1 month ago</span>
                                                    </div>



                                                    <div class=" reply w-full" style="padding-left: 15px;">
                                                        <a href="javascript:void(0); !#"
                                                            class="d-flex align-items-center me-3" onclick="reply(this)"
                                                            data-commentid="{{ $comment->id }}"
                                                            style="text-align: left">
                                                            <span><i class="fa fa-reply"></i>
                                                                reply</span>
                                                        </a>

                                                    </div>


                                                </div>

                                                <p style="text-align: left; padding-top: 15px; padding-left: 15px;">
                                                    {{ $comment->comment }}</p>

                                                @foreach ($reply as $rep)
                                                    <div class="media mt-4">
                                                        <a class="pr-3" href="#"><img class="rounded-circle"
                                                                alt="Bootstrap Media Another Preview"
                                                                src="/images/facelogo.png"
                                                                style="background-color:rgb(3, 4, 109);" /></a>
                                                        <div class="media-body">

                                                            <div class="row" style="margin: 0px;">
                                                                <div class="col-12 d-flex" style="align-items: center">
                                                                    <h5
                                                                        style="margin-right: 5px; text-transform: capitalize; font-weight: bold;">
                                                                        {{ $rep->name }}</h5>
                                                                    <span>- 1month ago</span>
                                                                </div>


                                                            </div>
                                                            <p
                                                                style="text-align: left; padding-top: 15px; padding-left: 15px;">
                                                                {{ $rep->reply }}</p>

                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Reply Textbox --}}
    <div style="display: none; text-align: center;" class="replyDiv">
        <form action="{{ URL('add_reply') }}" method="POST">
            @csrf
            <input type="text" id="commentId" name="commentId" hidden>
            <textarea style="height: 150px; width: 100%; max-width: 600px; font-size: 18px; margin-bottom: 10px;" name="reply"
                placeholder="Write something here"></textarea>
            <br>
            <button type="submit" class="btn btn-warning">Reply</button>
            <a href="javascript:void(0);" class="btn btn-danger" onclick="reply_close(this)">Close</a>
        </form>
    </div>
    </div>

    {{-- End Comment And Reply System --}}

    </div>
    <script type="text/javascript">
        function reply(caller) {
            document.getElementById('commentId')
                .value = $(caller).attr('data_Commentid');
            $('.replyDiv').insertAfter($(caller));

            $('.replyDiv').show();
        }

        function reply_close(caller) {
            $('.replyDiv').hide();
        }
    </script>

    {{-- Comment and reply system END here --}}

    <!-- subscribe section -->
    @include('home.subscriber')
    <!-- end subscribe section -->
    <!-- client section -->
    @include('home.client')
    <!-- end client section -->
    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->
    <div class="cpy_">

        <script>

            document.addEventListener("DOMContentLoaded", function(event) {
                var scrollpos = localStorage.getItem('scrollpos');
                if (scrollpos) window.scrollTo(0, scrollpos);
            });

            window.onbeforeunload = function(e) {
                localStorage.setItem('scrollpos', window.scrollY);
            };

        </script>
    </div>
    <!-- jQery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="{{ asset('home/js/custom.js') }}"></script>
</body>

</html>
