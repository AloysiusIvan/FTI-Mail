<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat_tugas_{{auth()->user()->username}}</title>
</head>
<body>
    <img src="https://i.ibb.co/BTg9Zb9/kopukdw.png" width="360" height="66.02">
    @foreach ($surat as $item)
    <p><br></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><u><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>SURAT TUGAS</span></u></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'
    >No. : {{sprintf('%03d', $item->id)}}/{{$item->kode_surat}}/FTI/{{$item->created_at->format('Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada para mahasiswa tersebut di bawah ini:</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><table style="border-collapse:collapse;border:none;"></span></p>
    <tbody>
        <tr>
            <th style="width: 279.45pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: border-left: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Nama</span></p>
            </th>
            <th style="width: 150.3pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>NIM</span></p>
            </th>
        </tr>
        @foreach($peserta as $item2)
        <tr>
            <td style="width: 279.45pt;border-top: none;border-left: border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>{{$item2->nama}}</span></p>
            </td>
            <td style="width: 150.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>{{$item2->id_peserta}}</span></p>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table></span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Untuk mengikuti kunjungan penelitian yang dilaksanakan oleh {{$item->nama}}. Kunjungan akan dilaksanakan pada hari {{$item->tgl_kegiatan->format('d F Y')}}.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya. Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    {{$item->created_at->format('d M Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>
    @if ($item->tanda_tangan == "Restyandito, S.Kom., MSIS, Ph.D.")
    Dekan
    @elseif ($item->tanda_tangan == "Gloria Virginia, S.Kom., MAI, Ph.D.")
    Wakil Dekan I Bidang Akademik (Ketua Program Studi Informatika) dan Pelaksana InQA Program Studi Informatika
    @elseif ($item->tanda_tangan == "Drs. Jong Jek Siang, M.Sc.")
    Wakil Dekan I Bidang Akademik (Ketua Program Studi Sistem Informasi) dan Pelaksana InQA Program Studi Sistem Informasi
    @elseif ($item->tanda_tangan == "Widi Hapsari, Dra., M.T.")
    Wakil Dekan II Bidang Keuangan
    @else
    Wakil Dekan III Bidang Kemahasiswaan
    @endif</b></span></p>
    <img style=';margin-right:0.75cm;margin-left:1cm;' src="https://i.ibb.co/hfvBQpr/rpltandatangan.png" width="225" height="52.27">
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    <b><u>{{$item->tanda_tangan}}</b></u></span></p>
    @endforeach
</body>
</html>