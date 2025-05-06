<div class="bg-icran2-50 bg-opacity-30">
    {{-- Start Hero --}}
    <div class="hero min-h-screen mb-0 bg-gradient-to-l from-secondary to-maroon-900">
        <div class="hero-overlay bg-opacity-20 bg-cover bg-[url('images/bg1.png')]"></div>
        <div class="hero-content flex-col justify-start md:flex-row">
            <div class="max-w-2xl">
                <img src="images/logo/logo-icon-n2.png" class="w-80 lg:w-96" alt="">
                <div class="flex flex-col gap-4 mt-5">
                    <h1 class="text-4xl text-icran-100 font-semibold">{{ __('home.title') }} </h1>
                    <h4 class="text-xl text-primary font-semibold tracking-wide italic">" {{ __('home.theme') }} "</h4>
                    <p class="text-slate-50">{{ __('home.event_date') }} <br>{{ __('home.venue') }}</p>
                    <div class="flex flex-row gap-5">
                        <button class="btn btn-primary text-white">{{ __('home.register') }}</button>
                        <button class="btn btn-outline btn-primary">{{ __('home.read_more') }}</button>
                    </div>
                </div>
            </div>
            <img src="images/landing.png" class="lg:max-w-lg max-w-xs opacity-70" />

        </div>
    </div>

    {{-- End Hero --}}
    <div class="md:-mt-12 -mt-5 px-3 mb-20 lg:mb-40 container mx-auto">
        <div class="flex justify-center">
            <div class="card lg:w-3/4 w-full bg-maroon-950 shadow-xl py-3 px-2">
                <div class="card-body">
                    <div class="flex flex-col md:flex-row justify-between gap-3">
                        <div class="text-center mb-4">
                            <div class="flex justify-center">
                                <img src="images/logo/logo-light-n.png" class="w-40 md:w-48 " alt="">
                            </div>
                            <p class="text-slate-50 tracking-widest">{{ __('home.remaining') }}</p>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-7 items-center justify-items-center">
                            <div class="flex flex-col">
                                <h2 class="text-center text-3xl lg:text-4xl text-white font-semibold" id="days">
                                </h2>
                                <p class="text-center text-primary">{{ __('home.counter_day') }}</p>
                            </div>
                            <p class="hidden md:block text-white">:</p>
                            <div class="flex flex-col">
                                <h2 class="text-center text-3xl lg:text-4xl text-white font-semibold" id="hours">
                                </h2>
                                <p class="text-center text-primary">{{ __('home.counter_hour') }}</p>
                            </div>
                            <p class="hidden md:block text-white">:</p>
                            <div class="flex flex-col">
                                <h2 class="text-center text-3xl lg:text-4xl text-white font-semibold" id="mins">
                                </h2>
                                <p class="text-center text-primary">{{ __('home.counter_minute') }}</p>
                            </div>
                            <p class="hidden md:block text-white">:</p>
                            <div class="flex flex-col">
                                <h2 class="text-center text-3xl lg:text-4xl text-white font-semibold" id="secs">
                                </h2>
                                <p class="text-center text-primary">{{ __('home.counter_second') }}</p>
                                <div id="end"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Start About --}}
    <div class="flex justify-center">
        <div class="px-6 lg:px-8 pb-20 lg:pb-24 text-center max-w-6xl">
            <p class="text-secondary font-semibold tracking-wide mb-5">{{ __('menu.remarks') }} </p>
            <h1 class="text-2xl md:text-4xl text-secondary mt-2 mb-8 tracking-wide font-semibold">
                {{ __('home.title') }}
            </h1>
            @foreach ($messages as $message)
            <div class="mt-10">
                <div class="line-clamp-6 mb-8">{!! $message->description !!}
                </div>
                @if ($message->image == null)
                <div class="flex justify-center">
                    <div class="w-20 rounded-md">
                        <img src="{{ asset('images/speakers.jpg') }}" alt="Default Doctor Image"
                            class="object-cover rounded-lg w-20" />
                    </div>
                </div>
                @else
                <div class="flex justify-center">
                    <div class="w-20 rounded-md bg-gradient-to-b from-perhati-500 to-perhati-200">
                        <img src="{{ asset('storage/' . $message->image) }}"
                            class="object-cover w-20 rounded-lg" alt="{{ $message->name }}" />
                    </div>
                </div>
                @endif
                <p class="font-bold text-secondary underline mt-4">{{ $message->name }}</p>
                <p>- {!! $message->title !!}</p>
            </div>
            @endforeach
            <div class="py-10 mb-10">
                <a href="/congress-information#welcome-remarks"
                    class="btn btn-primary  text-center rounded-badge border w-full md:w-1/5">{{ __('home.read_more') }}
                    <i class="fa-solid fa-angles-right"></i></a>
            </div>
            <div class="flex flex-col lg:flex-row justify-center py-5 mb-5 gap-3">
                <div class="w-full md:w-3/5">
                    <div class="mockup-window border border-icran2-300 bg-primary">
                        <div class="flex justify-center border-t border-slate-300 ">
                            <video class="w-full" controls muted autoplay loop>
                                <source src="video/jatim.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-2/5">
                    <livewire:resources.flayer />
                </div>
            </div>
        </div>
    </div>
    {{-- End About --}}

    <div class="flex flex-col md:flex-row justify-evenly gap-10 px-5 md:px-20 place-content-center mb-20">
        <div class="flex items-center  gap-5">
            <div class="avatar transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                <div class="w-16  rounded-full bg-slate-400">
                    <div class="flex justify-center h-full items-center">
                        <svg class="text-white fill-current h-12 w-12" viewBox="0 0 70 80">
                            <path
                                d="M2.77535 80C2.48625 79.8828 2.21643 79.7657 1.9466 79.629C0.597482 78.9653 -0.192716 77.4817 0.0578346 75.9394C0.385478 73.7335 0.77094 71.5275 1.1564 69.3216C1.1564 69.3021 1.17568 69.263 1.17568 69.2435C1.36841 68.4041 1.88878 67.9941 2.56334 68.1308C3.21863 68.2674 3.56554 68.814 3.43063 69.6339C3.10299 71.7227 2.75607 73.7921 2.38988 75.8614C2.17788 77.0912 2.60189 77.6378 3.83537 77.6378C24.6311 77.6378 45.4075 77.6378 66.2032 77.6378C67.3789 77.6378 67.8222 77.0717 67.6294 75.9004C66.5116 69.2825 65.3937 62.6842 64.2952 56.0663C64.0061 54.2703 63.0617 53.1185 61.3078 52.611C58.8023 51.8887 56.2968 51.0883 53.7913 50.3074C53.5793 50.2489 53.348 50.1903 53.0397 50.1122C53.0397 52.1229 53.0204 54.0556 53.0589 56.0078C53.0589 56.1639 53.3673 56.3592 53.5793 56.4372C57.8194 57.8819 59.1878 62.8599 56.2775 66.2762C54.6779 68.1503 51.8062 68.7945 49.5127 67.7794C47.2192 66.7642 45.7159 64.285 45.9279 61.8448C46.1784 59.0922 47.6239 57.3157 50.1872 56.3982C50.3992 56.3201 50.7076 56.0273 50.7076 55.8125C50.7462 53.6847 50.7269 51.5568 50.7269 49.3509C49.4163 48.9409 48.125 48.5505 46.7374 48.121C46.4097 48.9019 46.0628 49.6242 45.7737 50.366C42.6514 58.5065 39.5099 66.6276 36.3877 74.7681C36.1179 75.4709 35.9637 76.3103 35 76.3103C34.0364 76.3103 33.8822 75.4709 33.6124 74.7681C30.2781 66.1591 26.9438 57.55 23.6289 48.9409C23.5325 48.7066 23.4169 48.4724 23.2627 48.1405C21.9328 48.5505 20.6223 48.9409 19.2924 49.3509C19.2924 50.2293 19.2539 51.0688 19.3117 51.8887C19.331 52.0839 19.5622 52.3767 19.755 52.4353C22.4532 53.3333 23.8601 55.1293 24.0722 57.9795C24.3227 61.3958 24.6118 64.8316 24.8624 68.2479C25.0165 70.4343 23.8216 71.7618 21.663 71.8008C21.2583 71.8008 20.8343 71.8204 20.4295 71.7618C19.7357 71.6642 19.3502 71.1761 19.4273 70.5124C19.5044 69.8487 19.9092 69.4973 20.5644 69.4582C20.9499 69.4387 21.3354 69.4387 21.7208 69.4582C22.3761 69.4777 22.6459 69.1654 22.5881 68.4821C22.3761 65.9053 22.2027 63.3479 22.0099 60.7711C21.9328 59.795 21.8557 58.7994 21.7594 57.8233C21.5859 55.9687 20.2753 54.7193 18.3866 54.6217C16.4785 54.5046 14.9174 55.6173 14.6669 57.4719C14.3778 59.795 14.2429 62.1376 14.0501 64.4607C13.9345 65.7296 13.8381 66.9985 13.761 68.2674C13.6839 69.2435 13.8574 69.4192 14.8018 69.4387C15.168 69.4387 15.5149 69.4192 15.8811 69.4582C16.5171 69.5168 16.8833 69.9072 16.9218 70.5124C16.9604 71.0785 16.6713 71.5666 16.0931 71.6642C13.4912 72.1717 11.1592 71.1761 11.429 68.0331C11.7374 64.4802 11.9494 60.9272 12.3155 57.3743C12.5661 54.8365 14.0694 53.2357 16.44 52.4548C16.864 52.3182 17.0182 52.1425 16.9989 51.713C16.9604 51.1664 16.9989 50.6393 16.9989 49.9951C15.0331 50.6003 13.1828 51.1664 11.3133 51.7325C10.4461 51.9863 9.59803 52.2791 8.73074 52.5134C6.99616 52.9819 6.0325 54.1142 5.74341 55.8906C5.33867 58.4089 4.89539 60.9077 4.47138 63.426C4.43284 63.6017 4.41356 63.7774 4.35574 63.9531C4.16301 64.5973 3.71973 64.9292 3.08372 64.8121C2.4477 64.7144 2.06224 64.2654 2.15861 63.5822C2.27424 62.5671 2.46698 61.5715 2.62116 60.5758C2.92953 58.7798 3.21863 56.9839 3.527 55.1879C3.97028 52.6891 5.39649 51.0883 7.76709 50.3465C10.6388 49.4485 13.5105 48.5895 16.3822 47.6915C16.652 47.5939 17.0375 47.3011 17.076 47.0473C17.7698 42.8306 20.0633 39.9609 23.9758 38.3992C24.0529 38.3797 24.1107 38.3211 24.2649 38.243C24.0914 38.0283 23.9565 37.8526 23.8023 37.6573C21.9136 35.2952 20.5452 32.6793 19.9092 29.712C19.8128 29.263 19.6586 29.0678 19.1768 29.0483C16.8255 28.8921 15.6113 27.5451 15.592 25.1634C15.592 23.9141 15.4185 22.528 16.4593 21.6495C17.4037 20.8491 17.4229 19.9512 17.4037 18.9165C17.3844 15.5392 17.3458 12.1425 17.4229 8.76521C17.5386 4.04095 21.3932 0.0585199 26.0573 -0.019567C32.0127 -0.117176 37.9874 -0.117176 43.9427 -0.019567C48.6068 0.0585199 52.4422 4.04095 52.5964 8.76521C52.6157 9.46799 52.6349 10.1708 52.6157 10.8736C52.5964 11.6544 52.1916 12.1034 51.5364 12.1425C50.8425 12.1815 50.38 11.7325 50.3222 10.9321C50.2836 10.3074 50.3222 9.68273 50.2836 9.05803C50.0909 5.13417 47.2963 2.34256 43.4224 2.30352C37.7946 2.26447 32.1669 2.24495 26.5391 2.30352C22.7038 2.34256 19.8321 5.13417 19.7357 9.01899C19.6393 13.099 19.7164 17.1791 19.7164 21.2591C20.391 21.4934 21.0077 21.6886 21.7208 21.9228C21.7401 21.63 21.7594 21.3567 21.7594 21.1029C21.7594 18.4285 21.7594 15.7345 21.7594 13.06C21.7594 9.79986 23.6674 7.88673 26.886 7.86721C27.4835 7.86721 28.0617 7.90625 28.6592 7.86721C30.3166 7.7696 31.7814 8.19908 33.092 9.27277C34.2484 10.2293 35.7709 10.2293 36.9466 9.25325C38.2379 8.17955 39.6641 7.75008 41.3023 7.84769C41.9962 7.88673 42.69 7.84768 43.3838 7.86721C46.3133 7.92577 48.2407 9.87794 48.2599 12.8452C48.2792 15.5783 48.2599 18.3113 48.2599 21.0444C48.2599 21.3177 48.2599 21.6105 48.2599 21.9228C48.9538 21.6886 49.5898 21.4934 50.3029 21.2396C50.3029 19.9121 50.3029 18.5261 50.3029 17.1595C50.3029 15.8906 50.6691 15.344 51.4785 15.344C52.2687 15.3635 52.5964 15.8711 52.5964 17.1205C52.5964 18.1356 52.5578 19.1508 52.6157 20.1659C52.6349 20.4782 52.8084 20.8491 53.0397 21.0639C53.7528 21.6886 54.2539 22.4304 54.3117 23.387C54.3695 24.2654 54.4273 25.1635 54.331 26.0224C54.119 27.7989 52.8469 28.9116 50.9582 29.0287C50.38 29.0678 50.1872 29.2435 50.0523 29.8096C49.4163 32.7379 48.0672 35.3147 46.217 37.6183C46.0628 37.8135 45.9086 38.0087 45.7544 38.204C46.6795 38.7115 47.6239 39.141 48.4527 39.7267C50.9196 41.4446 52.3844 43.8653 52.8277 46.8716C52.9048 47.4182 53.136 47.6134 53.5986 47.7501C56.4317 48.5895 59.2456 49.468 62.0788 50.3269C64.5457 51.0883 66.0298 52.7281 66.473 55.305C67.6294 62.1181 68.7858 68.9311 69.9229 75.7442C70.212 77.5012 69.2869 79.0434 67.6101 79.6876C67.4752 79.7462 67.3403 79.8047 67.2054 79.8828C45.7352 80 24.2649 80 2.77535 80ZM21.8557 25.1439C22.0099 26.8033 21.9907 28.4236 22.3376 29.9658C22.9736 32.7184 24.4191 35.1 26.3657 37.1303C29.5072 40.4099 33.2847 41.8545 37.7561 40.7418C41.0325 39.9219 43.4224 37.794 45.3111 35.0414C47.3541 32.0546 48.4527 28.814 47.913 25.1244C46.2941 24.9292 45.9279 24.4997 45.9279 22.8013C45.9279 19.5022 45.9279 16.1835 45.9279 12.8843C45.9279 11.5763 45.2726 10.4246 44.1933 10.366C42.1118 10.2489 40.011 9.78034 38.0644 11.303C36.2142 12.7476 34.0171 12.7672 32.0898 11.4006C30.7985 10.5026 29.5072 10.0927 27.9846 10.2293C27.5991 10.2684 27.2137 10.2293 26.8282 10.2293C24.9394 10.2489 24.0529 11.1273 24.0529 13.06C24.0529 16.3592 24.0529 19.6778 24.0529 22.977C24.0529 24.5192 23.5711 25.0463 21.8557 25.1439ZM42.5936 47.0278C41.3216 45.4856 41.3794 43.7091 41.3987 41.835C39.2787 42.9477 37.1779 43.4553 34.9615 43.4553C32.7451 43.4553 30.6636 42.9087 28.5821 41.8545C28.6399 43.7676 28.6399 45.5246 27.4064 47.0278C29.8734 48.9019 32.2825 50.7174 34.6916 52.5329C34.8266 52.6305 35.1542 52.6305 35.2891 52.5329C37.7175 50.7369 40.1074 48.9214 42.5936 47.0278ZM51.8062 65.9443C53.8299 65.9638 55.4874 64.285 55.5066 62.2547C55.5066 60.2049 53.8684 58.5456 51.8255 58.5456C49.8211 58.5456 48.2214 60.1659 48.1636 62.1961C48.1443 64.2264 49.7825 65.9443 51.8062 65.9443ZM34.9037 71.6447C34.9615 71.6447 35.0193 71.6447 35.0771 71.6447C35.6938 70.0244 36.2913 68.4041 36.8888 66.7642C36.9273 66.6471 36.9851 66.5105 36.9659 66.3933C36.619 64.4607 36.272 62.5085 35.9059 60.5173C35.5204 60.5173 35.1735 60.5563 34.8651 60.5173C34.1905 60.4002 33.9785 60.7125 33.9014 61.3567C33.7665 62.3914 33.5353 63.4065 33.3618 64.4216C33.2269 65.1635 32.8992 65.9834 33.0727 66.6276C33.5738 68.3455 34.2869 69.9853 34.9037 71.6447ZM50.4378 46.8521C49.9945 43.6115 46.8723 40.6442 43.75 40.4294C43.75 41.6203 43.7115 42.8111 43.7693 44.0019C43.7886 44.3923 43.962 44.8023 44.1162 45.1732C44.2704 45.5832 44.5595 45.6808 45.022 45.6417C45.6002 45.5832 46.1977 45.6222 46.7566 45.7589C47.9708 46.0712 49.1658 46.4812 50.4378 46.8521ZM26.1922 40.4294C22.5688 40.7418 19.6201 44.529 19.6586 46.8326C20.8728 46.4616 22.0677 46.0907 23.2627 45.7589C23.706 45.6417 24.1685 45.5441 24.6118 45.5832C25.6333 45.6613 26.038 45.5051 26.1537 44.4314C26.2886 43.1039 26.1922 41.7569 26.1922 40.4294ZM28.8326 55.6369C30.1239 55.0707 31.3574 54.5436 32.6872 53.9775C30.5287 52.3377 28.4857 50.7955 26.4427 49.2533C26.4042 49.2923 26.3657 49.3118 26.3271 49.3509C27.1559 51.4006 27.9653 53.4699 28.8326 55.6369ZM43.6729 49.3509C43.6344 49.3118 43.5766 49.2728 43.538 49.2533C41.4951 50.7955 39.4521 52.3572 37.3128 53.9775C38.6619 54.5632 39.8954 55.0902 41.1674 55.6369C42.0154 53.4895 42.8442 51.4202 43.6729 49.3509ZM37.5441 56.7496C35.8288 55.3831 34.1327 55.4221 32.4752 56.7496C33.304 58.8189 36.6575 58.8384 37.5441 56.7496ZM17.9048 23.5236C17.9048 24.2459 17.8855 24.8706 17.9048 25.4758C17.9433 26.53 18.5215 26.9399 19.6201 26.7057C19.6201 25.7491 19.6201 24.773 19.6201 23.7774C19.0804 23.6993 18.5793 23.6212 17.9048 23.5236ZM50.3414 26.7252C51.3629 26.8814 51.9218 26.6471 52.0182 25.9053C52.1146 25.1439 52.0375 24.3826 52.0375 23.5236C51.4015 23.6212 50.8618 23.6993 50.3414 23.7774C50.3414 24.8316 50.3414 25.7491 50.3414 26.7252ZM31.2996 62.0595C31.3381 62.04 31.3959 62.04 31.4345 62.0205C31.5501 61.3762 31.685 60.7515 31.7621 60.1073C31.7814 59.8926 31.7621 59.6193 31.6272 59.4631C31.2032 58.9165 30.7407 58.3894 30.2781 57.8623C30.201 57.7647 30.0275 57.7452 29.8926 57.7062C29.8541 57.8623 29.7385 58.038 29.7963 58.1747C30.2974 59.4826 30.7985 60.7711 31.2996 62.0595ZM38.6234 62.2547C39.2016 60.7515 39.7027 59.4436 40.2038 58.1161C40.2423 58.0185 40.1267 57.8623 40.0881 57.7257C39.9532 57.7647 39.799 57.7842 39.7027 57.8623C38.6426 58.897 37.7368 59.9902 38.4885 61.63C38.5463 61.7472 38.5463 61.9033 38.6234 62.2547Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-col">
                <div class="text-4xl text-primary font-bold flex flex-row">
                    <h1 x-data="animatedCounter(100, 200)" x-init="updatecounter" x-text="Math.round(current)"></h1>
                    <h1 class="text-4xl font-bold">+</h1>
                </div>
                <p class="text-xl font-semibold text-accent">Invited Speakers <br> <span class="text-xs text-icran2-900">Read More <i class="fa-solid fa-angles-right text-xs"></i></span></p>

            </div>
        </div>
        <div class="flex items-center gap-5">
            <div class="avatar transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                <div class="w-16  rounded-full bg-slate-400">
                    <div class="flex justify-center h-full items-center">
                        <svg class="text-white fill-current h-12 w-12" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 245.827 245.827" xml:space="preserve">
                            <path d="M223.336,148.384l-0.137-23.527l22.628-12.662L122.576,47.195L0,113.495l49.144,28.216 l0.098,16.766l0.01,1.339l0.449-0.215c-0.518,0.703-0.85,1.426-0.84,2.149c0.039,8.246,33.326,14.772,74.41,14.548 c41.064-0.215,74.302-7.122,74.273-15.349c0-0.723-0.381-1.426-0.889-2.149l0.449,0.215v-1.339l-0.088-16.834l21.309-13.258 l0.117,20.83c-2.345,1.006-3.976,3.312-3.957,6.009c0.02,3.537,2.892,6.399,6.458,6.37c3.586-0.02,6.429-2.912,6.409-6.439 C227.332,151.657,225.691,149.371,223.336,148.384z M123.241,170.621c-36.452,0.205-66.017-3.801-66.046-8.91 c-0.029-5.11,29.496-9.399,65.949-9.585c36.462-0.205,66.017,3.781,66.037,8.881 C189.209,166.098,159.703,170.426,123.241,170.621z M195.335,127.183c-4.934-5.188-22.618-18.886-72.426-18.602 c-49.877,0.264-67.336,14.128-72.211,19.394l-0.029-4.963c0,0,14.147-21.524,72.202-21.827 c58.025-0.313,72.436,21.045,72.436,21.045L195.335,127.183z M215.755,162.199l-2.511,36.433 c7.767-12.203,14.255-7.66,14.255-7.66l-0.156-28.832C218.998,165.414,215.755,162.199,215.755,162.199z"></path>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="flex-col">
                <div class="text-4xl text-primary font-bold flex flex-row">
                    <h1 x-data="animatedCounter(50, 200)" x-init="updatecounter" x-text="Math.round(current)"></h1>
                    <h1 class="text-4xl font-bold">+</h1>
                </div>
                <p class="text-xl font-semibold text-accent">Symposiums <br> <span class="text-xs text-icran2-900">Read More <i class="fa-solid fa-angles-right text-xs"></i></span></p>
            </div>
        </div>
        <div class="flex items-center gap-5 ">
            <div class="avatar transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105">
                <div class="w-16  rounded-full bg-slate-400">
                    <div class="flex justify-center h-full items-center">
                        <svg class="text-white fill-current h-12 w-12" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13,9H11V7A1,1,0,0,0,9,7V9H7a1,1,0,0,0,0,2H9v2a1,1,0,0,0,2,0V11h2a1,1,0,0,0,0-2Zm5,6V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM4,15V5A1,1,0,0,1,5,4H15a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H5A1,1,0,0,1,4,15ZM21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Z"></path>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="flex-col">
                <div class="text-4xl text-primary font-bold flex flex-row">
                    <h1 x-data="animatedCounter(4, 200)" x-init="updatecounter" x-text="Math.round(current)"></h1>
                    <!-- <h1 class="text-4xl font-bold">+</h1> -->
                </div>
                <p class="text-xl font-semibold text-accent">Workshops <br> <span class="text-xs text-icran2-900">Read More <i class="fa-solid fa-angles-right text-xs"></i></span></p>
            </div>
        </div>
    </div>

    {{-- Start Map --}}
    <div class="bg-blog2  py-32 lg:px-20 px-5">
        <div class="w-full mb-5">
            <iframe class="w-full rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7360021160866!2d112.75721927485!3d-7.270853371444361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd380923c5d%3A0x1b20677249bdc80f!2sASEEC%20Tower%20Universitas%20Airlangga!5e0!3m2!1sid!2sid!4v1740631803170!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="flex flex-col md:flex-row gap-5 justify-evenly items-start pt-10 px-3 md:px-10">
            <div class="w-full">
                <p class="text-white mb-0 text-sm">Welcome to the Magnificent Venue</p>
                <h1 class="text-2xl  mt-0 text-primary font-semibold tracking-wider">Surabaya, Indonesia</h1>
            </div>
            <div class="w-full">
                <p class="text-white"><span class="text-primary">Surabaya</span> The city of Surabaya is the capital of East Java Province which is the center of government and economy as well as the largest city in the province. Surabaya is also a city located in East Java Province, Indonesia. Surabaya is the second largest city in Indonesia after Jakarta.</p>
                <a href="javascript:void(0)" class="text-xs font-semibold mt-2 float-end text-primary tracking-wide underline">Read More<i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>
    {{-- End Map --}}
</div>


<script>
    function animatedCounter(targer, time = 200, start = 0) {
        return {
            current: 0,
            target: targer,
            time: time,
            start: start,
            updatecounter: function() {
                start = this.start;
                const increment = (this.target - start) / this.time;
                const handle = setInterval(() => {
                    if (this.current < this.target)
                        this.current += increment
                    else {
                        clearInterval(handle);
                        this.current = this.target
                    }
                }, 1);
            }
        };
    }

    let slideIndex = 1;
    // Fungsi untuk menampilkan slide
    function showSlides(n) {
        let slides = document.getElementsByClassName("carousel-item");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
    // Fungsi untuk memindahkan slide ke depan atau ke belakang
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    // Fungsi untuk memindahkan slide secara otomatis
    setInterval(function() {
        plusSlides(1);
    }, 10000); // rotate every 10 seconds
    // Inisialisasi slide
    showSlides(slideIndex);
    // Add event listeners to next and previous buttons
    let nextButtons = document.querySelectorAll('.btn-circle:nth-child(2)');
    let prevButtons = document.querySelectorAll('.btn-circle:nth-child(1)');
    nextButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            plusSlides(1);
        });
    });
    prevButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            plusSlides(-1);
        });
    });
</script>