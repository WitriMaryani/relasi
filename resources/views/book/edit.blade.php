@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
	<center><h1>Edit Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right">
		<a href="{{ URL::previous()}}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('book.update',$book->id)}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Title</label>
					<input type="text" name="a" value="{{$book->title}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<select class="form-control" name="b">
						@foreach($author as $data)
						<option value="{{$data->id}}" selected="">{{$data->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Amound</label>
					<input type="number" name="c" value="{{$book->amound}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover" value="{{$book->cover}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection