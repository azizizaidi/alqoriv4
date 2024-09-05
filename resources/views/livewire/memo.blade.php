<div>
@if(Auth::user()->roles->contains(4))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>
      <p class="font-bold text-xl
      ">PEMBERITAHUAN</p>
      <p class="text-lg">Pembayaran hendaklah dibuat selewat-lewatnya lima hari selepas invois dikeluarkan. Kelewatan boleh menyebabkan kelas
      ditangguhkan buat sementara. Terima kasih</p>
    </div>
  </div>
</div>
@endif
@if(Auth::user()->roles->contains(2))

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title font-bold">LAPORAN KELAS</h3>
        </div>
         <br>
        <div class="card-body">
            <p><strong>Bulan:</strong> Ogos 2024</p>
            <br>
            <p>Assalamualaikum wbt</p>
            <br>
            <p><strong>SILA BACA DAN LAKSANA</strong></p>
            <br>
            <ol>
                <li>Sila pastikan betul2 semua info berkaitan kelas iaitu kod, nama klien total jam kelas sebulan adalah TEPAT!</li>
               <br>
                <li>Hantar sekali sahaja untuk satu kod kelas! Sila totalkan jam kelas sebulan untuk setiap kod kelas. (Bukan hantar banyak kali untuk satu kod kelas)</li>
                <br>
                <li>GURU PERLU BUAT KIRAAN SENDIRI JAM DAN ELAUN SEMASA UNTUK PASTIKAN ELAUN DALAM SISTEM TALLY! </li>
                <br>
                 <li> Rujuk senarai elaun per jam dan jumlahkan untuk sebulan. Jika jumlah yang ditunjukkan dalam sistem selepas anda menghantar sama dengan kiraan beerti laporan tersebut betul tetapi jika sebaliknya sila perbaiki dan betulkan.</li>
                <br>
                 <li>Jangan maklumkan kesilapan selepas tarikh menghantar laporan telah ditutup kerana kesilapan akan memberi kesan kepada banyak perkara termasuk kepada klien/pelajar anda apabila mereka telah membuat bayaran.</li>
                <br>  
                 <li>Sistem beroperasi secara automatik, kesilapan guru dalam mengisi data akan memberi kesan secara keseluruhan termasuk yuran, elaun dan proses-proses yang terlibat.</li>
                <br>
              
            </ol>
            
           
            <p><strong>SENARAI ELAUN GURU PER JAM:</strong> <a class="text-rose-700 font-bold"href="https://drive.google.com/file/d/1VfMAzRDuy_aUNFBRHXtH3OJpD8WLEMd9/view?usp=drivesdk" target="_blank">Klik di Sini</a></p>
        </div>
    </div>
</div>
@endif

</div>