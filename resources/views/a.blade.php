@extends('layouts.master')
@extends('layouts.app')
@section('a')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>

<?php
$image=glob("gambar/g.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>

<center><h1>Assalamualaikum</h1></center>
<center><h1>Welcome The My Web</h1></center>
</body>
</html>
@endsection