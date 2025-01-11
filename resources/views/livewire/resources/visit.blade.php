<div>
    <div class="flex-col flex lg:flex-row gap-3 justify-between items-end flex-wrap">
        <div class="w-full lg:w-1/2">
            <p class="mb-5"><span class="text-secondary">Manado</span> is the capital city of the Indonesian province of
                North Sulawesi. It is the second largest city in Sulawesi, Manado is among Indonesia's top-five tourism
                priorities and Bunaken National Park is one of the city's most famous tourist attractions
                and Toraja Coffee is a treasure from the lush highlands of South Sulawesi, Indonesia. Known for its distinct taste and cultural heritage, this specialty coffee has captured the hearts of coffee enthusiasts around the world</p>
        </div>

        <div class="flex flex-row flex-wrap items-center justify-start gap-2">
            <a href="#visa-regulation" class="text-primary font-semibold hover:cursor-pointer hover:underline">
                Visa
            </a>
            <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <button onclick="flight.showModal()" class="text-primary font-semibold hover:text-icran2-800 hover:underline">Flight time to Manado </button>
            <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <button onclick="electric.showModal()" class="text-primary font-semibold hover:cursor-pointer hover:underline">
                Electric Current
            </button>
            <!-- <i class="fa-solid fa-arrows-up-down text-xs text-red-600"></i>
            <p class="text-primary font-semibold hover:text-icran2-800 hover:underline">Conference Venue </p> -->
        </div>
        <div class="w-full">
            <div class="md:flex" x-data="{ selectedTab: 'bunaken' }">
                <ul class="flex-column w-full lg:max-w-52 space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                    <li>
                        <a href="#" @click="selectedTab = 'bunaken'"
                            :class="{'text-white bg-icran2-900 dark:bg-icran2-900': selectedTab === 'bunaken', 'hover:text-gray-900 bg-primary hover:bg-gray-100 dark:bg-primary dark:hover:bg-gray-700 dark:hover:text-white': selectedTab !== 'bunaken'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full"
                            role="tab" aria-selected="selectedTab === 'bunaken'">
                            <i class="w-4 h-4 me-2  fa-solid fa-umbrella-beach"></i>
                            Bunaken
                        </a>
                    </li>
                    <li>
                        <a href="#" @click="selectedTab = 'toraja'"
                            :class="{'text-white bg-icran2-900 dark:bg-icran2-900': selectedTab === 'toraja', 'hover:text-gray-900 bg-primary hover:bg-gray-100 dark:bg-primary dark:hover:bg-gray-700 dark:hover:text-white': selectedTab !== 'toraja'}"
                            class="inline-flex items-center px-4 py-3 rounded-lg w-full"
                            role="tab" aria-selected="selectedTab === 'toraja'">
                            <i class="w-4 h-4 me-2  fa-solid fa-mug-hot"></i>
                            Toraja Coffee
                        </a>
                    </li>
                </ul>

                <div class="p-6 bg-primary bg-opacity-10 text-medium rounded-lg w-full">
                    <div class="px-2 py-4">
                        <div x-show="selectedTab === 'bunaken'" id="tabpanelBunaken" role="tabpanel" aria-label="Bunaken">
                            <h3 class="text-lg font-bold mb-2">Bunaken</h3>
                            <div class="flex flex-col lg:flex-row flex-wrap justify-between gap-2">
                                <div class="w-full lg:w-1/2 flex flex-col gap-3 mb-4">
                                    <p>Bunaken is an island of 8 km2, part of the Bunaken National Marine Park. Bunaken is located at the northern tip of the island of Sulawesi, Indonesia. It belongs administratively to the municipality of Manado. Scuba diving attracts many visitors to the island.</p>
                                    <p>Bunaken National Park extends over an area of 890.65 km2 of which only 3% is terrestrial, including Bunaken Island, as well as the islands of Manado Tua, Mantehage, Nain and Siladen.</p>
                                </div>
                                <div class="w-full lg:w-5/12 flex flex-col gap-3 mb-4">
                                    <img src="images/manado/bunaken1.jpg" class="w-full rounded-md shadow" alt="">
                                </div>
                                <div class="w-full lg:w-5/12 flex flex-col gap-3 mb-4">
                                    <img src="images/manado/bunaken2.jpg" class="w-full rounded-md shadow" alt="">
                                </div>
                                <div class="w-full lg:w-1/2 flex flex-col gap-3 mb-4">
                                    <p>The waters of Bunaken National Marine Park are up to 1,566 m deep in Manado Bay, with temperatures ranging between 27 and 29 °C. It has a high diversity of - corals, fish, echinoderms and sponges. Notably, 7 of the 8 species of giant clams that occur in the world, occur in Bunaken. It also claims to have seven times more genera of coral than Hawaii,[1] and has more than 70% of all the known fish species of the Indo-Western Pacific.</p>
                                    <p>Oceanic currents may explain, in part, why Bunaken National Marine Park has such a high level of biodiversity. Northeasterly currents generally sweep through the park but abundant counter currents and gyros related to lunar cycles are believed to be a trap for free swimming larvae. This is particularly true on the south side of the crescent-shaped Bunaken Island, lying in the heart of the park. A snorkeler or diver in the vicinity of Lekuan or Fukui may spot over 33 species of butterfly fish and numerous types of groupers, damsels, wrasses and gobies. The gobies, smallish fish with bulging eyes and modified fins that allow them to attach to hard surfaces, are the most diverse but least known group of fish in the park.</p>
                                </div>

                            </div>
                        </div>
                        <div x-show="selectedTab === 'toraja'" id="tabpanelToraja" role="tabpanel" aria-label="Toraja Coffee">
                            <h3 class="text-lg font-bold mb-2">Discover the Rich Heritage of Toraja Coffee</h3>
                            <div class="flex flex-col lg:flex-row flex-wrap justify-between gap-2">
                                <div class="w-full lg:w-1/2 flex flex-col gap-3 mb-4">
                                    <p>Toraja Coffee is a treasure from the lush highlands of South Sulawesi, Indonesia. Known for its distinct taste and cultural heritage, this specialty coffee has captured the hearts of coffee enthusiasts around the world.</p>

                                    <h3 class="text-lg font-bold">The Origin</h3>
                                    <p>Cultivated in the mountainous region of Toraja, at altitudes ranging from 1,400 to 2,100 meters above sea level, Toraja Coffee benefits from ideal growing conditions. The volcanic soil, cool climate, and traditional farming methods passed down through generations create beans of exceptional quality.</p>
                                </div>
                                <div class="w-full lg:w-5/12 flex flex-col gap-3 mb-4">
                                    <img src="images/manado/kopi1.jpg" class="w-full rounded-md shadow" alt="">
                                </div>
                                <div class="w-full lg:w-5/12 flex flex-col gap-3 mb-4">
                                    <img src="images/manado/kopi2.webp" class="w-full rounded-md shadow" alt="">
                                </div>
                                <div class="w-full lg:w-1/2 flex flex-col gap-3 mb-4">
                                    <h3 class="text-lg font-bold">Flavor Profile</h3>
                                    <p>Toraja Coffee is celebrated for its well-balanced flavor, often described as earthy, spicy, and with hints of dark chocolate. It has low acidity and a full-bodied richness, leaving a lingering, smooth aftertaste. The unique taste is a reflection of the region’s terroir and meticulous post-harvest processes, such as hand-picking and sun-drying.</p>
                                    <h3 class="text-lg font-bold">Cultural Significance</h3>
                                    <p>Coffee in Toraja is more than just a drink</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- modal electric -->
    <dialog id="electric" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">

            <img src="images/electric.jpg" class="w-full max-w-2xl rounded-md shadow-md" alt="">
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn btn-square">X</button>
                </form>
            </div>
        </div>
    </dialog>

    <!-- modal flight -->
    <dialog id="flight" class="modal modal-middle sm:modal-middle">
        <div class="modal-box w-full max-w-3xl">
            <div class="flex flex-col justify-center items-center">
                <img src="images/flight-time.jpg" class="w-full max-w-2xl rounded-md shadow-md" alt="">
                <img src="images/flight-time2.jpg" class="w-full max-w-2xl rounded-md shadow-md" alt="">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Rute</th>
                                <th>Airlines</th>
                                <th>Depature</th>
                                <th>Arrival</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>1</th>
                                <td>Jakarta - Manado</td>
                                <td>Batik</td>
                                <td>01.30</td>
                                <td>05.50</td>
                            </tr>
                            <tr>
                                <td rowspan="6"></td>
                                <td>(Every day)</td>
                                <td>Batik</td>
                                <td>02.00</td>
                                <td>06.20</td>
                            </tr>
                            <tr>
                                
                                <td rowspan="5"></td>
                                <td>Batik</td>
                                <td>08.00</td>
                                <td>12.20</td>
                            </tr>
                            <tr>
                                <td>Batik</td>
                                <td>11.50</td>
                                <td>16.10</td>
                            </tr>
                            <tr>
                                <td>Citilink</td>
                                <td>01.40</td>
                                <td>06.05</td>
                            </tr>
                            <tr>
                                <td>Garuda</td>
                                <td>02.00</td>
                                <td>06.25</td>
                            </tr>
                            <tr>
                                <td>Garuda</td>
                                <td>09.20</td>
                                <td>13.45</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Bali (Denpasar) - Manado</td>
                                <td>Transnusa</td>
                                <td>01.40</td>
                                <td>04.45</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>(Every day)</td>
                                <td>Lion Air</td>
                                <td>19.30</td>
                                <td>23.30</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Singapore - Manado (Direct) <br>(Monday, Wednesday, Friday, Saturday)
                                </td>
                                <td>Scoot 1 flight/day</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>Guangzhou – Manado <br>(Everyday)
                                </td>
                                <td>Transnusa 1 flight/day </td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn btn-square">X</button>
                </form>
            </div>
        </div>
    </dialog>
</div>