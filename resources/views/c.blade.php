@extends('layouts.master3')
@extends('layouts.app')
@section('c')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233</td>
                <td>Agung</td>
                <td>Jakarta</td>
                <td>2001-05-17</td>
                <td>Bandung</td>
                <td>Dokter</td>
                <td>Bulu Tangkis</td>
                <td><?php
$image=glob("gambar/g.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>Kiki</td>
                <td>Bandung</td>
                <td>2000-11-02</td>
                <td>Bandung</td>
                <td>Perawat</td>
                <td>Menyanyi</td>
                <td><?php
$image=glob("gambar/h.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

</body>
</html>

@endsection