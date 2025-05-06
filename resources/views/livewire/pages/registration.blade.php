<div class="bg-icran2-50 bg-opacity-30">
    <div class="pt-16 pb-52 lg:px-20 px-5 bg-doctor">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">Registration</h4>
            <h1 class="text-4xl text-secondary font-semibold">Registration Fee</h1>
        </div>
        <div class="flex items-center justify-center">
            <div x-data="{ openTab: 1 }" class="w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex space-x-4 p-2 bg-icran-50 rounded-lg shadow-md">
                        <button x-on:click="openTab = 1" :class="{ 'bg-secondary text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Indonesian Participants</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-secondary text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Foreign Participants</button>
                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white bg-opacity-60 p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="card">
                            <div class="card-body w-full">
                                <h4><i class="fa fa-angle-right text-xs text-gray-400"></i> Symposium</h4>
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <!-- head -->
                                        <thead>
                                            <tr class="bg-icran2-100 text-slate-800">
                                                <th class="text-start" style="width: 32%;">Category</th>
                                                <th>Early Bird Registration <br> Up to June 30<sup>th</sup>, 2025</th>
                                                <th>Late / Onsite Registration <br> After June 30<sup>th</sup>, 2025</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- row 1 -->
                                            <tr class="bg-base-200">

                                                <td>Neurosurgeon</td>
                                                <td>IDR 3.000.000</td>
                                                <td>IDR 3.750.000</td>
                                            </tr>
                                            <!-- row 2 -->
                                            <tr>

                                                <td>Resident</td>
                                                <td>IDR 1.000.000</td>
                                                <td>IDR 1.500.000</td>
                                            </tr>
                                            <!-- row 3 -->
                                            <tr>

                                                <td>General Practitioner (GP)</td>
                                                <td>IDR 1.000.000</td>
                                                <td>IDR 1.500.000</td>
                                            </tr>
                                            <tr>

                                                <td>Other Specialist </td>
                                                <td>IDR 3.000.000</td>
                                                <td>IDR 3.750.000</td>
                                            </tr>
                                            <tr>

                                                <td>Medical Student </td>
                                                <td>IDR 1.000.000</td>
                                                <td>IDR 1.250.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/icran2025" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Register Now</a>
                                </div>
                                <hr class="mt-2 mb-2">
                                <h4><i class="fa fa-angle-right text-xs text-gray-400"></i> Package Symposium + Global Neuro Advanced Course Neurotrauma</h4>
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <!-- head -->
                                        <thead>
                                            <tr class="bg-icran2-100 text-slate-800">
                                                <th class="text-start" style="width: 32%;">Category</th>
                                                <th>Early Bird Registration <br> Up to June 30<sup>th</sup>, 2025</th>
                                                <th>Late / Onsite Registration <br> After June 30<sup>th</sup>, 2025</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- row 1 -->
                                            <tr class="bg-base-200">

                                                <td>Neurosurgeon</td>
                                                <td>IDR 5.000.000</td>
                                                <td>IDR 5.500.000</td>
                                            </tr>
                                            <!-- row 2 -->
                                            <tr>

                                                <td>Resident</td>
                                                <td>IDR 2.500.000</td>
                                                <td>IDR 3.000.000</td>
                                            </tr>
                                            <!-- row 3 -->
                                            <tr>

                                                <td>General Practitioner (GP)</td>
                                                <td>IDR 2.500.000</td>
                                                <td>IDR 3.000.000</td>
                                            </tr>
                                            <tr>

                                                <td>Other Specialist </td>
                                                <td>IDR 5.000.000</td>
                                                <td>IDR 5.500.000</td>
                                            </tr>
                                            <tr>

                                                <td>Medical Student </td>
                                                <td>IDR 1.500.000</td>
                                                <td>IDR 1.500.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/icran2025" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Register Now</a>
                                </div>
                                <hr class="mt-2 mb-2">
                                <h4><i class="fa fa-angle-right text-xs text-gray-400"></i> Workshops</h4>
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <!-- head -->
                                        <thead>
                                            <tr class="bg-icran2-100 text-slate-800">
                                                <th class="text-start" style="width: 32%;">Category</th>
                                                <th>Early Bird Registration <br> Up to June 30<sup>th</sup>, 2025</th>
                                                <th>Late / Onsite Registration <br> After June 30<sup>th</sup>, 2025</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- row 1 -->
                                            <tr class="bg-base-200">

                                                <td>Workshop Research & Publication in Neurotrauma</td>
                                                <td>IDR 750.000</td>
                                                <td>IDR 750.000</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/icran2025" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white bg-opacity-60 p-4 rounded-lg shadow-md border-x-4 border-primary">
                        <div class="card">
                            <div class="card-body w-full">
                                <h4><i class="fa fa-angle-right text-xs text-gray-400"></i> Symposium</h4>
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <!-- head -->
                                        <thead>
                                            <tr class="bg-icran2-100 text-slate-800">
                                                <th class="text-start" style="width: 32%;">Category</th>
                                                <th>Early Bird Registration <br> Up to June 30<sup>th</sup>, 2025</th>
                                                <th>Late / Onsite Registration <br> After June 30<sup>th</sup>, 2025</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- row 1 -->
                                            <tr class="bg-base-200">

                                                <td>Neurosurgeon</td>
                                                <td>USD 250</td>
                                                <td>USD 350</td>
                                            </tr>
                                            <!-- row 2 -->
                                            <tr>

                                                <td>Resident</td>
                                                <td>USD 150</td>
                                                <td>USD 150</td>
                                            </tr>
                                            <tr>

                                                <td>Resident (Free Paper Presentation)</td>
                                                <td>USD 75</td>
                                                <td>USD 75</td>
                                            </tr>
                                            <!-- row 3 -->
                                            <tr>

                                                <td>General Practitioner (GP)</td>
                                                <td>USD 200</td>
                                                <td>USD 300</td>
                                            </tr>
                                            <tr>

                                                <td>Other Specialist </td>
                                                <td>USD 250</td>
                                                <td>USD 350</td>
                                            </tr>
                                            <tr>

                                                <td>Medical Student </td>
                                                <td>USD 150</td>
                                                <td>USD 150</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/icran2025" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Register Now</a>
                                </div>
                                <hr class="mt-2 mb-2">
                                <h4><i class="fa fa-angle-right text-xs text-gray-400"></i> Package Symposium + Global Neuro Advanced Course Neurotrauma</h4>
                                <div class="overflow-x-auto">
                                    <table class="table">
                                        <!-- head -->
                                        <thead>
                                            <tr class="bg-icran2-100 text-slate-800">
                                                <th class="text-start" style="width: 32%;">Category</th>
                                                <th>Early Bird Registration <br> Up to June 30<sup>th</sup>, 2025</th>
                                                <th>Late / Onsite Registration <br> After June 30<sup>th</sup>, 2025</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- row 1 -->
                                            <tr class="bg-base-200">

                                                <td>Neurosurgeon</td>
                                                <td>USD 400</td>
                                                <td>USD 550</td>
                                            </tr>
                                            <!-- row 2 -->
                                            <tr>

                                                <td>Resident</td>
                                                <td>USD 200</td>
                                                <td>USD 200</td>
                                            </tr>
                                            <tr>

                                                <td>Resident (Free Paper Presentation)</td>
                                                <td>USD 125</td>
                                                <td>USD 125</td>
                                            </tr>
                                            <!-- row 3 -->
                                            <tr>

                                                <td>General Practitioner (GP)</td>
                                                <td>USD 300</td>
                                                <td>USD 400</td>
                                            </tr>
                                            <tr>

                                                <td>Other Specialist </td>
                                                <td>USD 400</td>
                                                <td>USD 550</td>
                                            </tr>
                                            <tr>

                                                <td>Medical Student </td>
                                                <td>USD 200</td>
                                                <td>USD 200</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="card-actions justify-end">
                                    <a href="https://expo.virconex-id.com/registration/icran2025" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-blog" id="reg-info">
        <div class="flex-col flex gap-3 mb-10">
            <h4 class="text-2xl text-primary font-semibold">Registration</h4>
            <h1 class="text-4xl text-secondary font-semibold">Registration Information</h1>
        </div>

        <livewire:resources.reg-info />
        <!-- <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-lg">
            <details class="p-6 group" open>
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Entitlements
                    </h5>
                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Registration Fee
                    </h5>

                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="p-6 group">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h5 class="text-xl font-semibold text-primary-900">
                        Cancellation Policy of Registration
                    </h5>

                    <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                        <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                        <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-slate-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>
        </div> -->

    </div>


</div>