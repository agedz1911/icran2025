<div>
    <div class="carousel w-full shadow-md rounded">
        @foreach ($flayers as $image)
        <div id="{{$loop->index}}" class="carousel-item relative w-full max-w-lg ease-in-out duration-300 h-full object-cover">
            <img src="{{ asset('storage/' . $image->flayer)}}" alt=""
                class="h-full object-cover max-w-full rounded-2xl" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#" class="btn btn-circle btn-secondary btn-outline ">❮</a>
                <a href="#" class="btn btn-circle btn-secondary btn-outline">❯</a>
            </div>
        </div>
        @endforeach
    </div>
</div>