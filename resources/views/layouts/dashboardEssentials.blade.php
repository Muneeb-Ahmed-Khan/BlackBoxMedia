<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - {{config('app.name')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    * {box-sizing: border-box;}

    body { 
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .header {
    overflow: hidden;
    background-color: white;
    }

    .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 8px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    border-radius: 4px;
    }

    .header a.logo {
    font-size: 25px;
    font-weight: bold;
    }

    .header a:hover {
    background-color: #ddd;
    color: black;
    }

    .header a.active {
    background-color: dodgerblue;
    color: white;
    }

    .header-right {
    float: right;
    }

    @media  screen and (max-width: 500px) {
    .header a {
        float: none;
        display: block;
        text-align: left;
    }
    
    .header-right {
        float: none;
    }
    }


    .headerContent
    {
        max-width: 960px;
        margin: auto;
        margin-top : 1rem;
        margin-bottom : 1rem;

    }
    .searchBin
    {
        display: inline;
    }

    #navbarSupportedContent > ul > li > a {
        color: #d1d1d1;
    }

    #navbarSupportedContent > ul > li > a:hover {
        color: white;
        border-bottom: 1px white solid;
    }


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="header" style="margin-bottom: 10px;">
        <div class="headerContent">
            <a href="/" class="logo"> {{config('app.name')}}</a>
            <div class="header-right">
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
                <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#dc3545!important; padding:0px; min-height:50px">
        <div class="navbar-collapse" id="navbarSupportedContent" style="max-width:1000px;margin:auto;">
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
        </div>
    </nav>



    @yield('content')
    
    

    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2020 <a href="#">{{config('app.name')}}</a>.
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="{{asset('/js/toastr.js')}}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
</script>


@if(!empty($errors))

    @foreach ($errors->all() as $error)
        <script>
            Command: toastr["error"]("{{$error}}");
        </script>
    @endforeach
@endif


@if(session()->has('success'))
    <script>
        Command: toastr["success"]("{{__(session('success'))}}");
    </script>
@endif

@if(session()->has('info'))
    <script>
        Command: toastr["info"]("{{__(session('info'))}}");
    </script>
@endif


</body>
</html>