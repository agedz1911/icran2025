<div class="bg-icran2-50 bg-opacity-30">
    <div class="container pt-20 pb-20 lg:px-20 px-5 bg-doctor " id="welcome-remarks">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">{{__('menu.congress-info')}}</h4>
            <h1 class="text-4xl text-secondary font-semibold">{{__('menu.remarks')}}</h1>
        </div>
        <livewire:resources.welcome-remarks />
    </div>

    <div class="bg-doctor bg-local pt-20 pb-52 lg:px-20 px-2" id="organizing-committee">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary font-semibold">{{__('menu.congress-info')}}</h4>
            <h1 class="text-4xl text-secondary font-semibold">{{__('menu.committee')}}</h1>
        </div>
        <livewire:resources.committee />
    </div>

    <div class="bg-doctor pt-24 pb-52 lg:px-20 px-2" id="faculties">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary font-semibold">{{__('menu.congress-info')}}</h4>
            <h1 class="text-4xl text-secondary font-semibold">{{__('menu.faculty')}}</h1>
        </div>
        <livewire:resources.faculty />
    </div>
</div>