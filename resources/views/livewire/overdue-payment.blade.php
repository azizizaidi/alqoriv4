<div>
    @if(Auth::user()->roles->contains(1))
    <div x-data="{ activeTab: 1, showTabs: false }">

        <!-- Toggle Tabs Button -->
        <div class="flex justify-end mb-4">
            <button
                @click="showTabs = !showTabs"
                class="bg-rose-500 text-white px-4 py-2 rounded "
            >Tunjukkan/Sembuyikan Yuran Tertunggak</button>
        </div>

        <!-- Tabs and Panels -->
        <div x-show="showTabs" x-transition>
            <!-- Buttons -->
            <div class="flex justify-center mb-4">
                <div
                    role="tablist"
                    class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 min-[480px]:mb-12"
                    @keydown.right.prevent.stop="$focus.wrap().next()"
                    @keydown.left.prevent.stop="$focus.wrap().prev()"
                    @keydown.home.prevent.stop="$focus.first()"
                    @keydown.end.prevent.stop="$focus.last()"
                >
                    <!-- Button #1 -->
                    <button
                        id="tab-1"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 1 ? 0 : -1"
                        :aria-selected="activeTab === 1"
                        aria-controls="tabpanel-1"
                        @click="activeTab = 1"
                        @focus="activeTab = 1"
                    >Belum Bayar</button>
                    <!-- Button #2 -->
                    <button
                        id="tab-2"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 2 ? 0 : -1"
                        :aria-selected="activeTab === 2"
                        aria-controls="tabpanel-2"
                        @click="activeTab = 2"
                        @focus="activeTab = 2"
                    >Gagal Bayar</button>
                    <!-- Button #3 -->
                    <button
                        id="tab-3"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 3 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 3 ? 0 : -1"
                        :aria-selected="activeTab === 3"
                        aria-controls="tabpanel-3"
                        @click="activeTab = 3"
                        @focus="activeTab = 3"
                    >Dalam Proses Bayar</button>
                </div>
            </div>

            <!-- Tab panels -->
            <div class="max-w-[1280px] mx-auto">
                <div class="relative flex flex-col">

                    <!-- Panel #1 -->
                    <article
                        id="tabpanel-1"
                        class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                        role="tabpanel"
                        tabindex="0"
                        aria-labelledby="tab-1"
                        x-show="activeTab === 1"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12"
                    >
                        <div class="flex justify-around bg-white m-auto mb-5">
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Belum Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['03-2022', '04-2022', '05-2022', '06-2022', '07-2022', '08-2022', '09-2022', '10-2022', '11-2022', '12-2022'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 0)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Belum Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2023', '02-2023', '03-2023', '04-2023', '05-2023', '06-2023', '07-2023', '08-2023', '09-2023', '10-2023', '11-2023', '12-2023'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 0)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Belum Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2024', '02-2024', '03-2024', '04-2024', '05-2024', '06-2024', '07-2024', '08-2024', '09-2024', '10-2024', '11-2024', '12-2024'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 0)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Panel #2 -->
                    <article
                        id="tabpanel-2"
                        class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                        role="tabpanel"
                        tabindex="0"
                        aria-labelledby="tab-2"
                        x-show="activeTab === 2"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12"
                    >
                        <div class="flex justify-around bg-white m-auto mb-5">
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Gagal Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['03-2022', '04-2022', '05-2022', '06-2022', '07-2022', '08-2022', '09-2022', '10-2022', '11-2022', '12-2022'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 3)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Gagal Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2023', '02-2023', '03-2023', '04-2023', '05-2023', '06-2023', '07-2023', '08-2023', '09-2023', '10-2023', '11-2023', '12-2023'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 3)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Gagal Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2024', '02-2024', '03-2024', '04-2024', '05-2024', '06-2024', '07-2024', '08-2024', '09-2024', '10-2024', '11-2024', '12-2024'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 3)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Panel #3 -->
                    <article
                        id="tabpanel-3"
                        class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                        role="tabpanel"
                        tabindex="0"
                        aria-labelledby="tab-3"
                        x-show="activeTab === 3"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12"
                    >
                        <div class="flex justify-around bg-white m-auto mb-5">
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Dalam Proses Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['03-2022', '04-2022', '05-2022', '06-2022', '07-2022', '08-2022', '09-2022', '10-2022', '11-2022', '12-2022'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 2)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Dalam Proses Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2023', '02-2023', '03-2023', '04-2023', '05-2023', '06-2023', '07-2023', '08-2023', '09-2023', '10-2023', '11-2023', '12-2023'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 2)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3 p-2">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                                <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                                                    <tr>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Bulan</th>
                                                        <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Dalam Proses Bayar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (['01-2024', '02-2024', '03-2024', '04-2024', '05-2024', '06-2024', '07-2024', '08-2024', '09-2024', '10-2024', '11-2024', '12-2024'] as $month)
                                                    <tr class="border-b dark:border-neutral-500">
                                                        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $month }}</td>
                                                        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month', $month)->where('status', 2)->sum('fee_student') ?? '' }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
    @endif
</div>
