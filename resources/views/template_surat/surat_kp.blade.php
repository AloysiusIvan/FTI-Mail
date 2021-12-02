<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surat_KP_{{auth()->user()->username}}</title>
</head>
<body>
    <img src="https://i.ibb.co/BTg9Zb9/kopukdw.png" width="360" height="66.02">
    @foreach ($surat as $item)
    <p><br></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><u><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>SURAT IZIN KERJA PRAKTIK</span></u></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'
    >No. : {{sprintf('%03d', $item->id)}}/{{$item->kode_surat}}/FTI/{{$item->created_at->format('Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Yang bertanda tangan di bawah ini saya:</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:108.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->nama}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>NIM&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->username}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>No. Telepon&nbsp; &nbsp;&nbsp;: {{$item->telp_pembuat}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$item->email_pembuat}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Dengan ini mengajukan permohonan pembuatan Surat Keterangan Kerja Praktik</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Perusahaan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{$item->mitra}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->alamat_mitra}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>No. Telepon&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{$item->tlp_mitra}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Tanggal Mulai&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{$item->tgl_kegiatan->format('d F Y')}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Tanggal Selesai&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{$item->tgl_selesai->format('d F Y')}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>Deskripsi Pekerjaan &nbsp; &nbsp;: {{$item->keterangan}}</b></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    {{$item->created_at->format('d F Y')}}</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Mengetahui</span></p>
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'><b>
    @if ($item->tanda_tangan == "Restyandito, S.Kom., MSIS, Ph.D.")
    Koordinator Kerja Praktik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemohon
    @elseif ($item->tanda_tangan == "Gloria Virginia, S.Kom., MAI, Ph.D.")
    Koordinator Kerja Praktik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemohon
    @elseif ($item->tanda_tangan == "Drs. Jong Jek Siang, M.Sc.")
    Koordinator Kerja Praktik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemohon
    @elseif ($item->tanda_tangan == "Widi Hapsari, Dra., M.T.")
    Koordinator Kerja Praktik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemohon
    @else
    Koordinator Kerja Praktik &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pemohon
    @endif</b></span></p>
    <img style=';margin-right:0.75cm;margin-left:1cm;' src="https://i.ibb.co/hfvBQpr/rpltandatangan.png" width="225" height="52.27">
    <p style='margin-top:0cm;margin-right:0.75cm;margin-bottom:8.0pt;margin-left:1cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'><span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>
    <b><u>{{$item->tanda_tangan}}</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <u>{{$item->nama}}</u></u></b></span></p>
    @endforeach
</body>
</html>