<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
            margin-left: 30px;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .invoice-box {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            border: 1px solid #eee;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            color: #555;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .brand-logo img {
            max-width: 100px;
            height: auto;
        }

        .invoice-title {
            font-size: 28px;
            color: #c4201e; /* Updated color from the logo */
            font-weight: bold;
            text-align: right;
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .info .address, .info .invoice-details {
            font-size: 12px;
        }

        .address p, .invoice-details p, .payment-info p, .terms p {
            margin: 2px 0;
        }

        .section-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 10px;
            border: 1px solid #c4201e; /* Updated color from the logo */
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        table th {
            background-color: #c4201e; /* Updated color from the logo */
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr.item:last-child td {
            border-bottom: none;
        }

        table tr.total td {
            text-align: right;
            font-weight: bold;
        }

        table th.right-align, table td.right-align {
            text-align: right;
        }

        table th.center-align, table td.center-align {
            text-align: center;
        }

        .highlight {
            background-color: #c4201e;
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-align: right;
        }

        .payment-info, .terms, .signature, .footer {
            margin-top: 20px;
            font-size: 12px;
        }

        .signature-text {
            font-size: 10px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
            border-top: 2px solid #eee;
            background-color: #fff;
        }

        .highlight-total {
            background-color: #c4201e;
            color: #fff;
            padding: 8px;
            text-align: right;
            border-radius: 5px;
        }

        .line {
            border-bottom: 2px solid #c4201e; /* Updated color from the logo */
            margin-bottom: 10px;
        }

        .thank-you {
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
        }

        table tr:first-child th:first-child {
            border-top-left-radius: 10px;
        }

        table tr:first-child th:last-child {
            border-top-right-radius: 10px;
        }

        table tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }

        table tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header">
            <div class="brand-logo">
                <img src="{{ asset('storage/livewire-tmp/logo.jpg') }}" alt="Brand Logo">
            </div>
            <div class="invoice-title">INVOIS</div>
        </div>
        <div class="info">
            <div class="address">
                <p class="section-title">Invois Kepada:</p>
                <p><strong>{{ $value->registrar->name }}</strong></p>
                <p>{{$value->registrar->code}}</p>
               
            </div>
            <div class="invoice-details">
                <p><strong>Nombor Invois:</strong> {{$value->id}}</p>
                <p><strong>Tarikh:</strong> {{$value->created_at}}</p>
            </div>
        </div>
        <table>
            <tr class="heading">
                <th class="center-align">No.</th>
                <th class="left-align">Kelas</th>
                <th class="center-align">Jumlah Jam</th>
                <th class="center-align">Harga Per Jam</th>
                <th class="right-align">Harga Sebenar</th>
            </tr>
            @php
                $key = 0;
                $total = 0;
            @endphp
            <tr>
            @if($value->class_name_2 == NULL)
                <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $key + 1 }}</td>
                <td class="left-align" style="padding: 12px; line-height: 20px;">{{ $value->class_name->name ?? '' }}</td>
                <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $value->total_hour ?? '' }}</td>
                @php
                    $rate = 0;
                    $subtotal = 0;
                @endphp
                <!--kelas single sahaja-->
              
                @if($value->class_name->name == "Fardhu Ain Online AQ")
                    @if($value->total_hour <= 7.9)
                        @php $rate = 40; @endphp
                    @elseif($value->total_hour <= 11.9)
                        @php $rate = 35; @endphp
                    @elseif($value->total_hour >= 12)
                        @php $rate = 30; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Online AQ")
                    @if($value->total_hour <= 7.9)
                        @php $rate = 35; @endphp
                    @elseif($value->total_hour <= 11.9)
                        @php $rate = 30; @endphp
                    @elseif($value->total_hour >= 12)
                        @php $rate = 25; @endphp
                    @endif
                @elseif($value->class_name->name == "Fardhu Ain Fizikal AQ")
                    @if($value->total_hour <= 7.9)
                        @php $rate = 60; @endphp
                    @elseif($value->total_hour <= 11.9)
                        @php $rate = 55; @endphp
                    @elseif($value->total_hour >= 12)
                        @php $rate = 50; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Fizikal AQ")
                    @if($value->total_hour <= 7.9)
                        @php $rate = 50; @endphp
                    @elseif($value->total_hour <= 11.9)
                        @php $rate = 45; @endphp
                    @elseif($value->total_hour >= 12)
                        @php $rate = 40; @endphp
                    @endif
                @elseif($value->class_name->name == "Fardhu Ain Fizikal DQ")
                    @if($value->total_hour <= 4.9)
                        @php $rate = 70; @endphp
                    @elseif($value->total_hour <= 8.9)
                        @php $rate = 65; @endphp
                    @elseif($value->total_hour >= 9)
                        @php $rate = 60; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Fizikal DQ")
                    @if($value->total_hour <= 4.9)
                        @php $rate = 60; @endphp
                    @elseif($value->total_hour <= 8.9)
                        @php $rate = 55; @endphp
                    @elseif($value->total_hour >= 9)
                        @php $rate = 50; @endphp
                    @endif
                @else
                    @php $rate = $value->class_name->feeperhour ?? 0; @endphp
                @endif
               
                <td class="center-align" style="padding: 12px; line-height: 20px;">RM{{ $rate }}</td>
                @php
                    $subtotal = $rate * ($value->total_hour ?? 0);
                    $total += $subtotal;
                @endphp
                <td class="right-align" style="padding: 12px; line-height: 20px;">RM{{ $subtotal }}</td>
                @endif
            </tr>
            @if($value->class_name_2 != NULL)
            <tr>
                    <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $key + 1 }}</td>
                    <td class="left-align" style="padding: 12px; line-height: 20px;">{{ $value->class_name->name ?? '' }}</td>
                
                
                    <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $value->total_hour ?? '' }}</td>
                
                    @php
                        $rate = 0;
                        $subtotal = 0;
                    @endphp

                 @if($value->class_name->name == "Fardhu Ain Online AQ")
                    @if($value->total_hour <= 3.9)
                        @php $rate = 40; @endphp
                    @elseif($value->total_hour <= 7.9)
                        @php $rate = 35; @endphp
                    @elseif($value->total_hour >= 8)
                        @php $rate = 30; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Online AQ")
                    @if($value->total_hour <= 3.9)
                        @php $rate = 35; @endphp
                    @elseif($value->total_hour <= 7.9)
                        @php $rate = 30; @endphp
                    @elseif($value->total_hour >= 8)
                        @php $rate = 25; @endphp
                    @endif
                @elseif($value->class_name->name == "Fardhu Ain Fizikal AQ")
                    @if($value->total_hour <= 3.9)
                        @php $rate = 60; @endphp
                    @elseif($value->total_hour <= 7.9)
                        @php $rate = 55; @endphp
                    @elseif($value->total_hour >= 8)
                        @php $rate = 50; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Fizikal AQ")
                    @if($value->total_hour <= 3.9)
                        @php $rate = 50; @endphp
                    @elseif($value->total_hour <= 7.9)
                        @php $rate = 45; @endphp
                    @elseif($value->total_hour >= 8)
                        @php $rate = 40; @endphp
                    @endif
                @elseif($value->class_name->name == "Fardhu Ain Fizikal DQ")
                    @if($value->total_hour <= 2.4)
                        @php $rate = 70; @endphp
                    @elseif($value->total_hour <= 4.4)
                        @php $rate = 65; @endphp
                    @elseif($value->total_hour >= 4.5)
                        @php $rate = 60; @endphp
                    @endif
                @elseif($value->class_name->name == "Al-Quran Fizikal DQ")
                    @if($value->total_hour <= 2.4)
                        @php $rate = 60; @endphp
                    @elseif($value->total_hour <= 4.4)
                        @php $rate = 55; @endphp
                    @elseif($value->total_hour >= 4.5)
                        @php $rate = 50; @endphp
                    @endif
                @else
                    @php $rate = $value->class_name->feeperhour ?? 0; @endphp
                @endif
                  
                    <td class="center-align" style="padding: 12px; line-height: 20px;">RM{{ $rate }}</td>
                    @php
                        $subtotal = $rate * ($value->total_hour ?? 0);
                        $total += $subtotal;
                    @endphp
                    <td class="right-align" style="padding: 12px; line-height: 20px;">RM{{ $subtotal }}</td>
                </tr>
                <tr>
                    <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $key + 2 }}</td>
                    <td class="left-align" style="padding: 12px; line-height: 20px;">{{ $value->class_name_2->name ?? '' }}</td>
                
                
                    <td class="center-align" style="padding: 12px; line-height: 20px;">{{ $value->total_hour_2 ?? '' }}</td>
                
                    @php
                        $rate_2 = 0;
                        $subtotal_2 = 0;
                    @endphp
                 
                    @if($value->class_name_2->name == "Fardhu Ain Online AQ")
                        @if($value->total_hour_2 <= 7.9)
                            @php $rate_2 = 40; @endphp
                        @elseif($value->total_hour_2 <= 11.9)
                            @php $rate_2 = 35; @endphp
                        @elseif($value->total_hour_2 >= 12)
                            @php $rate_2 = 30; @endphp
                        @endif
                    @elseif($value->class_name_2->name == "Al-Quran Online AQ")
                        @if($value->total_hour_2 <= 7.9)
                            @php $rate_2 = 35; @endphp
                        @elseif($value->total_hour_2 <= 11.9)
                            @php $rate_2 = 30; @endphp
                        @elseif($value->total_hour_2 >= 12)
                            @php $rate_2 = 25; @endphp
                        @endif
                    @elseif($value->class_name_2->name == "Fardhu Ain Fizikal AQ")
                        @if($value->total_hour_2 <= 7.9)
                            @php $rate_2 = 60; @endphp
                        @elseif($value->total_hour_2 <= 11.9)
                            @php $rate_2 = 55; @endphp
                        @elseif($value->total_hour_2 >= 12)
                            @php $rate_2 = 50; @endphp
                        @endif
                    @elseif($value->class_name_2->name == "Al-Quran Fizikal AQ")
                        @if($value->total_hour_2 <= 7.9)
                            @php $rate_2 = 50; @endphp
                        @elseif($value->total_hour_2 <= 11.9)
                            @php $rate_2 = 45; @endphp
                        @elseif($value->total_hour_2 >= 12)
                            @php $rate_2 = 40; @endphp
                        @endif
                    @elseif($value->class_name_2->name == "Fardhu Ain Fizikal DQ")
                        @if($value->total_hour_2 <= 4.9)
                            @php $rate_2 = 70; @endphp
                        @elseif($value->total_hour_2 <= 8.9)
                            @php $rate_2 = 65; @endphp
                        @elseif($value->total_hour_2 >= 9)
                            @php $rate_2 = 60; @endphp
                        @endif
                    @elseif($value->class_name_2->name == "Al-Quran Fizikal DQ")
                        @if($value->total_hour_2 <= 4.9)
                            @php $rate_2 = 60; @endphp
                        @elseif($value->total_hour_2 <= 8.9)
                            @php $rate_2 = 55; @endphp
                        @elseif($value->total_hour_2 >= 9)
                            @php $rate_2 = 50; @endphp
                        @endif
                    @else
                        @php $rate_2 = $value->class_name_2->feeperhour ?? 0; @endphp
                    @endif
                    <td class="center-align" style="padding: 12px; line-height: 20px;">RM{{ $rate_2 }}</td>
                    @php
                        $subtotal_2 = $rate_2 * ($value->total_hour_2 ?? 0);
                        $total += $subtotal_2;
                    @endphp
                    <td class="right-align" style="padding: 12px; line-height: 20px;">RM{{ $subtotal_2 }}</td>
                </tr>
            @endif
        </table>
        <table>
            <tr class="total">
                <td colspan="4" class="right-align" style="padding: 12px; line-height: 20px;"><strong>Jumlah Yuran:</strong></td>
                <td class="highlight-total right-align" style="padding: 12px; line-height: 20px;">RM{{ $total }}</td>
            </tr>
        </table>
        <p class="thank-you">Tarikh Kelas:</p>
        <p>
            {{$value->date}}, {{$value->date_2}}
        </p>
    
  
        <div class="payment-info">
            <p class="section-title">Bayaran Kepada:</p>
            <p>No. akaun: 8010231211</p>
            <p>Nama Penerima: ALQORI ACADEMY ENTERPRISE
            </p>
            <p>Nama Bank: CIMB Bank</p>
        </div>
        <div class="terms">
            <p class="section-title">Terma:</p>
            <p>Pembayaran hendaklah dibuat selewat-lewatnya lima hari
selepas invois dikeluarkan. Kelewatan boleh menyebabkan
kelas ditangguhkan buat sementara. Terima kasih.</p>
        </div>
        <div class="footer">
            <p>No. Telefon: +601162218429</p>    <p>Web: www.alqori.com</p>
         
           
        </div>
      <!--  <div class="signature">
            <p class="signature-text"><strong>Authorised Sign</strong></p>
        </div>-->
    </div>
</body>
</html>
