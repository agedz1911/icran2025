<div>
    @if (count($faculties) > 0)
    <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center items-center gap-5">
        @foreach ($faculties as $faculty)
        <!-- <div class="card card-compact bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div> -->
        <div class="card card-compact bg-icran2-50 w-80 shadow-md">
            <figure class="">
                @if($faculty->getMedia('images')->isEmpty())
                <div class="avatar p-3">
                    <div class="rounded-full ring ring-accent  ring-offset-base-100 ring-offset-4">
                        <img src="{{ asset('images/doctor.png') }}" alt="Default Doctor Image" class="rounded-lg" />
                    </div>
                </div>
                @else
                @foreach($faculty->getMedia('images') as $image)
                <div class="avatar p-3">
                    <div class="rounded-full ring ring-accent  ring-offset-base-100 ring-offset-4">
                        <img src="{{ $image->getUrl() }}" alt="{{$faculty->name}}" />
                    </div>
                </div>
                @endforeach
                @endif
            </figure>
            <div class="card-body">
                <h2 class="card-title text-primary hover:cursor-pointer">
                    {{$faculty->name}}
                </h2>
                <p class="">{{$faculty->country}}</p>
            </div>
        </div>
        @endforeach

    </div>
    @else
    <div>
        <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
    </div>
    @endif
</div>