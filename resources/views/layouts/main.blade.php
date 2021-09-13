<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey-Apps</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    {{-- header-logo --}}
   <section class="header">
        <div class="header-container">
            <h1>Survey.in</h1>
        </div>
   </section>
    {{-- header-logo --}}

    {{-- banner-backgorund --}}
    <section class="banner" id="banner">
        <div class="background-wrapping">
            <img src="img/background.jpg" alt="" class="image-background">
        </div>
    </section>
    {{-- banner-backgorund --}}

    <section class="form">
        @yield('login-form')
    </section>
        
    
    @include('partials.footer')
    

</body>
</html>