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
       @yield('script')
    
    
    
    </body>
</html>