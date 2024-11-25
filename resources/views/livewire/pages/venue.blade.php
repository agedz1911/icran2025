<div class="bg-icran2-50 bg-opacity-30">
    <div class="pt-20 pb-20 lg:px-20 px-5 bg-doctor" id="manado">
        <div class="flex-col flex mb-5">
            <h4 class="text-secondary font-semibold">Welcome to the Magnificent Venue</h4>
            <h1 class="text-3xl text-primary font-semibold">Manado, Indonesia</h1>
        </div>
        <livewire:resources.visit />
    </div>

    <div class="bg-doctor pt-24 pb-52 lg:px-20 px-5" id="venue">
        <div class="flex-col flex mb-5">
            <h4 class="text-secondary font-semibold">{{ __('menu.venue') }}</h4>
            <h1 class="text-3xl text-primary font-semibold">Four Points by Sheraton, Manado</h1>
        </div>
        <livewire:resources.location />
    </div>

    <div class="bg-doctor pt-24 pb-52 lg:px-20 px-5" id="visa-regulation">
        <div class="flex-col flex mb-5">
            <h4 class="text-secondary font-semibold">{{ __('menu.visit') }}</h4>
            <h1 class="text-3xl text-primary font-semibold">{{ __('menu.visa') }}</h1>
        </div>
        <livewire:resources.visa />
    </div>
</div>
