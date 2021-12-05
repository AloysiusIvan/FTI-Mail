<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTI-MAIL</title>
	<link rel="shortcut icon" href="https://i.ibb.co/FHMpwKZ/1c33db553ca70765ac95a55f66599845.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
<style>
.b-example-divider {
  height: 24px;
}
.bg-header {
  background-color: lightgreen;
}
.pheader {
  font-size: 20px;
  margin: 0px 0px 0px 0px;
  text-transform: uppercase;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.check {
	color: #198754;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}
.css-serial {
 counter-reset: serial-number; /* Set the serial number counter to 0 */
}
.css-serial td:first-child:before {
 counter-increment: serial-number; /* Increment the serial number counter */
 content: counter(serial-number); /* Display the counter */
}
table {
  counter-reset: row-num-1;
}
table tr {
  counter-increment: row-num;
}
table tr td:first-child::before {
    content: counter(row-num);
}
</style>
<body style="background-color:#e7f1ff">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" aria-label="Ninth navbar example">
    <div class="container-xl">
      <a class="navbar-brand" href="/dashboard"><img class="img-fluid" src="https://i.ibb.co/kmQgNHZ/ff1d228afcc78e7657fabc6eb411c8bb.png" width="155" height="24"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Surat</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
              <li><a class="dropdown-item" href="/suratadmin">Surat Masuk</a></li>
              <li><a class="dropdown-item" href="/suratkeluar">Surat Keluar</a></li>
            </ul>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="/arsip">Arsip</a>
          </li>
        </ul>
        <!--<form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/logout"><i class="bi bi-box-arrow-right"></i>Logout</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
<main>
<div class="b-example-divider"></div>
  <div class="container-xl">
  <header class="d-flex justify-content-center py-3 bg-light shadow">
      <ul class="nav nav-pills">
        <li><b><p class="pheader" style="color:#0d6efd">{{auth()->user()->name}} / {{auth()->user()->levels}}</p></b></li>
      </ul>
    </header>
    <div class="table-responsive shadow">
		<div class="table-wrapper">
			<div class="table-title bg-light">
				<div class="row">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<a href="#addSuratModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>On The Spot</a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Jenis Surat</th>
						<th>Mitra</th>
						<th>Pembuat Surat</th>
						<th>Keterangan</th>
						<th style="width:135px; text-align:center;" >Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($surat as $item)
					<tr>
						<td></td>
						<td>{{ $item-> tujuan }}</td>
						<td>{{ $item-> mitra }}</td>
						<td>{{ $item-> nama }}</td>
						<td>{{ $item-> keterangan }}</td>
						<td>
							<a href="#infoSuratModal" class="edit" data-toggle="modal" data-target="#infoSuratModal{{$item->id}}"><i class="bi bi-info-square-fill"></i></a>
							<a href="#prosesSuratModal" class="check" data-toggle="modal" data-target="#prosesSuratModal{{$item->id}}"><i class="bi bi-check-square-fill"></i></a>
							<a href="#tolakSuratModal" class="delete" data-toggle="modal" data-target="#tolakSuratModal{{$item->id}}"><i class="bi bi-x-square-fill"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<!--PAGINATION-->
			<?php 
			$total = $surat->total();
			$page = $surat->perPage();
			$current = $surat->currentPage();
			$totalpage = ceil($total / $page);
			?>
			<div class="clearfix">
				<div class="hint-text">Showing <b>{{$surat->count()}}</b> out of <b>{{ $surat->total() }}</b> entries</div>
				<ul class="pagination">
				@if ($surat->onFirstPage())
				@else
					<li class="page-item"><a href="{{$surat->previousPageUrl()}}" class="page-link">Previous</a></li>
				@endif
					@for($i=1 ; $i <= $totalpage ; $i++)
					@if ($i == $current)
						<li class="page-item active"><a href="{{$surat->url($i)}}" class="page-link">{{$i}}</a></li>	
					@else
						<li class="page-item"><a href="{{$surat->url($i)}}" class="page-link">{{$i}}</a></li>
					@endif
					@endfor
				@if ($surat->hasMorePages())
					<li class="page-item"><a href="{{$surat->nextPageUrl()}}" class="page-link">Next</a></li>
				@else
				@endif
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Add Modal HTML BASE -->
<div id="addSuratModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<a href="#addSuratModalkp" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Izin KP</a>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModalsurattugas" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Tugas</a>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModalsk" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Keterangan</a>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModalberitaacara" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Berita Acara</a>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModalundangan" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Undangan</a>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML SURAT TUGAS -->
<div id="addSuratModalsurattugas" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsuratadmin" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Tugas">
					</div>
					<div class="form-group">
						<label>NID</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label>Nama Mitra</label>
						<input type="text" class="form-control" id="mitra" name="mitra" required>
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Alamat Mitra</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" required></textarea>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
					</div>
					<div id="peserta" class="form-group">
						<input type="checkbox" name="peserta" value="Y">
						<label>Tambah peserta/rekan</label>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML SURAT KP -->
<div id="addSuratModalkp" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsuratadmin" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Izin KP">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" class="form-control" id="mitra" name="mitra" required>
					</div>
					<div class="form-group">
						<label>Alamat Perusahaan</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" required></textarea>
					</div>
					<div class="form-group">
						<label>No. Telepon Perusahaan</label>
						<input type="number" class="form-control" id="tlp_mitra" name="tlp_mitra" required>
					</div>
					<div class="form-group">
						<label>Tanggal Mulai</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tanggal Selesai</label>
						<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
					</div>
					<div class="form-group">
						<label>Deskripsi Pekerjaan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML BERITA ACARA -->
<div id="addSuratModalberitaacara" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsuratadmin" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="tujuan" name="tujuan" value="Berita Acara">
					</div>
					<div class="form-group">
						<label>NIM / NID</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tempat Pelaksanaan</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" required></textarea>
					</div>
					<div class="form-group">
						<label>Nama Kegiatan</label>
						<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tema Kegiatan</label>
						<input type="text" class="form-control" id="tema_kegiatan" name="tema_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Pembicara / Tamu</label>
						<input type="text" class="form-control" id="pembicara_tamu" name="pembicara_tamu" required>
					</div>
					<div class="form-group">
						<label>Nama Mitra</label>
						<input type="text" class="form-control" id="mitra" name="mitra" required>
					</div>
					<div class="form-group">
						<label>Diikuti Oleh</label>
						<textarea class="form-control" id="diikuti" name="diikuti" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML SURAT KETARANGAN AKTIF KULIAH -->
<div id="addSuratModalsk" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsuratadmin" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Keterangan Aktif">
					</div>
					<div class="form-group">
						<label>NIM / NID</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label>Keperluan</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" required>
					</div>
					<div class="form-group">
						<label>Tempat lahir</label>
						<input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" required></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Add Modal HTML SURAT UNDANGAN -->
<div id="addSuratModalundangan" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsuratadmin" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Undangan">
					</div>
					<div class="form-group">
						<label>NIM / NID</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label>Hal</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" required>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
						<label>Penerima Surat</label>
						<input type="text" class="form-control" id="pembicara_tamu" name="pembicara_tamu" required>
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" required>
					</div>
					<div class="form-group">
						<label>Mitra</label>
						<input type="text" class="form-control" id="mitra" name="mitra" required>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
						<label>Kegiatan</label>
						<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tema Kegiatan / Bahasan</label>
						<input type="text" class="form-control" id="tema_kegiatan" name="tema_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Waktu</label>
						<input style="width:115px" class="form-control" type="time" id="waktu" name="waktu" required>
					</div>
					<div class="form-group">
						<label>Tempat Kegiatan</label>
						<input class="form-control" type="text" id="alamat_mitra" name="alamat_mitra" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Proses Modal HTML -->
@foreach($surat as $item)
<div id="prosesSuratModal{{$item->id}}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('prosessurat',$item->id) }}" method="post">
			@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Proses Record</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Jenis Surat</label>
						<select class="form-control" id="kode_surat" name="kode_surat" required>
							<option value="" selected disabled hidden>Choose here</option>
							<option value="A">Surat berkaitan dengan personalia & SK</option>
							<option value="B">Surat keterangan kegiatan mahasiswa</option>
							<option value="C">Surat undangan, daftar hadir kegiatan</option>
							<option value="D">Surat tugas dan DP3</option>
							<option value="E">Berita Acara Kegiatan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tanda Tangan</label>
						<select class="form-control" id="tanda_tangan" name="tanda_tangan" required>
							<option value="" selected disabled hidden>Choose here</option>
							<option>Restyandito, S.Kom., MSIS, Ph.D.</option>
							<option>Gloria Virginia, S.Kom., MAI, Ph.D.</option>
							<option>Drs. Jong Jek Siang, M.Sc.</option>
							<option>Widi Hapsari, Dra., M.T.</option>
							<option>Willy Sudiarto Raharjo, S.Kom., M.Cs.</option>
						</select>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
<!-- Info Modal HTML -->
@foreach($surat as $item)
<div id="infoSuratModal{{$item->id}}" class="modal fade">
	@if ($item->tujuan == "Surat Izin KP"){
		<div class="modal-dialog">
		<div class="modal-content">
			<form>
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>No. Telepon Mahasiswa</label>
						<input disabled type="text" class="form-control" id="telp_pembuat" name="telp_pembuat" value ="{{$item->telp_pembuat}}" required>
					</div>
					<div class="form-group">
						<label>Email Mahasiswa</label>
						<input disabled type="email" class="form-control" id="email_pembuat" name="email_pembuat" value ="{{$item->email_pembuat}}" required>
					</div>
					<div class="form-group">
						<label>Nama Perusahaan</label>
						<input disabled type="text" class="form-control" id="mitra" name="mitra" value ="{{$item->mitra}}" required>
					</div>
					<div class="form-group">
						<label>Alamat Perusahaan</label>
						<textarea disabled class="form-control" id="alamat_mitra" name="alamat_mitra" required>{{$item->alamat_mitra}}</textarea>
					</div>
					<div class="form-group">
						<label>No. Telepon Perusahaan</label>
						<input disabled type="number" class="form-control" id="tlp_mitra" name="tlp_mitra" value ="{{$item->tlp_mitra}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Mulai</label>
						<input disabled type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value ="{{$item->tgl_kegiatan->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Selesai</label>
						<input disabled type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value ="{{$item->tgl_selesai->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Deskripsi Pekerjaan</label>
						<textarea disabled class="form-control" id="keterangan" name="keterangan" required>{{$item->keterangan}}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
	} @elseif ($item->tujuan == "Surat Keterangan Aktif"){
		<div class="modal-dialog">
		<div class="modal-content">
			<form>
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Keperluan</label>
						<input disabled type="text" class="form-control" id="keterangan" name="keterangan" value ="{{$item->keterangan}}" required>
					</div>
					<div class="form-group">
						<label>Tempat lahir</label>
						<input disabled type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" value ="{{$item->tpt_lahir}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input disabled type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value ="{{$item->tgl_kegiatan->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea disabled class="form-control" id="alamat_mitra" name="alamat_mitra" required>{{$item->alamat_mitra}}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
	} @elseif($item->tujuan == "Berita Acara"){
		<div class="modal-dialog">
		<div class="modal-content">
			<form>
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input disabled type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="{{$item->tgl_kegiatan->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Tempat Pelaksanaan</label>
						<textarea disabled class="form-control" id="alamat_mitra" name="alamat_mitra" required>{{$item->alamat_mitra}}</textarea>
					</div>
					<div class="form-group">
						<label>Nama Kegiatan</label>
						<input disabled type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{$item->nama_kegiatan}}" required>
					</div>
					<div class="form-group">
						<label>Tema Kegiatan</label>
						<input disabled type="text" class="form-control" id="tema_kegiatan" name="tema_kegiatan" value="{{$item->tema_kegiatan}}" required>
					</div>
					<div class="form-group">
						<label>Pembicara / Tamu</label>
						<input disabled type="text" class="form-control" id="pembicara_tamu" name="pembicara_tamu" value="{{$item->pembicara_tamu}}" required>
					</div>
					<div class="form-group">
						<label>Nama Mitra</label>
						<input disabled type="text" class="form-control" id="mitra" name="mitra" value="{{$item->mitra}}" required>
					</div>
					<div class="form-group">
						<label>Diikuti Oleh</label>
						<textarea disabled class="form-control" id="diikuti" name="diikuti" required>{{$item->diikuti}}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
	} @elseif($item->tujuan == "Surat Tugas"){
		<div class="modal-dialog">
		<div class="modal-content">
			<form>
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Mitra</label>
						<input disabled type="text" class="form-control" id="mitra" name="mitra" value="{{$item->mitra}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input disabled type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="{{$item->tgl_kegiatan->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Alamat Mitra</label>
						<textarea disabled class="form-control" id="alamat_mitra" name="alamat_mitra" required>{{$item->alamat_mitra}}</textarea>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea disabled class="form-control" id="keterangan" name="keterangan" required>{{$item->keterangan}}</textarea>
					</div>
					<div id="peserta" class="form-group">
						<input disabled type="checkbox" name="peserta" value="Y">
						<label>Tambah peserta/rekan</label>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
	}@else{
		<div class="modal-dialog">
		<div class="modal-content">
			<form>
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Hal</label>
						<input disabled type="text" class="form-control" id="keterangan" name="keterangan" value="{{$item->keterangan}}" required>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
						<label>Penerima Surat</label>
						<input disabled type="text" class="form-control" id="pembicara_tamu" name="pembicara_tamu" value="{{$item->pembicara_tamu}}" required>
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input disabled type="text" class="form-control" id="jabatan" name="jabatan" value="{{$item->jabatan}}" required>
					</div>
					<div class="form-group">
						<label>Mitra</label>
						<input disabled type="text" class="form-control" id="mitra" name="mitra" value="{{$item->mitra}}" required>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
						<label>Kegiatan</label>
						<input disabled type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{$item->nama_kegiatan}}" required>
					</div>
					<div class="form-group">
						<label>Tema Kegiatan / Bahasan</label>
						<input disabled type="text" class="form-control" id="tema_kegiatan" name="tema_kegiatan" value="{{$item->tema_kegiatan}}" required>
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input disabled type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="{{$item->tgl_kegiatan->format('Y-m-d')}}" required>
					</div>
					<div class="form-group">
						<label>Waktu</label>
						<input disabled style="width:115px" class="form-control" type="time" id="waktu" name="waktu" value="{{$item->waktu->format('G:i')}}" required>
					</div>
					<div class="form-group">
						<label>Tempat Kegiatan</label>
						<input disabled class="form-control" type="text" id="alamat_mitra" name="alamat_mitra" value="{{$item->alamat_mitra}}" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
				</div>
			</form>
		</div>
	</div>
	}@endif
</div>
@endforeach
<!-- Tolak Modal HTML -->
@foreach($surat as $item)
<div id="tolakSuratModal{{$item->id}}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('tolaksurat',$item->id) }}" method="post">
			@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Tolak Surat</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to reject these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
</main>
@include('sweetalert::alert');
</body>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</html>