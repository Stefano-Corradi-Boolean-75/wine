<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous'/>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

   <div class="container">
    <div class="row">
        @foreach ($wines as $wine )
           <div class="col-md-4">

            <div class="card" style="width: 18rem;">
                <img class="wine-img" src="{{$wine->image}}" class="card-img-top" alt="{{$wine->nome}}">
                <div class="card-body">
                  <h5 class="card-title">{{$wine->nome}}</h5>
                  <p class="card-text">{{$wine->location}}</p>
                  <p class="card-text">{{$wine->cantina}}</p>
                  <p class="card-text">{{$wine->rating}}</p>
                  <a href="#"><i class="fa-solid fa-eye"></i></i>
                  </a>
                </div>
              </div>
           </div>
        @endforeach


    </div>
    {{ $wines->links() }}
   </div>

</body>

</html>
