@extends('template')

@section('main')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<th>Infos</th>
			<th>Date de scan</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Détail</th>

		</tr>
		@foreach($scans as $scan)
			<tr>
				<td>{{$scan->id}}</td>
				<td>{{$scan->commentaire}}</td>
				<td>{{$scan->date}}</td>
				<td>{{$scan->lat}}</td>
				<td>{{$scan->lng}}</td>
				<td><a href="{{url('detail/')}}/{{$scan->id}}">Voir</a></td>
			</tr>
		@endforeach
	</table>
	</div>
@stop