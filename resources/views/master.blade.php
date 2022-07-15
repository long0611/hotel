<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Luxury Booking</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('source/logo1.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="{{asset('source/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href=" {{asset('source/owlcarousel/assets/owl.theme.default.min.css')}}">
    <script src=" {{asset('source/owlcarousel/owl.carousel.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('source/style.css')}}">
    <link rel="stylesheet" href="{{asset('source/khachsan.css')}}">
    <link rel="stylesheet" href="{{asset('source/test/style.css')}}">
   
</head>
<body class="hero-anime">
   


    @include('header')

    @yield('content')

    @include('footer')
    <script>
        $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
        })
        
        }); 
     </script>


    
</body>
</html>