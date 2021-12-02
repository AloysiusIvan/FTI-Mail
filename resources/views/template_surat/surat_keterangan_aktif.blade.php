<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat_keterangan_aktif_{{auth()->user()->username}}</title>
</head>
<body>
    <img src="https://i.ibb.co/BTg9Zb9/kopukdw.png" width="360" height="66.02">
    @foreach ($surat as $item)
    <p><br></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><u><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>SURAT KETERANGAN AKTIF KULIAH</span></u></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'
    >No. : {{sprintf('%03d', $item->id)}}/{{$item->kode_surat}}/FTI/{{$item->created_at->format('Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana Yogyakarta dengan ini menerangkan bahwa:</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->nama}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Tempat/Tgl. Lahir&nbsp; &nbsp; &nbsp;&nbsp;: {{$item->tpt_lahir}}, {{$item->tgl_kegiatan->format('d F Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>NIM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->username}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Program Studi&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$prodi}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:65pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$item->alamat_mitra}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Nama tersebut di atas adalah Mahasiswa Fakultas Teknologi Informasi Universitas Kristen Duta wacana Yogyakarta terdaftar pada tahun Akademis {{$tahun}} semester ganjil dan aktif dalam perkuliahan. Surat ini untuk keperluan {{$item->keterangan}}.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Demikian Surat Keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    {{$item->created_at->format('d F Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Mengetahui</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>
    @if ($item->tanda_tangan == "Restyandito, S.Kom., MSIS, Ph.D.")
    Dekan
    @elseif ($item->tanda_tangan == "Gloria Virginia, S.Kom., MAI, Ph.D.")
    Wakil Dekan I &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Perwakilan ###
    @elseif ($item->tanda_tangan == "Drs. Jong Jek Siang, M.Sc.")
    Wakil Dekan I &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Perwakilan PT. TOKOPEDIA
    @elseif ($item->tanda_tangan == "Widi Hapsari, Dra., M.T.")
    Wakil Dekan II &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Perwakilan ###
    @else
    Wakil Dekan III &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Perwakilan ###
    @endif</b></span></p>
    <img style=';margin-right:0.75cm;margin-left:1cm;' src="https://i.ibb.co/hfvBQpr/rpltandatangan.png" width="225" height="52.27">
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    <b>({{$item->tanda_tangan}})&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<!--(&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)--></b></span></p>
    @endforeach
</body>
</html>