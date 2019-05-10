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
                <main class="py-4">
                    @yield('content')
                </main>
             </div>

        <br/>
        <br/>
        <footer class="row">
            @include('inc.footer')
        </footer>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script> 
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfVh4DjXDehml8bNOj0d6ph58uOLQumpA&callback=initMap"> </script>
    
    <script>
        $(document).ready(function () {
            $(".dropdown-toggle").dropdown();
        });
    </script>
    </body>
</html>