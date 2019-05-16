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
       
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfVh4DjXDehml8bNOj0d6ph58uOLQumpA&callback=initMap"> </script>
    
    @yield('script')
    </body>
</html>