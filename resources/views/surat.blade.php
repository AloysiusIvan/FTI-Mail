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
table.table td a.delete {
	color: #F44336;
}
table.table td a.peserta {
	color: #0d6efd;
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
          @if (auth()->user()->levels=="mahasiswa" || auth()->user()->levels=="dosen")
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/surat">Surat</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Surat</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
              <li><a class="dropdown-item" href="/surat">Surat Masuk</a></li>
              <li><a class="dropdown-item" href="/surat">Surat Keluar</a></li>
            </ul>
          </li>
          @endif
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
						<a href="#addSuratModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>Add New</a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tujuan Surat</th>
						<th>Mitra</th>
						<th>Alamat Mitra</th>
						<th>Keterangan</th>
						<th style="width:135px; text-align:center;">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($surat as $item)
					<tr>
						<td></td>
						<td>{{ $item-> tujuan }}</td>
						<td>{{ $item-> mitra }}</td>
						<td>{{ $item-> alamat_mitra }}</td>
						<td>{{ $item-> keterangan }}</td>
						<td>
							@if ($item->peserta == "Y")
							<a href="#editSuratModal" class="edit" data-toggle="modal" data-target="#editSuratModal{{$item->id}}"><i class="bi bi-pencil-fill"></i></a>
							<a href="#deleteSuratModal" class="delete" data-toggle="modal" data-target="#deleteSuratModal{{$item->id}}"><i class="bi bi-trash-fill"></i></a>
							<a href="/viewpeserta/{{$item->id}}" class="peserta"><i class="bi bi-person-plus-fill"></i></a>
							@elseif ($item->peserta == "E")
							<a href="#editSuratModal" class="edit" data-toggle="modal" data-target="#editSuratModal{{$item->id}}"><i class="bi bi-pencil-fill"></i></a>
							<a href="#deleteSuratModal" class="delete" data-toggle="modal" data-target="#deleteSuratModal{{$item->id}}"><i class="bi bi-trash-fill"></i></a>
							<a href="/viewupdatepeserta/{{$item->id}}"><i class="bi bi-person-lines-fill"></i></a>
							@else
							<a href="#editSuratModal" class="edit" data-toggle="modal" data-target="#editSuratModal{{$item->id}}"><i class="bi bi-pencil-fill"></i></a>
							<a href="#deleteSuratModal" class="delete" data-toggle="modal" data-target="#deleteSuratModal{{$item->id}}"><i class="bi bi-trash-fill"></i></a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
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
					@if (auth()->user()->levels=="mahasiswa")
					<a href="#addSuratModalkp" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Izin KP</a>
					@else
					<a href="#addSuratModalsurattugas" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Tugas</a>
					@endif
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModa2l" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Keterangan</a>
					</div>
					<hr class="mt-2 mb-3"/>
					<div class="form-group">
					<a href="#addSuratModalberitaacara" class="btn btn-success d-grid gap-2" data-toggle="modal">Surat Berita Acara</a>
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
			<form action="/addsurat" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="username" name="username" value="{{auth()->user()->username}}">
						<input type="hidden" id="name" name="name" value="{{auth()->user()->name}}">
						<input type="hidden" id="levels" name="levels" value="{{auth()->user()->levels}}">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Tugas">
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
			<form action="/addsurat" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="username" name="username" value="{{auth()->user()->username}}">
						<input type="hidden" id="name" name="name" value="{{auth()->user()->name}}">
						<input type="hidden" id="levels" name="levels" value="{{auth()->user()->levels}}">
						<input type="hidden" id="tujuan" name="tujuan" value="Surat Izin KP">
					</div>
					<div class="form-group">
						<label>No. Telepon Mahasiswa</label>
						<input type="number" class="form-control" id="telp_pembuat" name="telp_pembuat" required>
					</div>
					<div class="form-group">
						<label>Email Mahasiswa</label>
						<input type="email" class="form-control" id="email_pembuat" name="email_pembuat" required>
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
<!-- Add Modal HTML BERITA ACARA -->
<div id="addSuratModalberitaacara" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/addsurat" method="post">
			{{ csrf_field() }}
				<div class="modal-header">						
					<h4 class="modal-title">Add New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" id="username" name="username" value="{{auth()->user()->username}}">
						<input type="hidden" id="name" name="name" value="{{auth()->user()->name}}">
						<input type="hidden" id="levels" name="levels" value="{{auth()->user()->levels}}">
						<input type="hidden" id="tujuan" name="tujuan" value="Berita Acara">
					</div>
					<div class="form-group">
						<label>Tanggal Kegiatan</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" required>
					</div>
					<div class="form-group">
						<label>Tempat Pelaksanaan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
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
<!-- Edit Modal HTML -->
@foreach($surat as $item)
<div id="editSuratModal{{$item->id}}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('updatesurat',$item->id) }}" method="post">
			@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Edit Record</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<label>Tujuan Surat</label>
						<select class="form-control" id="tujuan" name="tujuan" required>
						<option value="" selected disabled hidden>Choose here</option>
						@if (auth()->user()->levels=="mahasiswa")
						<option value="Surat Izin KP" <?php if($item->tujuan=="Surat Izin KP") echo 'selected="selected"'; ?> >Surat Izin KP</option>
						@else
						<option value="Surat Tugas" <?php if($item->tujuan=="Surat Tugas") echo 'selected="selected"'; ?> >Surat Tugas</option>
						@endif
						<option value="Surat Keterangan" <?php if($item->tujuan=="Surat Keterangan") echo 'selected="selected"'; ?> >Surat Keterangan</option>
						<option value="Berita Acara" <?php if($item->tujuan=="Berita Acara") echo 'selected="selected"'; ?> >Berita Acara</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Mitra</label>
						<input type="text" class="form-control" id="mitra" name="mitra" value="{{ $item->mitra }}" required>
					</div>
					@if ($item->tgl_kegiatan != NULL)
					<div id="tgl" class="form-group">
						<label>Tanggal Kegiatan</label>
						<input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="{{$item->tgl_kegiatan}}">
					</div>
					@endif
					<div class="form-group">
						<label>Alamat Mitra</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" required>{{ $item->alamat_mitra }}</textarea>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" required>{{ $item->keterangan }}</textarea>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
<!-- Delete Modal HTML -->
@foreach($surat as $item)
<div id="deleteSuratModal{{$item->id}}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('deletesurat',$item->id) }}" method="post">
			@method('delete')
			@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Delete Record</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
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
	$('#tujuan').on('change',function(){
		var selection = $(this).val();
		switch(selection){
		case "Berita Acara":
		$("#surat_tugas").hide()
		break;
		case "Surat Keterangan":
		$("#surat_tugas").hide()
		break;
		case "Surat Tugas":
		$("#surat_tugas").show()
		$("#peserta").show()
		break;
		case "Surat Izin KP":
		$("#surat_tugas").hide()
		break;
		default:
		$("#surat_tugas").hide()
		$("#peserta").hide()
		}
	});
</script>
</html>