<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- bootstap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- custome css --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/custome.css') }}">
    {{-- font --}}
    {{-- font-family: 'Montserrat', sans-serif; --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    {{-- font-family: 'Poppins', sans-serif; --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    {{-- icon --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- carousel --}}
    <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.theme.default.min.css">
   
    @stack('css')


    <title>@yield('title')</title>
</head>

<body>

    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script>
        window.addEventListener("scroll", function() {
            let navArea = document.getElementById("navArea");

            if (window.pageYOffset > 0) {
                navArea.classList.add("is-sticky");
            } else {
                navArea.classList.remove("is-sticky");
            }
        });

    </script>
    <script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script>
    <script> 
        $( '#topheader .navbar-nav a' ).on('click',  
                    function () { 
            $( '#topheader .navbar-nav' ).find( 'li.active' ) 
            .removeClass( 'active' ); 
            $( this ).parent( 'li' ).addClass( 'active' ); 
        }); 
    </script> 
    <script>
        let $root = $('html, body');
        $('a[href^="#"]').click(function() {
            let href = $.attr(this, 'href');
            $root.animate({
              scrollTop: $(href).offset().top
            }, 500, function() {
              window.location.hash = href;
            });
            return false;
          });
      </script>
    @stack('js')
</body>
</html>
