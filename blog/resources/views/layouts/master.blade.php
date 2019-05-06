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

    <script>
    $(document).ready(function(){
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd'
            });
                $(function(){
                    $("#From").datepicker();
                    $("#to").datepicker();
                });

                $('#range').click(function(){
                    var From = $('#From').val();
                    var to = $('#to').val();
                    if(From != '' && to != '' && to > From)
                    {
                        $.ajax({
                            url:"#",
                        method:"POST",
                        data:{From:From, to:to},
                        success:function(data)
                            {
                            $('#purchase_order').html(data);
                            }
                        });
                    }
                    else
                    {
                    alert("Please Select a correct Date");
                }
        });
    });
</script>

    </body>
</html>