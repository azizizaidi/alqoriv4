<div align="center">

# i-ALQORI – Sistem Pengurusan Pusat Pengajian Al-Quran

![Version](https://img.shields.io/badge/version-1.0.0-blue?style=for-the-badge)
![Laravel](https://img.shields.io/badge/Laravel-10-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-7A86B8?style=for-the-badge&logo=php)
![Status](https://img.shields.io/badge/status-production--ready-success?style=for-the-badge)

#### Sistem Pengurusan Komprehensif Bagi Pusat Pengajian Al-Quran
</div>

---

<p align="center">
  <img src="https://img.shields.io/badge/Modular-Architecture-blueviolet" alt="Modular Architecture">
  <img src="https://img.shields.io/badge/Scalable-Design-orange" alt="Scalable Design">
  <img src="https://img.shields.io/badge/Production-Ready-green" alt="Production Ready">
</p>

`i-alqori` ialah sistem pengurusan lengkap untuk pusat pembelajaran Al-Quran. Projek ini dibina menggunakan Laravel + Livewire + Filament serta disusun modular dan fokus kepada kebolehskalaan (scalability).
---

## 🎯 Ciri-Ciri Sistem

<table>
  <tr>
    <td width="50%" valign="top">
      <ul>
        <li>🧑‍🏫 Pengurusan Guru, Pelajar, dan Pendaftar</li>
        <li>🧾 Sistem Yuran & Invois Automatik (bulanan, kelas, tunggakan)</li>
        <li>🔄 Pengiraan automatik yuran (<code>CalculatorFee.php</code>)</li>
        <li>📊 Statistik kelas, pembayaran, & memo (view: <code>dashboard.blade.php</code>)</li>
        <li>🧠 Multi-tenant support (<code>MultiTenantModelTrait.php</code>)</li>
      </ul>
    </td>
    <td width="50%" valign="top">
      <ul>
        <li>✅ Role-based access control (Spatie Permission + Filament integration)</li>
        <li>📄 PDF generator untuk invois (DomPDF + custom blade)</li>
        <li>🔁 Notifikasi sistem & overdue reminder</li>
        <li>📁 Logging & audit trail (<code>AuditLog.php</code>)</li>
        <li>🚧 Modul akan datang: memo, coming soon, class preview</li>
      </ul>
    </td>
  </tr>
</table>

---

## ⚙️ Teknologi Digunakan

<table>
  <tr>
    <th align="center">Bahagian</th>
    <th align="center">Teknologi</th>
  </tr>
  <tr>
    <td align="center"><b>Backend</b></td>
    <td align="center">Laravel 10, PHP 8.1+</td>
  </tr>
  <tr>
    <td align="center"><b>Frontend</b></td>
    <td align="center">Blade, Livewire, Filament UI</td>
  </tr>
  <tr>
    <td align="center"><b>PDF</b></td>
    <td align="center">DomPDF</td>
  </tr>
  <tr>
    <td align="center"><b>Auth</b></td>
    <td align="center">Laravel Sanctum</td>
  </tr>
  <tr>
    <td align="center"><b>Roles</b></td>
    <td align="center">Spatie Laravel Permission</td>
  </tr>
  <tr>
    <td align="center"><b>UI</b></td>
    <td align="center">Custom + Blade Component (no Tailwind)</td>
  </tr>
  <tr>
    <td align="center"><b>Queue</b></td>
    <td align="center">Redis-ready (config exist)</td>
  </tr>
  <tr>
    <td align="center"><b>DB</b></td>
    <td align="center">MySQL (MariaDB compatible)</td>
  </tr>
</table>

---

## 📁 Struktur Utama

<div class="file-structure">
  <pre>
i-ALQORI/
├── <b>app/</b> – Semua model, Livewire/Filament components, logic modular
├── <b>resources/views/</b> – Blade view untuk modul: fee, class, overdue, memo
├── <b>routes/web.php</b> – Route sistem admin & public
└── <b>config/</b> – Setting permission, media-library, pdf, roles, queue
  </pre>
</div>

---

## 📦 Ciri Tambahan (Optional/Dev Ready)

<table>
  <tr>
    <td><b>Module Components</b></td>
    <td>assign_class_teachers, fee_students, register_class – modular logik yuran</td>
  </tr>
  <tr>
    <td><b>Financial Reports</b></td>
    <td>ReportClass, Transaction, OverduePayList – audit dan laporan kewangan</td>
  </tr>
  <tr>
    <td><b>Upcoming Features</b></td>
    <td>memo.blade.php, coming-soon.blade.php – sokongan fungsi akan datang</td>
  </tr>
  <tr>
    <td><b>UI Components</b></td>
    <td>Themes, Badges, dan Widgets – UI fleksibel (configurable)</td>
  </tr>
</table>

---

<div align="center">

## 👨‍💻 Developer

### Muhammad Azizi bin Zaidi
Backend Developer (Laravel Specialist)

[![Email](https://img.shields.io/badge/Email-azizizaidi5%40gmail.com-informational?style=flat-square&logo=gmail)](mailto:azizizaidi5@gmail.com)
[![Phone](https://img.shields.io/badge/Phone-%2B6018--3879635-success?style=flat-square&logo=whatsapp)](tel:+60183879635)
[![Website](https://img.shields.io/badge/Website-alqori.com-blue?style=flat-square&logo=safari)](https://alqori.com)

</div>

---

<div align="center">
  <img src="https://img.shields.io/badge/Built%20with-❤️-red.svg" alt="Built with love">
  <p>© 2021-2025 i-ALQORI. All Rights Reserved.</p>
</div>
