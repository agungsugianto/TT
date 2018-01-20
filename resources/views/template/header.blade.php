@extends('layouts.app')
@section('content')
	<!doctype html>
<html lang="{{ app()->getLocale() }}">

         
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<link href="/Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<link href="/Bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
<link href="/Bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

 <style>
            html, body {
            	margin: 0;
            	padding: 0;
            	height: 100%;
            	font: 13px Arial;
                
}
.wrapper{
	min-height: 100%;
	position: relative;

}
.header{
	            background-color: #f0f0f0;
	            padding: 5px;
	            height: 50px;
	            color: #0000ff;
    
}

    
           
        </style>
    </head><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
              <body>
<font color="Blue">  
                 <ul class="nav nav-tabs">
  <li role="presentation"><a href="page"><button type="button" class="btn btn-default">Menu Utama</button></a></li>
  <li role="presentation"><a href="page2"><button type="button" class="btn btn-primary">Gallery</button></a></li>
  <li role="presentation"><a href="page3"><button type="button" class="btn btn-danger">Data Table</button></a></li>
  <li role="presentation"><a href="page4"><button type="button" class="btn btn-primary">Peran Karakter One Piece</button></a></li>
  <li role="presentation"><a href="page6"><button type="button" class="btn btn-danger">paragraf</button></a></li>
  <li role="presentation"><a href="page5"><button type="button" class="btn btn-primary">Bebas</button></a></li>
  
          </ul> 
      
     </font>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

</body>
</html>
@endsection