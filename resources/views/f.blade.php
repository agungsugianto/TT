@extends('layouts.master6')
@extends('layouts.app')
@section('f')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Persahabatan<span class="text-muted">Best friends four ever</span></h2>
          <p class="lead">Kelemahan diriku adalah kelebihan sahabatku, kelebihan dariku adalah bagian dari kehebatan sahabatku.</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/i.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Persahabatan<span class="text-muted">Best friend four ever</span></h2>
          <p class="lead">Kau tahu seseorang adalah sahabat sejati ketika kau akan menangis, dia mengatakan hal-hal yang paling konyol hanya untuk melihatmu tersenyum.
</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$wakwaw=glob("gambar/j.jpg");
for($i=0;$i<count($wakwaw);$i++)	
{
	$double = $wakwaw[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260" align="right"/?>
	<?php
}
	?>        </div>
      </div>

     

      <hr class="featurette-divider">

</body>
</html>
@endsection