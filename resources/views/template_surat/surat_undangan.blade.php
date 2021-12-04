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
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>No&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{sprintf('%03d', $item->id)}}/{{$item->kode_surat}}/FTI/{{$item->created_at->format('Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Lampiran &nbsp; &nbsp; &nbsp; &nbsp;: -</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><i><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Hal : {{$item->keterangan}}</span></i></strong></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>KepadaYth:</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>{{$item->pembicara_tamu}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>{{$item->jabatan}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>{{$item->mitra}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dengan hormat,</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Sehubungan dengan akan diadakannya {{$item->nama_kegiatan}}, maka dengan ini kami mengundang saudara {{$item->pembicara_tamu}} selaku {{$item->jabatan}} {{$item->mitra}} untuk hadir dalam {{$item->nama_kegiatan}} <i>"{{$item->tema_kegiatan}}"</i> yang akan dilaksanakan pada:</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Hari/Tanggal&nbsp;&nbsp;: {{$item->tgl_kegiatan->format('l, d F Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Waktu&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$item->waktu}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$item->alamat_mitra}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Demikian undangan ini kami sampaikan, mengingat pentingya {{$item->nama_kegiatan}} ini maka Bapak/Ibu dimohon hadir tepat pada waktunya. Atas perhatiannya, kami ucapkan terima kasih.</span></p>
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