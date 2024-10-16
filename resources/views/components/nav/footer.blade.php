<div>
    <footer class="footer pt-32 pb-40 bg-base-200 footer-img">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 px-5 justify-items-start lg:justify-items-center w-full">
            <nav class="flex-col flex gap-3 text-white">
                <div class="flex-row flex">
                    <img src="images/logo/logo-dark.png" class="w-32" />
                    <img src="images/logo/logo-icon.png" class="w-32" />
                </div>
                <p>{{__('home.title')}} <br> {{__('home.association')}} </p>
                <h1 class="font-bold text-2xl mb-0 text-slate-300">Conference Organizer</h1>
                <p class="mt-0">MCO (Medical Conference Organizer) <br>
                A Division of PT. Pharma-Pro International</p>
                <div class="flex flex-row gap-3 items-center">
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid fa-envelope text-slate-300"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid fa-link text-slate-300"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-brands text-slate-300 fa-facebook text-lg"></i></a>
                    <a role="button" class="btn btn-square hover:bg-info border-primary" href=""><i class="fa-solid text-slate-300 fa-phone"></i></a>
                    
                </div>

            </nav>
            <nav class="flex-col flex gap-5 text-white">
                <h1 class="font-bold text-slate-300 text-2xl">{{__('home.use_link')}}</h1>
                <a href="/scientific-program" class="link link-hover">{{__('menu.program')}}</a>
                <a href="/congress-information" class="link link-hover">{{__('menu.congress-info')}}</a>
                <a href="/submission" class="link link-hover">{{__('menu.submission')}}</a>
                <a href="/registration" class="link link-hover">{{__('menu.registration')}}</a>
                
            </nav>
            <nav class="flex-col flex gap-2 text-white">
                <h1 class="font-semibold text-2xl text-slate-300">{{__('home.get_contact')}}</h1>
                <p class="text-slate-300">{{__('home.get_contact_us')}}</p>
                <div class="grid grid-flow-col gap-2">
                    <a href="" data-tip="@gmail.com" class="btn btn-outline hover:bg-primary btn-md tooltip tooltip-bottom py-2 btn-ghost btn-square"><i class="fa-brands fa-youtube text-red-600 text-lg"></i></a>
                    <a href="" data-tip="@ig" class="btn btn-outline hover:bg-primary btn-md tooltip tooltip-bottom py-2 btn-ghost btn-square"><i class="fa-brands fa-instagram text-rose-500 text-lg"></i></a>
                    <a class="btn btn-outline hover:bg-primary btn-md  py-2 btn-ghost btn-square"><i class="fa-solid fa-envelope text-white text-lg"></i></a>
                    <a class="btn btn-outline hover:bg-primary btn-md   py-2 btn-ghost btn-square"><i class="fa-brands fa-whatsapp text-lg text-green-500"></i></a>
                </div>
            </nav>
        </div>

    </footer>
    <footer class="footer text-slate-200 px-10 py-4 footer-img border-t border-slate-300">
        <aside class="items-center grid-flow-col">
            <p>MIS - IT Pharma-Pro © 2024 </p>
        </aside>
        <nav class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a href="" class="hover:text-primary-400">National Congress of PERHATI-KL </a>
            </div>
        </nav>
    </footer>
</div>