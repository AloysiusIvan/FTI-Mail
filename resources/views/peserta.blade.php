<!DOCTYPE html>
<html>
<head>
	<title>FTI-MAIL</title>
        <!--Jquery Link-->
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<!-- Bootstrap Styling-->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	
	
	<!-- custom stylesheet-->
	<link rel="stylesheet" type="text/css" href="dynamic.css" />
 
	<!-- custom javascript-->
	<script src="dynamic.js"></script>
 
</head>
<style>
body{
    background-color: #e7f1ff;
}
.centered-form{
    margin-top: 100px;
}
 
.centered-form .panel{
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<body>
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <div class="panel panel-info">
 
                    <div class="panel-heading text-center">
                   
                        <h1 class="panel-title">Tambah peserta dari</h1>
                    </div>
 
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('addpeserta',$surat->id) }}">
                            @csrf
                            <div class="list_wrapper">  
                                <div class="row">
 
                                    <div class="col-xs-4 col-sm-4 col-md-4">
 
                                        <div class="form-group">
                                            NID/NIM
                                            <input name="id_peserta[]" type="text" placeholder="NID/NIM Peserta" class="form-control"/>
                                            
                                        </div>
                                    </div>
 
                                    <div class="col-xs-7 col-sm-7 col-md-7">
                                        <div class="form-group">
                                            Nama
                                            <input type="text" placeholder="Nama Peserta" class="form-control" disabled/>
                                        </div>
                                    </div> 
 
                                    <div class="col-xs-1 col-sm-1 col-md-1">
                                        <br>
                                       <button class="btn btn-primary list_add_button" type="button">+</button>
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" value="Submit" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert');
</body>
<script>
$(document).ready(function()

    {
	$('.list_add_button').click(function()
	    {
	        var list_fieldHTML = '<div class="row"><div class="col-xs-4 col-sm-4 col-md-4"><div class="form-group"><input name="id_peserta[]" type="text" placeholder="NID/NIM Peserta" class="form-control"/></div></div><div class="col-xs-7 col-sm-7 col-md-7"><div class="form-group"><input disabled type="text" placeholder="Nama Peserta" class="form-control"/></div></div><div class="col-xs-1 col-sm-7 col-md-1"><a href="javascript:void(0);" class="list_remove_button btn btn-danger">-</a></div></div>'; //New input field html 
	        $('.list_wrapper').append(list_fieldHTML);
        });
        //Once remove button is clicked
        $('.list_wrapper').on('click', '.list_remove_button', function()
        {
           $(this).closest('div.row').remove(); //Remove field html
           x--; //Decrement field counter
        });
});
</script>
</html>