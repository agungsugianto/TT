@extends('layouts.master2')
@extends('layouts.app')
@section('b')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<center><h2>Karakter One Piece</h2>
<?php
$image=glob("gambar/a.jpg");
$gg=glob("gambar/b.jpg");
$ww=glob("gambar/c.jpg");
$aa=glob("gambar/d.jpg");
$zz=glob("gambar/e.jpg");
$app=glob("gambar/f.jpg");
for($i=0;$i<count($image);$i++)
for($i=0;$i<count($gg);$i++)
for($i=0;$i<count($zz);$i++)	
for($i=0;$i<count($app);$i++)	

{
	$single_image = $image[$i];
	$double = $gg[$i];
	$three = $ww[$i];
	$four = $aa[$i];
	$five = $zz[$i];
	$six = $app[$i];
?>
	<img src="<?php echo $single_image;?>" width="350" heigth="270"/?>
	<img src="<?php echo $double;?>" width="350" heigth="270"/?>
	<img src="<?php echo $three;?>" width="350" heigth="270"/?>
	<img src="<?php echo $four;?>" width="350" heigth="270"/?>
	<img src="<?php echo $five;?>" width="350" heigth="270"/?>
	<img src="<?php echo $six;?>" width="350" heigth="270"/?>
	<?php
}
	?>
</center>
</body>
</html>
@endsection