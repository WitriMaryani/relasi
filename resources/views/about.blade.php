<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
		@foreach($ortu as $data)<hr>
			Nama Ibu  : {{$data->nama_ibu}}<br>
			Nama Ayah : {{$data->nama_ayah}}<br>
			Umur Ibu  : {{$data->umur_ibu}}<br>
			Umur Ayah : {{$data->umur_ayah}}<br><hr>
		@endforeach
</body>
</html>