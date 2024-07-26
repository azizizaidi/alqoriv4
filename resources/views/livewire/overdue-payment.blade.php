<div>
@if(Auth::user()->roles->contains(1 ))
<!---new tab--->
<div x-data="{ activeTab: 1 }">

    <!-- Buttons -->
    <div class="flex justify-center">
        <div
            role="tablist"
            class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-8 min-[480px]:mb-12"
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
    <div class="max-w-[640px] mx-auto">
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

<div class=" col-6 bg-white m-auto mb-5"><br>
<div class="flex flex-row">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Belum Bayar</th>
        </tr>
    </thead>
    <tbody >



            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2022')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>


    </tbody>
</table>

        </div>

        </div>

        </div>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 " >
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Belum Bayar</th>
        </tr>
    </thead>
    <tbody >

              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '01-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','01-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '02-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','02-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>

            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2023')->where('status',0)->sum('fee_student')  ?? '' }}</td>

            </tr>


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
            <div class=" col-6 bg-white m-auto mb-5"><br>
<div class="flex flex-row">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Gagal Bayar</th>
        </tr>
    </thead>
    <tbody >



            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2022')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>


    </tbody>
</table>

        </div>

        </div>

        </div>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 " >
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Gagal Bayar</th>
        </tr>
    </thead>
    <tbody >

              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '01-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','01-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '02-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','02-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>

            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2023')->where('status',3)->sum('fee_student')  ?? '' }}</td>

            </tr>


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
            <div class=" col-6 bg-white m-auto mb-5"><br>
<div class="flex flex-row">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Dalam Proses Bayar</th>
        </tr>
    </thead>
    <tbody >



            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2022' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2022')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>


    </tbody>
</table>

        </div>

        </div>

        </div>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 " >
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Dalam Proses Bayar</th>
        </tr>
    </thead>
    <tbody >

              <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '01-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','01-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '02-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','02-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>

            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '03-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','03-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '04-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','04-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '05-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','05-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '06-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','06-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '07-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','07-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '08-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','08-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '09-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','09-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '10-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','10-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '11-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','11-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportclasses->month = '12-2023' }}</td>
                <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">RM{{ $reportclasses->where('month','12-2023')->where('status',2)->sum('fee_student')  ?? '' }}</td>

            </tr>


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
@endif
</div>
