@extends('layout')

@section('title','BeeFlix HomePage')

@section('body')
    <div id="overlayCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://imgsrv.voi.id/XkIxEy3b1djhRLlQWDf6NDTtQlQV_aexiom9QjSyEks/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy81NjUwNjY4Yy03YWFkLTRmMDAtOThjNy04Njk4YjU0MGM4OWMvMjAyMDA0MjgxNzA5LW1haW4uY3JvcHBlZF8xNTg4MDY4NTk1LmpwZWc.jpg" class="carousel-movie d-block w-100 mh-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn2.tstatic.net/batam/foto/bank/images2/23062020_lee-jae-wook-goo-ara-kim-joo-heon.jpg" class="carousel-movie  d-block w-100 mh-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.cheatsheet.com/wp-content/uploads/2020/08/Chadwick-Boseman-in-Avengers-Infinity-War-1024x540.jpg" class="carousel-movie d-block w-100 mh-25" alt="...">
            </div>
        </div>
    </div>
    <div class="container welcome-heading"> <h1 class="">Welcome To Beeflix!</h1></div>
    <section class="container py-5">
        @foreach($genres as $genre)
            <a class="text-decoration-none text-light" href="/genre/{{$genre->id}}"><h4 class="text-center text-sm-left">{{$genre->name}}</h4></a>
            <div class="d-flex flex-wrap justify-content-center justify-content-sm-start">
            @foreach($movies as $movie)
                @if($movie->genre_id != $genre->id)
                    @continue
                @endif
                @include('card',['movie' => $movie])
            @endforeach
        </div>
        @endforeach
    </section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.carousel-movie-list').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    </script>
@endsection
