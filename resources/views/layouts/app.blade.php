<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>

    

    <div class="container">       

        @include('includes.header')

        <div class="row">
             @include('includes.messages')
        </div> 

        @if(Request::is('/'))
            @include('includes.hero')            
        @endif



        <div class="row mt-5">

           

            <div class="col-3">
                 @include('includes.aside')
            </div>
            <div class="col-9">
                 @yield('content')
            </div>
        </div>       

        @include('includes.footer')

    </div>
    
</body>
</html>