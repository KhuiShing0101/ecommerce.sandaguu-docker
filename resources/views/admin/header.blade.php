{{-- <div class="container-fluid page-body-wrapper"> --}}
<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0 fixed-top d-flex flex-row">

    <x-app-layout>

    </x-app-layout>

    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center" id="logo">
        <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="{{ asset('/images/logo.png') }}"
                alt="#" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
    </div>
</nav>
