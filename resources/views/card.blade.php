<div class="card bg-dark text-light m-1 p-2 card-sizing animated fadeInUp">
    <img src="{{$movie->photo}}" class="card-img-top" alt="{{$movie->name}}">
    <div class="card-body p-2">
        <h6 class="card-title text-center">{{$movie->title}}</h6>
        <div class="d-flex justify-content-center">
            @for($i = 0; $i < $movie->rating; $i++)
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
            @endfor
            @for($i = 0; $i < 5-$movie->rating; $i++)
                <i class="fa fa-star text-muted" aria-hidden="true"></i>
            @endfor
        </div>
        <p class="m-0 text-center">
            <span class="badge badge-primary">4K</span>
            <span class="badge badge-secondary">{{$movie->genre->name}}</span>
        </p>
    </div>
    <a href="/movie/{{$movie->id}}}" class="btn btn-outline-light">Lihat Film</a>
</div>
