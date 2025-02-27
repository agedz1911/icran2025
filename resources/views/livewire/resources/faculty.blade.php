<div>
    @if (count($faculties) > 0)

        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class="w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex space-x-4 p-2 bg-icran-50 rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-secondary text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">International
                            Faculties</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-secondary text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Indonesian
                            Faculties</button>
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white bg-opacity-60 p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="flex flex-col md:flex-row md:flex-wrap justify-center items-center gap-2">
                            @foreach ($faculties->where('country', '!=', 'Indonesia')->sortBy('name') as $faculty)
                                <div class="card card-compact bg-icran-50 w-80 shadow-md">
                                    <figure class="">
                                        @if ($faculty->getMedia('images')->isEmpty())
                                            <div class="avatar p-3">
                                                <div
                                                    class="rounded-full ring ring-icran2-400 ring-offset-base-100 ring-offset-4">
                                                    <img src="{{ asset('images/speakers.jpg') }}"
                                                        alt="Default Doctor Image" class="rounded-lg" />
                                                </div>
                                            </div>
                                        @else
                                            @foreach ($faculty->getMedia('images') as $image)
                                                <div class="avatar p-3">
                                                    <div
                                                        class="rounded-full ring ring-icran2-400 ring-offset-base-100 ring-offset-4">
                                                        <img src="{{ $image->getUrl() }}" alt="{{ $faculty->name }}" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-secondary hover:cursor-pointer hover:text-accent">
                                            {{ $faculty->name }}
                                        </h2>
                                        <p class="">{{ $faculty->country }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white bg-opacity-60 p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="flex flex-col md:flex-row md:flex-wrap justify-center items-center gap-2">
                            @foreach ($faculties->where('country', 'Indonesia')->sortBy('name') as $faculty)
                                <div class="card card-compact bg-icran-50 w-80 shadow-md">
                                    <figure class="">
                                        @if ($faculty->getMedia('images')->isEmpty())
                                            <div class="avatar p-3">
                                                <div
                                                    class="rounded-full ring ring-icran2-400 ring-offset-base-100 ring-offset-4">
                                                    <img src="{{ asset('images/speakers.jpg') }}"
                                                        alt="Default Doctor Image" class="rounded-lg" />
                                                </div>
                                            </div>
                                        @else
                                            @foreach ($faculty->getMedia('images') as $image)
                                                <div class="avatar p-3">
                                                    <div
                                                        class="rounded-full ring ring-icran2-400 ring-offset-base-100 ring-offset-4">
                                                        <img src="{{ $image->getUrl() }}" alt="{{ $faculty->name }}" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-secondary hover:cursor-pointer hover:text-accent">
                                            {{ $faculty->name }}
                                        </h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <p class="italic tracking-wider text-sm font-semibold">*Within Confirmation</p>
    @else
        <div>
            <p class="text-gray-500 text-2xl text-center font-semibold">No Data</p>
        </div>
    @endif
</div>


{{-- <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center items-center gap-5">
    @foreach ($faculties as $faculty)
        <div class="card card-compact bg-icran-50 w-80 shadow-md">
            <figure class="">
                @if ($faculty->getMedia('images')->isEmpty())
                    <div class="avatar p-3">
                        <div class="rounded-full ring ring-icran-950 ring-offset-base-100 ring-offset-4">
                            <img src="{{ asset('images/doctor.png') }}" alt="Default Doctor Image"
                                class="rounded-lg" />
                        </div>
                    </div>
                @else
                    @foreach ($faculty->getMedia('images') as $image)
                        <div class="avatar p-3">
                            <div class="rounded-full ring ring-icran-950 ring-offset-base-100 ring-offset-4">
                                <img src="{{ $image->getUrl() }}" alt="{{ $faculty->name }}" />
                            </div>
                        </div>
                    @endforeach
                @endif
            </figure>
            <div class="card-body">
                <h2 class="card-title text-primary hover:cursor-pointer hover:text-accent">
                    {{ $faculty->name }}
                </h2>
                <p class="">{{ $faculty->country }}</p>
            </div>
        </div>
    @endforeach

</div> --}}
