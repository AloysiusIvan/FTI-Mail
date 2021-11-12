<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTI-MAIL</title>
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
						<a href="#addSuratModal" class="btn btn-success" data-toggle="modal">Dosen</a>
						<a href="#addSuratModal" class="btn btn-success" data-toggle="modal">Mahasiswa</a>											
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Tujuan Surat</th>
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
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('updatesurat',$item->id) }}" method="post">
			@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Detail Record</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
					<label>Tujuan Surat</label>
						<select class="form-control" id="tujuan" name="tujuan" disabled="disabled" required>
						<option value="" selected disabled hidden>Choose here</option>)
						<option value="Surat Izin KP" <?php if($item->tujuan=="Surat Izin KP") echo 'selected="selected"'; ?> >Surat Izin KP</option>
						<option value="Surat Tugas" <?php if($item->tujuan=="Surat Tugas") echo 'selected="selected"'; ?> >Surat Tugas</option>
						<option value="Surat Keterangan" <?php if($item->tujuan=="Surat Keterangan") echo 'selected="selected"'; ?> >Surat Keterangan</option>
						<option value="Berita Acara" <?php if($item->tujuan=="Berita Acara") echo 'selected="selected"'; ?> >Berita Acara</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Mitra</label>
						<input type="text" class="form-control" id="mitra" name="mitra" value="{{ $item->mitra }}" disabled="disabled" required>
					</div>
					<div class="form-group">
						<label>Alamat Mitra</label>
						<textarea class="form-control" id="alamat_mitra" name="alamat_mitra" disabled="disabled" required>{{ $item->alamat_mitra }}</textarea>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" disabled="disabled" required>{{ $item->keterangan }}</textarea>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				</div>
			</form>
		</div>
	</div>
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