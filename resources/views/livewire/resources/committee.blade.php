<div>
    <div class="flex flex-col">
        @if (count($committees) > 0)
        @foreach ($uniqueCategories as $category)
        <h1 class="font-semibold text-center mb-5 text-primary text-2xl">{{ $category }}</h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center items-center gap-5 mb-10">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card card-compact shadow-md bg-icran-50 bg-opacity-45 w-80">
                <figure>
                    @if ($committee->image == null)
                    <div class="avatar">
                        <div class="w-full">
                            <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                                class="rounded-lg" />
                        </div>
                    </div>
                    @else
                    <div class="avatar">
                        <div class="w-full">
                            <img src="{{ asset('storage/' . $committee->image) }}" class="object-cover rounded-lg" alt="{{ $committee->name }}" />
                        </div>
                    </div>

                    @endif
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-primary hover:text-accent">{{ $committee->name }}</h2>
                    <p>
                        @if ($committee->title != null)
                        <span class="">{{ $committee->title }}</span>
                        @endif
                    </p>
                </div>
            </div>
            @endif
            @endforeach

        </div>
        @endforeach
        @else
        <div>
            <p class="text-gray-500 text-2xl font-semibold">No Data</p>
        </div>
        @endif
    </div>
</div>