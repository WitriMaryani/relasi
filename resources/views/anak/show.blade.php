@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull-right">
		<a href="{{ URL::previous()}}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('anak.update',$anak->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" value="{{$anak->nama}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Orangtua</label>
					<input type="text" name="b" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Umur</label>
					<input type="number" name="c" value="{{$anak->umur}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea class="form-control" rows="10" name="d" readonly="">{{$anak->alamat}}</textarea>
			</form>
		</div>
	</div>
</div>
</div>
@endsection