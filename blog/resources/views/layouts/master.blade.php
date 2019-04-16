<!DOCTYPE html>
<html lang="en">
    <head>
      @include('inc.head')
    </head>

    <body>
        <div class="container">

            <header class="row">
                 @include('inc.navbar')
            </header>

            <div id="main" class="row">

            @yield('content')

            </div>



            <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
            </script>

            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxihPH_zFG348uy1ReJWBUTuQa5Zyc9g&callback=initMap"> </script>
            <script src="{{asset('js/script.js')}}"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            
            <footer class="row">
                @include('inc.footer')
            </footer>

        </div>
    </body>
</html>