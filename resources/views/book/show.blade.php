@extends('layouts.app')
@section('content')
<div class="row">
<div class="container">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right">
		<a href="{{ URL::previous()}}">Kembali</a></div>
		</div>

		<div class="panel-body">
			<form action="{{route('book.show',$book->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Title</label>
					<input type="text" name="a" value="{{$book->title}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="b" value="{{$book->name}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Amound</label>
					<input type="number" name="c" value="{{$book->amound}}" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover" value="{{asset('img/'.$book->cover.'')}}" width="70" height="70" class="form-control" readonly="">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection