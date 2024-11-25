<div>
    @foreach ($messages as $message)
    <div class="flex flex-col md:flex-row justify-between border-b py-10 gap-10">
        <div class="flex flex-col items-center lg:pb-10 justify-start">
            <div class="card card-compact glass w-96 shadow-md relative">
                <figure>
                    {{-- <p>{{$message->image}}</p> --}}
                    @if ($message->image == null )
                    <div class="avatar">
                        <div class="bg-gradient-to-b from-icran-500 to-icran-200 rounded-md w-full">
                            <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                class="object-cover rounded-lg " />
                        </div>
                    </div>
                    @else
                    <div class="avatar">
                        <div class=" rounded-md bg-gradient-to-b from-icran-500 to-icran-200 w-full">
                            <img src="{{ asset('storage/' . $message->image) }}"
                                class="object-cover rounded-lg" alt="{{ $message->name }}" />
                        </div>
                    </div>
                    @endif
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-primary">
                        {{ $message->name }}
                    </h2>
                    <p class="absolute top-2 right-3 text-primary font-medium">{!! $message->title !!} </p>
                </div>
            </div>
        </div>
        <div class="">
            <article class="text-justify lg:text-lg">
                <p class="">{!! $message->description !!}</p>
            </article>
        </div>
    </div>
    @endforeach
</div>