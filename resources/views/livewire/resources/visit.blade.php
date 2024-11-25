<div>
    <div class="flex-col flex lg:flex-row gap-3 justify-between flex-wrap">
        <div class="w-full lg:w-1/2">
            <p class="mb-5"><span class="text-secondary">Manado</span> is the capital city of the Indonesian province of
                North Sulawesi. It is the second largest city in Sulawesi, Manado is among Indonesia's top-five tourism
                priorities and Bunaken National Park is one of the city's most famous tourist attractions.</p>
        </div>
        <div class="flex flex-row flex-wrap items-center justify-start gap-2">
            <p onclick="visa.showModal()" class="text-primary font-semibold hover:cursor-pointer hover:underline">
                Visa
            </p>
            <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <p class="text-primary font-semibold hover:text-icran2-800 hover:underline">Flight time to Manado </p>
            <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <p onclick="electric.showModal()" class="text-primary font-semibold hover:cursor-pointer hover:underline">
                Electric Current
            </p>
            <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <p class="text-primary font-semibold hover:text-icran2-800 hover:underline">Conference Venue </p>
        </div>
        <div class="w-full lg:w-1/2">
            <img src="images/Lokasi_Sulawesi_Utara_Kota_Manado.svg" class="rounded-lg shadow-md max-w-lg w-full"
                alt="">
        </div>
        <div>
            <h1>text</h1>
        </div>
    </div>

    <!-- modal electric -->
    <dialog id="electric" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <img src="images/electric.jpg" class="w-full max-w-2xl rounded-md shadow-md" alt="">
        </div>
    </dialog>

    <!-- modal visa -->
    <dialog id="visa" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <img src="images/visa.jpg" class="w-full max-w-2xl rounded-md shadow-md" alt="">
        </div>
    </dialog>
</div>
