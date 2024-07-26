<div>

<div class=" col-6 bg-white m-auto mb-5"><br>
<div class="flex flex-row">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
                     <table  class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
    <thead class="border-b font-medium dark:border-neutral-500 bg-slate-300">
        <tr>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500" >Bulan</th>
            <th  scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Jumlah Bulan Tertunggak</th>
        </tr>
    </thead>
    <tbody >
    @foreach($reportclasses as $key => $reportClass)
    <tr class="border-b dark:border-neutral-500">
        <td class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">{{ $reportClass['registrar_name'] . $reportClass['registrar_code'] ?? '' }}</td>
        <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{ $reportClass['status_count'] ?? '' }}</td>
    </tr>

   @endforeach


    </tbody>
</table>
{{ $reportclasses->links() }}
        </div>

        </div>

        </div>
        </div>

         </div>
</div>
